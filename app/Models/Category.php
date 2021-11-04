<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_icon',
    ];

    /**
     * Instruction of Nestedset Document.
     */
    use NodeTrait;

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    // Function to filter Posts by Category
    public function filteredPosts() {
        return $this->belongsToMany(Post::class)
            ->wherePivot('category_id', $this->id)
            ->orderBy('updated_at', 'DESC');
    }

}
