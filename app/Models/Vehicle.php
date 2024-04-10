<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\WashRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        "plate_number","make","model","customer_id"
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function wash_records(): HasMany
    {
        return $this->hasMany(WashRecord::class);
    }
}
