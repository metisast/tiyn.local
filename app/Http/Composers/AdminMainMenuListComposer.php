<?php

namespace App\Http\Composers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AdminMainMenuListComposer
{

    /**
     * Create admin menu list
     *
     */
    protected $local;
    protected $request;
    protected $routeName;

    public function __construct(Request $request)
    {
        $this->local = LaravelLocalization::getCurrentLocale(); //Current local
        $this->request = $request->url(); //Current url
        $this->routeName = $request->route()->getAction()['_active_menu']; //Current route name
        //dd($this->routeName);
    }

    /**
     * Show List Menu
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $list = [
            trans('interface.adminDashboard') => [
                'link' => route('admin.index'),
                'ico' => 'fa-dashboard',
                'routeName' => 'admin',
                'subLink' => null
            ],
            trans('interface.adminProducts') => [
                'link' => route($this->local.'.admin.products.index'),
                'ico' => 'fa-folder-o',
                'routeName' => 'products',
                'subLink' => [
                    trans('interface.adminProductsAll') =>[
                        'link' => route($this->local.'.admin.products.index'),
                        'ico' => 'fa-circle-o'
                    ],
                    trans('interface.adminProductsAdd') =>[
                        'link' => route($this->local.'.admin.products.create'),
                        'ico' => 'fa-circle-o'
                    ],
                ]
            ],
            trans('interface.adminProductsSales') => [
                'link' => route($this->local.'.admin.sales.index'),
                'ico' => 'fa-money',
                'routeName' => 'sales',
                'subLink' => null
            ]
        ];

        $view
            ->with('adminListComp', $list)
            ->with('requestListComp', $this->request)
            ->with('routeName', $this->routeName);

    }
}