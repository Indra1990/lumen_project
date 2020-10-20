<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Materies extends Model
{
    protected $table = 'materies';
    protected $primaryKey = 'idmateries';

    protected $hidden = [
        'deleted_at','created_by','updated_by','deleted_by'
    ];
}