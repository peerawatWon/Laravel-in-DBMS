<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public $table="community";
    public $timestamps = false;
    protected $primaryKey = 'communityId';
}
