<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    use HasFactory;
    protected $table = "User_admins";
    protected $primaryKey = "kdadmin";
    protected $guarded = [];
    protected $keyType = "string";
}
