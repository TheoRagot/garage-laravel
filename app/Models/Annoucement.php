<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annoucement extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'annoucements';
    protected $fillable = [
        'title', 'price', 'content',
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
