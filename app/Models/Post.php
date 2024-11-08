<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Stmt\PropertyProperty;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'published_at',
        'category_id',
        'user_id',
    ];
    use HasFactory;

    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function category()
    {
            return $this->belongsTo(Category::class);
    }


    public function tags()

    {
        return $this->belongsToMany(Tag::class);
    }

    ///check if post has tag
    public function hasTag($tagId)
    {
       return in_array($tagId,$this->tags->pluck('id')->toArray());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
