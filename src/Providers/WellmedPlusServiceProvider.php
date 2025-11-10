<?php

namespace Projects\WellmedPlus\Providers;

use Hanafalah\LaravelSupport\{
    Concerns\NowYouSeeMe,
    Supports\PathRegistry
};
use Projects\WellmedPlus\{
    WellmedPlus,
    Contracts,
    Facades
};
use Hanafalah\MicroTenant\Facades\MicroTenant;
use Projects\WellmedPlus\Contracts\Supports\ConnectionManager;
use Projects\WellmedPlus\Supports\ConnectionManager as SupportsConnectionManager;

class WellmedPlusServiceProvider extends WellmedPlusEnvironment
{
    use NowYouSeeMe;

    public function register()
    {
        $this->registerMainClass(WellmedPlus::class,false)
            ->registerCommandService(CommandServiceProvider::class)
            ->registers([
                'Services' => function(){
                    $this->binds([
                        Contracts\WellmedPlus::class => function(){
                            return new WellmedPlus;
                        },
                        ConnectionManager::class => SupportsConnectionManager::class
                        //WorkspaceDTO\WorkspaceSettingData::class => WorkspaceSettingData::class
                    ]);   
                },
                'Config' => function() {
                    $this->__config_wellmed_plus = config('wellmed-plus');
                },
                'Provider' => function(){
                    $this->registerOverideConfig('wellmed-plus',__DIR__.'/../'.$this->__config_wellmed_plus['libs']['config']);
                }
            ]);
    }

    public function boot(){        
        $this->registerModel();
        // $kernel->pushMiddleware(PayloadMonitoring::class);
        $this->app->booted(function(){
            try {
                $tenant = $this->TenantModel()->where('flag','APP')->where('props->product_type','WELLMED_PLUS')->first();

                if (isset($tenant)){
                    $model  = Facades\WellmedPlus::myModel($tenant);
                    $cache = app(config('laravel-support.service_cache'))->getConfigCache();

                    $this->registers([
                        '*', 
                        'Provider' => function() use ($model){
                            $this->bootedRegisters($model->packages, 'wellmed-plus', __DIR__.'/../'.$this->__config_wellmed_plus['libs']['migration'] ?? 'Migrations');
                            $this->registerOverideConfig('wellmed-plus',__DIR__.'/../'.$this->__config_wellmed_plus['libs']['config']);
                        },
                        'Model', 'Database'
                    ]);
                    MicroTenant::impersonate($tenant,false);    

                    ($this->checkCacheConfig('config-cache')) ? $this->multipleBinds(config('app.contracts')) : $this->autoBinds();
                    $this->registerRouteService(RouteServiceProvider::class);
                    $this->app->singleton(PathRegistry::class, function() use ($tenant) {
                        $registry = new PathRegistry();
        
                        $config = config("wellmed-plus");
                        foreach ($config['libs'] as $key => $lib) $registry->set($key, 'projects'.$lib);
                        
                        return $registry;
                    });
                }
            } catch (\Throwable $th) {
            }
        });
    }    
}
