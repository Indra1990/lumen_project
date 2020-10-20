<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubClass extends Model
{
    protected $table = 'subclass';
    protected $primaryKey = 'idsubclass';

    protected $hidden = [
        'deleted_at','created_by','updated_by','deleted_by'
    ];

    public function materies()
    {
        return $this->hasMany('App\Models\Materies','idsubclass');
    }
}