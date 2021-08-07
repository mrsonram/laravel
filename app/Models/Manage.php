<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manage extends Model
{
    use HasFactory;
    public $timestamps = false;

    //ชื่อตารางในฐานข้อมูล
    protected $table = "animals";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["name", "type", "gender"];
    //Primary Key
    protected $primaryKey = "id";
}
