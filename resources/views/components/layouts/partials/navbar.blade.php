@props(['left' => null, 'right' => null, 'container' => false, 'leftHelpers' => null])
<nav {{ $attributes->merge(['class' => 'sticky z-10 top-0 w-full shadow-sm border-b']) }}>
    <div class=" py-3  {{ $container ? 'container mx-auto' : 'px-3 lg:px-5 lg:pl-3' }}">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                @if (!$container)
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                        class="cursor-pointer rounded p-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900 focus:bg-slate-100 focus:ring-2 focus:ring-slate-100 lg:hidden">
                        <svg id="toggleSidebarMobileHamburger" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="hidden h-6 w-6" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                @endif

                @isset($left)
                    {{ $left }}
                @endisset
                @isset($leftHelpers)
                    <div class="ml-28">
                        {{ $leftHelpers }}
                    </div>
                @endisset
                <div>
                    @isset($middle)
                        {{ $middle }}
                    @endisset
                </div>
            </div>
            <div class="flex items-center gap-4">
                @isset($right)
                    {{ $right }}
                @endisset
            </div>
        </div>
    </div>
</nav>
