<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['commentaire', 'user_id', 'annonce_id'];

    public function annonce() 
    {
        return $this -> belongsTo(Annonce::class);
    }

    public function user() 
    {
        return $this -> belongsTo(User::class);
    }
}
