<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [ "name" ];

    public function SongsPlaylist(){
        return $this->hasMany(Songs::class);
    }
    public function Songs(){
        return $this->belongsToMany(Songs::class);
    } 
    public function Users(){
        return $this->belongsTo(User::class,);
    }
}
