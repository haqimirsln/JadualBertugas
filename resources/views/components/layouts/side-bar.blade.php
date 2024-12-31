<x-layouts.partials.sidebar>
    <ul class="space-y-2">
        
        @foreach ($menus as $header => $menu)
            <x-typography.menu-header class="pt-4">{{ $header }}</x-typography.menu-header>
            @foreach ($menu as $each)
                {{-- @canany($each['can']) --}}
                @isset($each['subs'])
                    <x-layouts.partials.menu dropdown :icon="$each['icon']" :menu="collect($each['subs'])->map(function ($sub) {
                        return [
                            $sub['name'] => [
                                'active' => request()->route()->named($sub['named']),
                                'show' => auth()->user()->can($sub['can']),
                                'route' => $sub['route'],
                            ],
                        ];
                    })"
                        :active="request()
                            ->route()
                            ->named($each['named'])">{{ $each['name'] }}</x-layouts.partials.menu>
                @else
                    <x-layouts.partials.menu route="{{ $each['route'] }}" :icon="$each['icon']"
                        :active="request()
                            ->route()
                            ->named($each['named'])">{{ $each['name'] }}</x-layouts.partials.menu>
                @endisset
                {{-- @endcanany --}}
            @endforeach
        @endforeach
    </ul>
</x-layouts.partials.sidebar>
