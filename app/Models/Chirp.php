<?php

namespace App\Models;
use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    protected $keyType = 'int';
    public $incrementing = true;
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = ['user_id', 'message', 'created_at', 'updated_at'];

}
