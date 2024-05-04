<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
     protected $fillable = [
        'name', 
        'email',
        'phone_no',
        'travel_type',
        'country',
        'id_proof_type',
        'booked_via',
        'billing_instr',
        'payment_mode',
        'type_of_room',
        'add_gst',
        'add_foodgst',
        'food_amount',
        'room',
        'room_category',
        'occupancy',
        'addvanced_amount',
        'amount',
        'booked_by',
        'check_in',
        'check_out',
        'status',
      ];
}
