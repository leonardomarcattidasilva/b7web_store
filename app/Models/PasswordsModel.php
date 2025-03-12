<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PasswordsModel extends Model
{
    protected $table = 'passwords';
    protected $fillable = ['password', 'user_id'];

    public  static function user(): BelongsTo
    {
        return self::belongsTo(User::class);
    }
}
