<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perform extends Model
{
    use HasFactory;
    protected $table = 'tbl_perform';
    protected $primaryKey = 'perform_id';
    protected $fillable = [
    'perform_id',
	'image_id',
    'perform_image',
    'perform_alt',
    
    ];
}
