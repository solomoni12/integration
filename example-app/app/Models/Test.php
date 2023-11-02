<?php

namespace App\Models;

use App\Models\Device;
use App\Models\TestConfig;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'name',
        'descrption',
    ];

    public function devices(){
        return $this->belongsTo(Device::class);
    }

    public function testconfig(){
        return $this->hasMany(TestConfig::class);
    }
}
