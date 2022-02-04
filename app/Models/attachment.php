<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    use HasFactory;

    public function card(){
        return $this->belongsTo(Card::class, 'attachment_card_id', 'card_id');
    }

    protected $primaryKey = 'attachment_id';
}
