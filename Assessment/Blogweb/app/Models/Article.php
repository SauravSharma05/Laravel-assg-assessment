<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'description',
        'category',
    ];


    public function comments()
    {
        return $this->hasMany(Comments::class);
        //         return $this->hasManyThrough(Deployment::class, Environment::class);

    }
}
