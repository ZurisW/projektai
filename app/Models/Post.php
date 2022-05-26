<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $connection = 'mysql';

    protected $fillable = [
        'user_id',
        'city_id',
        'category_id',
        'title',
        'content',
        'date',
        'price',
        'image',
        'star'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Post::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
