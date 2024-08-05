<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

}
