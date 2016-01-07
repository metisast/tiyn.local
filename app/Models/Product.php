<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function search($request)
    {
        //$products = new \Illuminate\Database\Eloquent\Collection();
        $products = '';

        if($request['title'] != '')
        {
            $title = $request['title'];
            Product::where('title',"LIKE", "%$title%");
        }
        else if($request['count'] != 0)
        {
            Product::where('count','=', $request['count']);
        }
        else
        {
            $products = Product::paginate(10);
            return $products;
        }
        /*$title = null;
        $count = null;
        if($request['title'] != ''){$title = $request['title'];}
        if($request['count'] != 0){$count = $request['count'];}

        $products = Product::where('title', "LIKE", "%$title%")
            ->where('count','=',$count);*/

        $products = Product::paginate(10);
        return $products;

    }

}
