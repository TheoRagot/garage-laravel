<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'annoucements';
    protected $fillable = ['content',];

    public function annoucements()
    {
        return $this->belongsto(Annoucement::class);
    }
    public function customers()
    {
        return $this->belongsTo(User::class);
    }
}
