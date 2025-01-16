<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbRealtime2 extends Model
{
    use HasFactory;

    protected $table = 'db_realtime_r2';
    protected $guarded = [];
}
