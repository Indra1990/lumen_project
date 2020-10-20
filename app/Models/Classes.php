<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'class';
    protected $primaryKey = 'idclass';

    protected $hidden = [
        'deleted_at','created_by','updated_by','deleted_by'
    ];

    public function subclass()
    {
        return $this->hasMany('App\Models\SubClass','idclass','idclass');
    }
}