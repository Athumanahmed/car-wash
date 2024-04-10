<?php

namespace App\Models;

use App\Models\WashRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerCar extends Model
{
    use HasFactory;
    protected $fillable = ['registration_number','owner_phone','owner_name','type'];

    public function wash_records(): HasMany
    {
        return $this->hasMany(WashRecord::class);
    }
}
