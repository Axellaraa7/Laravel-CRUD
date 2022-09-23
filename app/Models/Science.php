<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Science extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','url','slug'];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
