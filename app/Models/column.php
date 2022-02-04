<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class column extends Model
{
    use HasFactory;

    public function board(){
        return $this->belongsTo(Board::class, 'column_board_id', 'board_id');
    }

    protected $primaryKey = 'column_id';
}
