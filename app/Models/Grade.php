<?php

namespace App\Models;

use App\Traits\ApiTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use ApiTrait, HasFactory;

    protected $allowIncluded = ['sections'];
    protected $allowFilter = ['symbol', 'description', 'educational_level'];
    protected $allowSort = ['symbol', 'description', 'educational_level'];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
