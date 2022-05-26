<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'postal_code'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
