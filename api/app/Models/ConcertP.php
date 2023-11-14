<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcertP extends Model
{
    use HasFactory;
    protected $fillable =['place','date','artists'];
}
