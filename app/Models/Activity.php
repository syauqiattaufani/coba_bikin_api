<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = "activity";

     protected $fillable = ['nik', 'full_name', 'sub_divisi', 'date_visit', 'location', 'status', 'description', 'target', 'stk_numbers'];

}
