<a {{ $attributes->merge([
    'class' => 'relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border
border-gray-300 cursor-pointer rounded-md leading-5 dark:border-gray-600 capitalize transition-all hover:bg-blue-600
hover:text-white'
]) }}>
    {{ $slot }}
</a>