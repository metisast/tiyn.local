<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index(Product $product, Request $request)
    {
        $products = $product->paginate($this->itemsCount);
        return view('admin.products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product, Request $request)
    {
        if($request->ajax())
        {
            $request = $request->all();
            $products = $product->filter($request, $this->itemsCount);
            $i = 1;
            return view('admin._response.products-index')
                ->with('products', $products)
                ->with('i', $i);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if($request->ajax())
        {
            $items = $request->items;
            if(!$items)
            {
                $message = [
                    'title' => trans('interface.adminMessageTitleDelete'),
                    'text' => trans('interface.adminMessageTextDelete'),
                    'deleteButton' => trans('interface.adminMessageTextButtonDelete')
                ];
                return view('admin._response.messages.confirm')
                    ->with('message', $message)
                    ->with('items', $items);
            }

            /*delete products*/
            $this->product->destroy($items);
        }

    }
}
