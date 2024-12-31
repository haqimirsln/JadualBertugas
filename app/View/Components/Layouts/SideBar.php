<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.side-bar',[
            'menus' => $this->menus()
        ]);
    }

    public function menus()
    {
        // icon search sini:
        // https://blade-ui-kit.com/blade-icons?set=1&search=chart#search
        return [
            'Utama' => [
                [
                    'name' => 'Dashboard',
                    'route' => route('home'),
                    'named' => 'dashboard*',
                    'icon' => 'heroicon-o-chart-pie',
                ],
            ],
            'Kawalan' => [
                [
                    'name' => 'Pengguna',
                    'route' => route('users.index'),
                    'named' => 'admin.properties*',
                    'icon' => 'heroicon-s-users'
                ],
            ],

            // 'Pentadbiran' => [
            //     [
            //         'name' => 'Kawalan',
            //         'named' => [
            //             'admin.roles.*',
            //             'admin.users.*',
            //             'admin.references.approval-authorities.*',
            //             'admin.vots.*',
            //             'admin.system-settings.*',
            //         ],
            //         'icon' => 'cog',
            //         'can' => [
            //             config('mpk.system.permissions.admin.accounts.index'),
            //             config('mpk.system.permissions.admin.accounts.index'),
            //             config('mpk.system.permissions.admin.accounts.index'),
            //         ],
            //         'subs' => [
            //             [
            //                 'name' => 'Pengguna',
            //                 'route' => route('admin.users.index'),
            //                 'named' => 'admin.users*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Peranan',
            //                 'route' => route('admin.roles.index'),
            //                 'named' => 'admin.roles*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Tetapan Sistem',
            //                 'route' => route('admin.settings.index'),
            //                 'named' => 'admin.settings*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ]
            //         ]
            //     ],
            //     [
            //         'name' => 'Kod & Utiliti',
            //         'named' => [
            //             'admin.roles.*',
            //             'admin.users.*',
            //             'admin.references.approval-authorities.*',
            //             'admin.vots.*',
            //             'admin.system-settings.*',
            //         ],
            //         'icon' => 'cog',
            //         'can' => [
            //             config('mpk.system.permissions.admin.accounts.index'),
            //             config('mpk.system.permissions.admin.accounts.index'),
            //             config('mpk.system.permissions.admin.accounts.index'),
            //         ],
            //         'subs' => [
            //             [
            //                 'name' => 'Mukim',
            //                 'route' => route('admin.code-and-utility.mukims.index'),
            //                 'named' => 'admin.code-and-utility.mukims*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Lokasi',
            //                 'route' => route('admin.code-and-utility.locations.index'),
            //                 'named' => 'admin.code-and-utility.locations*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Kategori Bangunan',
            //                 'route' => route('admin.code-and-utility.building-categories.index'),
            //                 'named' => 'admin.code-and-utility.building-categories*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Lokasi Bangunan',
            //                 'route' => route('admin.code-and-utility.building-locations.index'),
            //                 'named' => 'admin.code-and-utility.locations*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Bangunan Gerai',
            //                 'route' => route('admin.code-and-utility.building-and-stalls.index'),
            //                 'named' => 'admin.code-and-utility.building-and-stalls*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ],
            //             [
            //                 'name' => 'Jenis Perniagaan',
            //                 'route' => route('admin.code-and-utility.business-types.index'),
            //                 'named' => 'admin.code-and-utility.business-types*',
            //                 'can' => config('mpk.system.permissions.admin.accounts.index'),
            //             ]
            //         ]
            //     ]
            // ],
        ];
    }
}
