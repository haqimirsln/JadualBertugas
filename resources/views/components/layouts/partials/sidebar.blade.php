<aside
    x-bind:class="{
        'w-[4.5rem]': isCollapsed && !isHovered,
        'w-64': !isCollapsed || isHovered,
    }"
    class="z-20 h-screen flex-shrink-0 transition-all duration-200 lg:sticky lg:block hidden text-white bg-slate-800 max-w-64"
    aria-label="Sidebar" id="sidebar-container">
    <div class="relative h-full flex-1 flex-col">
        <button type="button" class="absolute top-2 -right-8 bg-slate-800 text-white p-2 rounded-r-lg cursor-pointer"
            x-on:click="isCollapsed = !isCollapsed">
            <i class="ri-expand-left-fill" x-show="!isCollapsed"></i>
            <i class="ri-expand-right-fill" x-show="isCollapsed"></i>
        </button>
        <div
            x-on:mouseover="isHovered = true"
            x-on:mouseleave="isHovered = false"
            id="sidebar"
            class="no-scrollbar lg:flex hidden flex-col overflow-y-auto flex-1 space-y-6 bg-transparent h-full px-4 pb-16">
            <div class="pt-0 lg:pt-6">
                <x-layouts.partials.navbar-logo />
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</aside>
