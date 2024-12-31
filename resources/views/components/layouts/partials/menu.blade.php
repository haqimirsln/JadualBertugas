@props([
    'route' => null,
    'icon' => null,
    'active' => false,
    'dropdown' => false,
    'menu' => [],
    'totalTask' => null,
])
@if (!$dropdown)
    <li class="text-sm overflow-hidden">
        <a href="{{ $route }}"
            class="flex items-center p-2 group {{ $active ? 'text-cstm-primary md:text-yellow-100 font-semibold' : 'md:text-slate-300 text-gray-900' }}">
            @isset($icon)
                <x-filament::icon icon="{{ $icon }}"
                    class="w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-cstm-primary md:group-hover:text-slate-200 dark:group-hover:text-slate-200 {{ $active ? 'text-cstm-primary md:text-yellow-200' : 'md:text-slate-300 text-gray-900' }} flex-shrink-0 mr-3" />
            @endisset
            <div class="group-hover:text-cstm-primary md:group-hover:text-yellow-100 whitespace-nowrap flex-1"
                x-bind:class="{
                    'invisible': isCollapsed && !isHovered
                }">
                {{ $slot }}</div>
            @if ($totalTask)
                <span
                    class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-semibold text-yellow-800 bg-yellow-100 rounded-full dark:bg-white dark:text-yellow-100">{{ $totalTask }}</span>
            @endif
        </a>
    </li>
@else
    <li x-data="{ open: @js($active) }" class="font-normal">
        <div x-on:click="() => {
            open = !open;
        }"
            class="flex cursor-pointer text-sm items-center w-full p-2 transition duration-75  group {{ $active ? 'text-yellow-100' : 'md:text-slate-300 text-gray-900' }} rounded-lg">
            @isset($icon)
                <x-dynamic-component component="icons.{{ $icon }}" type="{{ $active ? 'solid' : 'solid' }}"
                    class="w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-cstm-primary md:group-hover:text-slate-200 dark:group-hover:text-slate-200 {{ $active ? 'text-cstm-primary md:text-yellow-200' : 'md:text-slate-300 text-gray-900' }} flex-shrink-0 mr-3" />
            @endisset
            <div class="flex-1 text-left whitespace-nowrap group-hover:text-yellow-100"
                x-bind:class="{
                    'invisible': isCollapsed && !isHovered
                }">
                {{ $slot }}</div>
            <svg class="w-3 h-3 group-hover:text-yellow-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </div>
        <div class=" py-2 space-y-2" x-cloak x-show="open">
            @isset($menu)
                @foreach ($menu as $dropdownItem)
                    @foreach ($dropdownItem as $label => $item)
                        @if (array_key_exists('show', $item))
                            @if ($item['show'])
                                @php
                                    $active = array_key_exists('active', $item) ? $item['active'] : false;
                                @endphp
                                <div class="line-clamp-1"
                                    x-bind:class="{
                                        'hidden': isCollapsed && !isHovered
                                    }">
                                    <a href="{{ $item['route'] }}"
                                        class="flex items-center w-full p-2 transition duration-75 pl-4 group  text-sm {{ $active ? 'text-cstm-primary md:text-yellow-100 font-semibold' : 'md:text-slate-300 text-gray-900' }}">{{ $label }}</a>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endforeach
            @endisset
        </div>
    </li>
@endif
