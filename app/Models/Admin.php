<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "animals";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["animal_name", "animal_type", "animal_species", "animal_marking", "animal_gender", "animal_collar", "animal_age", "animal_status", "animal_vet", "owner", "pictures"];
    //Primary Key
    protected $primaryKey = "animal_id";
}
