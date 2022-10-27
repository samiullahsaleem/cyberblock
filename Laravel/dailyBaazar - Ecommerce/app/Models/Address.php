<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $primaryKey = 'user_id';

    protected $fillable = ['name','user_id','email','phone','address','country','city','district','zip'];
}