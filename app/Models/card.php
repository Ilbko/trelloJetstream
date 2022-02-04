<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;

    public function column(){
        return $this->belongsTo(Column::class, 'card_column_id', 'column_id');
    }

    protected $primaryKey = 'card_id';
}
