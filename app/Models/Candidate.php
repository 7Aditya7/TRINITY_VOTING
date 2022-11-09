<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'age', 'gender', 'province', 'district', 'photo', 'partyName', 'partyLogo', 'post', 'remarks'
    ];
}
