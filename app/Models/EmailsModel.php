<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class EmailsModel extends Model
{
    protected $table = 'emails';
    protected $fillable = ['email', 'user_id'];

    public static function user(): BelongsTo
    {
        return self::belongsTo(User::class);
    }
}
