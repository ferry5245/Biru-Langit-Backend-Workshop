<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    use HasFactory;
    protected $table = 'mhs';
    public $timestamps = false;
    protected $fillable = ['nama','kelas'];
}
