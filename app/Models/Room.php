<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
     protected $fillable = [
        'room_category',
        'room_name',
        'room_floor',
        'room_bhk',
        'room_features',
        'room_status',
      ];
}
