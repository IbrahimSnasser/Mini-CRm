<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employees;

class companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
    ];
    public function employees()
    {
        return $this->hasMany(employees::class);
    }
}