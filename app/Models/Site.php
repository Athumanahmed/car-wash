<?php

namespace App\Models;

use App\Models\User;
use App\Models\Worker;
use App\Models\WashRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;

    protected $fillable = ["name","location","user_id"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workers(): HasMany
    {
        return $this->hasMany(Worker::class);
    }

    public function wash_records(): HasMany
    {
        return $this->hasMany(WashRecord::class);
    }
}
