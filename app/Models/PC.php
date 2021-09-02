<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PC extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'contacts';
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ['name', 'email', 'title', 'message'];
    //Primary Key
    protected $primaryKey = 'id';
    protected $hidden;
}
