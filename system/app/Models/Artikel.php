<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Artikel extends Model
{
    protected $table = 'artikel';

    function jenis()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
