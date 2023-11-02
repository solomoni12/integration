<?php

namespace App\Models;

use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestConfig extends Model
{
     protected $fillable = [
        'test_id',
        'concept',
        'descrption',
    ];

    public function tests(){
        return $this->belongsTo(Test::class);
    }
}
