<?php

namespace Projects\WellmedPlus\Contracts\Supports;

interface ServiceCache {
    public function handle(?array $cache_data = null): void;
    public function getConfigCache(): ?array;
}