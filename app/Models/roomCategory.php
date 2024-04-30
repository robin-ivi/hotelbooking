<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomCategory extends Model
{
    use HasFactory;
    protected $table = 'room_categories';
     protected $fillable = [
          'category_name',
          'status',
      ];
}
