<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'sname',
        'contactnum',
        'address',
        'prod_id'
    ]; 

    public function products(){
        return $this->belongsTo(Product::class, 'id');
    }
}

