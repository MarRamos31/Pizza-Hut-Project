<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza1 extends Model
{
    public function JoinDetail()
    {
        return $this->hasMany(Detail::class,'id');
    }

    protected $table="detailpizza";

}
