<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = [
        'title',
        'start_from',
        'is_active',
        'created_at',
        'upadeted_at',
    ];
    public function students(){
        return $this->hasMany(Student::class, 'group_id', 'id');
    }
    use HasFactory;
}
