<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $connection = 'mysql';

    protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'phone',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
