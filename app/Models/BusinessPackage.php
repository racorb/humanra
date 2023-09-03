<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'package_id',
        'status',
    ];

    public function getPackage(){
        return $this->hasOne(Package::class, 'id', 'package_id'); 
    }

    public function getBusinessArea(){
        return $this->hasOne(BusinessArea::class, 'id', 'business_id'); 
    }
}
