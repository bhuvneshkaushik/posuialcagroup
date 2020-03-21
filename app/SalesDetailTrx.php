<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class SalesDetailTrx extends Model
{
    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'detailCode' => [
                'format' => function () {
                    return date('Y.m.d') . '/INV/?';
                },
                'length' => 5
            ]
        ];
    }
}
