<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';
    protected $fillable = ['id', 'name', 'status', 'create_at', 'update_at'];

    public function checkDelete($id){
        $config = Config::where('position', $id)->get();

        if(count($config)!=0) return true;
        return false;
    }
}
