<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrenos extends Model
{
    protected $table = 'terrenos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'pi',
        'manzana', 
        'numlote',
    ];

    public $timestamps = true;
}
