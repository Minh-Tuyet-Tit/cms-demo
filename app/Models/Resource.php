<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $table = 'resource';
    protected $fillable = ['id', 'url', 'post_id', 'file_type', 'status', 'create_at', 'update_at'];

    public function statusResource(){
        return $this->hasOne(Status::class, 'id', 'status');
    }


    public function postResource(){
        return $this->hasOne(Posts::class, 'id', 'post_id');
    }

    public function fileTypeResource(){
        return $this->hasOne(FileType::class, 'id', 'file_type');
    }
}
