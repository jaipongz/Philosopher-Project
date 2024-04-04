<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'image_id';
    protected $fillable = [
	'image_id',
    'user_id',
    'image',
    'image_alt',
    'perform',
    
    ];
}
