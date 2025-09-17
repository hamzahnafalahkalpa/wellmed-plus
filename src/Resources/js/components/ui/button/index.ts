import { cva, type VariantProps } from 'class-variance-authority'

export { default as Button } from './Button.vue'
export { default as MultiButton } from './MultiButton.vue'

export const buttonVariants = cva(
  'main-button inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*=\'size-\'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive',
  {
    variants: {
      variant: {
        default:
          'bg-primary text-primary-foreground shadow-xs hover:bg-primary/90',
        destructive:
          'bg-destructive text-white shadow-xs hover:bg-destructive/90 focus-visible:ring-destructive/20 dark:focus-visible:ring-destructive/40 dark:bg-destructive/60',
        outline:
          'border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50',
        secondary:
          'bg-secondary text-secondary-foreground shadow-xs hover:bg-secondary/80',
        ghost:
          'hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50',
        link: 'text-primary underline-offset-4 hover:underline',
      },
      size: {
        default: 'h-9 px-4 py-2 has-[>svg]:px-3',
        sm: 'h-8 rounded-md gap-1.5 px-3 has-[>svg]:px-2.5',
        lg: 'h-10 rounded-md px-6 has-[>svg]:px-4',
        icon: 'size-9',
      }
    },
    defaultVariants: {
      variant: 'default',
      size: 'default'
    },
  },
)

export const buttonTypes = {
  default: {
    icon: 'add',
    label: 'Add',
    variant: 'default'
  },
  add: {
    icon: 'add',
    label: 'Add',
    variant: 'default'
  },
  edit: {
    icon: 'edit',
    label: 'Edit',
    variant: 'secondary'
  },
  delete: {
    icon: 'delete',
    label: 'Delete',
    variant: 'destructive'
  },
  save: {
    icon: 'save',
    label: 'Save',
    variant: 'default'
  },
  close: {
    icon: 'close',
    label: 'Close',
    variant: 'destructive'
  },
  show: {
    icon: 'show',
    label: 'Show',
    variant: 'secondary'
  },
  print: {
    icon: 'print',
    label: 'Print',
    variant: 'secondary'
  },
  download: {
    icon: 'download',
    label: 'Download',
    variant: 'secondary'
  },
  import: {
    icon: 'import',
    label: 'Import',
    variant: 'secondary'
  },
  export: {
    icon: 'export',
    label: 'Export',
    variant: 'secondary'
  },
  report: {
    icon: 'report',
    label: 'Report',
    variant: 'default'
  }
}

export const buttonIcons = {
  add: 'ci:add-plus',
  edit: 'ci:note-edit',
  delete: 'ci:trash-full',
  save: 'ci:save',
  close: 'ci:close-sm',
  show: 'ci:show',
  print: 'ci:printer',
  download: 'ci:cloud-download',
  import: 'ci:download',
  export: 'ci:share-ios-export',
  report: 'ci:paper-plane'
}

export type ButtonVariants = VariantProps<typeof buttonVariants>
export type ButtonTypes = typeof buttonTypes
export type ButtonIcons = typeof buttonIcons
export * from './utils'
