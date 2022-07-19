<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];
    public function Ticket()
    {
        return $this->hasMany(Ticket::class,'ticket_status_id');
    }
}
