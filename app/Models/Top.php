<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    use HasFactory;
    protected $table = 'top';
    protected $guarded = false;
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
