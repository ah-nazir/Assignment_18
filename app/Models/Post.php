<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the category that the post belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the total number of posts belonging to a specific category.
     *
     * @param  int  $categoryId
     * @return int
     */
    public static function countByCategory($categoryId)
    {
        return static::where('category_id', $categoryId)->count();
    }

    /**
     * Get all posts that have been soft deleted.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getDeletedPosts()
    {
        return static::onlyTrashed()->get();
    }
}
