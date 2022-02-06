<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    use HasFactory;

    public function workspace(){
        return $this->BelongsTo(Workspace::class, 'board_workspace_id', 'workspace_id');
    }
    
    public function guestUser(){
        return $this->hasMany(UserBoard::class);
    }

    protected $primaryKey = 'board_id';
}
