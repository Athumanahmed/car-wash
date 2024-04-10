<?php

namespace App\Models;

use App\Models\Site;
use App\Models\User;
use App\Models\WashRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','user_id','site_id'
    ] ;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }

    public function wash_records(): HasMany
    {
        return $this->hasMany(WashRecord::class);
    }
}
