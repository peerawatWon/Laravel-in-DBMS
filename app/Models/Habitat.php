<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    public $table="habitat";
    public $timestamps = false;
    protected $primaryKey = 'habitatId';
}
