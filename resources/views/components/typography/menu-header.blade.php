<p {{ $attributes->merge(['class' => 'ml-2 pb-3 text-[0.8rem] uppercase text-gray-900 md:text-blue-100 font-medium']) }}
    x-bind:class="{
        'invisible': isCollapsed && !isHovered
    }">{{ $slot }}</p>
