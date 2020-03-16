<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['supplierCode','name','category_id','supplier_id','brand_id','stock','diskon','','','','','' ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    // public function brand()
    // {
    //     return $this->belongsTo('App\Brand', 'brand_id', 'id');
    // }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id', 'id');
    }
}
