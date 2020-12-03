<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    public function JoinPizza()
    {

            return $this->belongsTo(Pizza1::class );

    }
    protected $table="detailpizza";
}
