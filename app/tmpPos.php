<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tmpPos extends Model
{
    //
    protected $table ='tmp_pos';
    protected $primaryKey = 'id';

    public function product()
    {
        return $this->belongsTo('App\Products');
    }

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
