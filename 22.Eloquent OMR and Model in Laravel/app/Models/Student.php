<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // 1)Mention table name as below if not match with model Name
    protected $table='students';

    // 2)Assign Perticular column as primary key
    // protected $primaryKey = 'stu_id';

    // 3)Make primary key as auto incremention
    // public $incrementing = false;

    // 4)Allow Primary Key as non-increment and non-numeric
    // protected $keyType = 'string';

    // 5)Disble the created_at and updated_at timestamps
    // public $timestamps = false;

    // 6)Change the created_at and updated_at timestamps default column names
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updation_date';

    // 7)To Assign the different database connection
    // protected $connection = 'mysql';
 
    // 8)Enable Fillabale to use all --Create() Methods
    protected $fillable=['name', 'email', 'city', 'marks'];
}
