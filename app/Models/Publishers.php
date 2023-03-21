<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $table = "publishers";
    public $timestamps = false;
    public function game() {
        $this->hasMany(Games::class,'publisher_id','id');

    }
}
