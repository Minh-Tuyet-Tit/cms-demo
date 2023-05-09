<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    use HasFactory;
    protected $table = 'file_types';
    protected $fillable = ['id', 'file_extention', 'status', 'create_at', 'update_at'];

    public function statusFileType(){
        return $this->hasOne(Status::class,'id','status');
    }


    public function checkDelete($id){
        $resource= Resource::where('file_type', $id)->get();

        if(count($resource) != 0) return true;
        return false;
    }
}
