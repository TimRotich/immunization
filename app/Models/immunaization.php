<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class immunaization extends Model
{
    use Notifiable;

    protected $table= 'immunization';
    protected $fillable = [
        'name', 'age', 'sex', 'disease','medicine',
    ];
}
