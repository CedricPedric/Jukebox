<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;

    public function Genres(){
        return $this->belongsTo(Genres::class, 'genres_id');
    }

    
    public function Playlists(){
        return $this->belongsToMany(Playlist::class);
    }
}
