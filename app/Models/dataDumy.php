<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataDumy extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama'];
    protected $table = 'datadumy';
    public $timestamps = true;
}
