<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    use HasFactory;

    public function workplace(){
        return $this->BelongsTo(Workspace::class, 'board_workspace_id', 'board_id');
    }
    
    public function guestUser(){
        return $this->belongsTo(UserBoard::class, 'user_board_id', 'board_id');
    }

    protected $primaryKey = 'board_id';
}
