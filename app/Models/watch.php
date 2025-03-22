<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class watch extends Model
{

    use HasFactory;
    
    protected $table = 'watches';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'stock', 'image'];
}
