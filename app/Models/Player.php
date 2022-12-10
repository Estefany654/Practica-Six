<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function tracks(){
        //pertenece a muchos
        return $this->belongsToMany(Track::class);
    }
}
