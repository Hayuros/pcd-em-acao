<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->hasMany(User::class);
    }

    public function postagem()
    {
        return $this->hasMany(Postagen::class);
    }
}
