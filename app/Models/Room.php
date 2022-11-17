<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['id','name','image','type','rates'];
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
