<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'count'];

    public function scopeFilter($query, $params, $items)
    {
        if ( isset($params['count']) && trim($params['count']) != 0 )
        {
            $query->where('count', '=', trim($params['count']));
        }

        if ( isset($params['title']) && trim($params['title']) != '' )
        {
            $query->where('title', 'LIKE', '%'.trim($params['title'].'%'));
        }

        return $query->paginate($items);
    }
}
