<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['id','name','price'];
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
