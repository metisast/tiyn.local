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

    public function __construct(Request $request)
    {
        $this->local = LaravelLocalization::getCurrentLocale();
        $this->request = $request->url();
        //dd($this->request);
    }

    /**
     * Bind data to the view.
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
                'subLink' => null
            ],
            trans('interface.adminProducts') => [
                'link' => route($this->local.'.admin.products.index'),
                'ico' => 'fa-folder-o',
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
            ]
        ];

        $view->with('adminListComp', $list)->with('requestListComp', $this->request);

    }
}