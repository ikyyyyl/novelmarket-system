<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'desc',
        'price',
        'quantity'
    ]; 

    public function suppliers(){
        return $this->hasMany(Supplier::class, 'prod_id');
    }
}
