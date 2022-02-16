<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ads extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='ads';
    public function adsaddress()
    {
        return $this->belongsTo(AdsAddress::class);
    }
}
