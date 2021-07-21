<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "employees";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["name","age","address","salary","position_id"];
    //Primary Key
    protected $primaryKey = "employee_id";

    public function position()
    {
        return $this->belongsTo(Position::class,'position_id','position_id');
    }

    // public static function getAll()
    // {
    //     $sql = "SELECT * FROM employees
    //     INNER JOIN positions ON employees.position_id = positions.position_id";
    //     return DB::select($sql, []);
    //     return self::get();
    // }

    // public static function getItem($id)
    // {
    //     //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
    //     //return self::where('id',$id)->get($id);
    //     //return self::findOrFail($id);
    //     $sql = "SELECT * FROM employees
    //     INNER JOIN positions ON employees.position_id = positions.position_id
    //     WHERE employee_id = {$id}";
    //     return DB::select($sql, []);
    // }

    // public static function search($q)
    // {
    //     return self::where("name","like","%{$q}%")
    //      ->orWhere("age", "like", "%{$q}%")
    //      ->orWhere("address", "like", "%{$q}%")
    //      ->orWhere("salary", "like", "%{$q}%")
    //      ->get();
    // }
}
