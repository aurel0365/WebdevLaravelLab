<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    use HasFactory;

    // Definisikan nama tabel dengan benar
    protected $table = 'cds'; // Tabel yang benar adalah 'cds'
}
