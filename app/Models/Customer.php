<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['id','name','gender','age','proffesion','address','contact','email'];
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
