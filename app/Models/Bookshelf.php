<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    protected $table = 'bookshelfs';
    public $timestamps = false;

    protected $fillable = ['code','nama'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
