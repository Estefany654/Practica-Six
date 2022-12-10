<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Track extends Model
{
    public function player(){
        //pertenece a muchos
        return $this->belongsTo(Player::class);
    }
    use HasFactory;
    protected $fillable = [
        'title',
        'path',
        'player_id',
    ];
    public function getUrlPath(){
        return Storage::url($this->path);
    }
   
}
