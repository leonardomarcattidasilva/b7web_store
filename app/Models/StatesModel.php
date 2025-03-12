<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatesModel extends Model
{
    protected $table = 'states';
    protected $fillable = ['state'];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
