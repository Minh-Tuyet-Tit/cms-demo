<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $fillable = ['id', 'status_name', 'stastus', 'create_at', 'update_at'];

    public function checkDelete($id)
    {
        $cateProducts = CategoryProduct::where('status', $id)->get();
        $catePost = CategoryPost::where('status', $id)->get();
        $product = Product::where('status', $id)->get();
        $post = Posts::where('status', $id)->get();
        $resource = Resource::where('status', $id)->get();
        $position = Position::where('status', $id)->get();
        if (count($cateProducts) != 0 || count($catePost) != 0 || count($product) != 0 || count($post) != 0 || count($resource) != 0 || count($position) != 0) return true;
        return false;
    }
}
