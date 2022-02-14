<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsAddress extends Model
{
    use HasFactory;
    protected $table='ads_adress';
    public function ads()
    {
        return $this->hasOne(Ads::class,'id');
    }
}
