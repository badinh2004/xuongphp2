<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamp = false;
    use HasFactory;
    protected $fillable = ['title', 'lane_id', 'author', 'position', 'priority', 'created_at', 'comments_count', 'description', 'link_issue'];
    public function lane(){
        return $this->belongsTo(Lane::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
