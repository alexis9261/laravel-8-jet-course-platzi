<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Crear un campo virtual, que sera un extracto
    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80 ) . "...";
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Metodo que retorna dos(2) cursos del mismo usuario(autor) que tienen la misma categoria
    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('user')
            ->take(2)
            ->get();
    }
}
