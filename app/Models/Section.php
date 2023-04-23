<?php

namespace App\Models;

use App\Traits\ApiTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use ApiTrait, HasFactory;

    protected $fillable = [
        'section',
        'shift',
        'grade_id',
    ];

    protected $allowIncluded = ['grade'];
    protected $allowFilter = ['section', 'shift', 'grade_id'];
    protected $allowSort = ['section', 'shift', 'grade_id'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
