<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'group_id',
        'surname',
        'name',
        'created_at',
        'upadeted_at',
    ];
    public function getGroup(){
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
    use HasFactory;
}
