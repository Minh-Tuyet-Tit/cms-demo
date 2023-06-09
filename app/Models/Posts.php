<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['id', 'post_title', 'image', 'cat_id', 'price', 'summary', 'description', 'status', 'order', 'meta_keyword', 'meta_description', 'user_id', 'date_public', 'view_count', 'create_at', 'update_at'];



    public function statusPost(){
        return $this->hasOne(Status::class, 'id', 'status');
    }
    public function categoryPost(){
        return $this->hasOne(CategoryPost::class, 'id', 'cat_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryPost::class);
    }
}
