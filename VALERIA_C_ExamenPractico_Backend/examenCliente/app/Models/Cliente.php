<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['name_complete', 'birthdate', 
    'address', 'city_CP', 'phone', 'e_address'];
    protected $hidden = ['created_at', 'client_grup', 'updated_at','fecha_alta'];
}
