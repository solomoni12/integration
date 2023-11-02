<?php

namespace App\Models;

use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descrption',
        'parentConcept',
        'parentConceptName',
    ];

    public function test(){
        return $this->hasMany(Test::class);
    }
   
}
