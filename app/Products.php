<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Products extends Model
{
    use AutoNumberTrait;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['supplierCode','name','category_id','supplier_id','brand_id','stock','diskon','','','','','' ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

   
    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id', 'id');
    }

    public function  getAutoNumberOptions()
    {
        return[
            'productCode' => [
                'format' => 'PRD?',
                'length' => 5
            ]
        ];
    }
}
