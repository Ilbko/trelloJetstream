<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class workspace extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'workspace_user_id', 'id');
    }

    public function guestUser(){
        return $this->hasMany(UserWorkspace::class);
    }

    protected $primaryKey = 'workspace_id';
}
