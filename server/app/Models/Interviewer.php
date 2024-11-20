<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    use HasFactory;
    protected $table = 'interviewer';
    protected $fillable = ['id', 'del_flag', 'interview_id', 'member_id', 'evaluation',
    'created_by', 'modified_by','created_at', 'updated_at'];

    public function member(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

    public function interview(){
        return $this->belongsTo(Interview::class, 'interview_id', 'id');
    }

    public function interviewer_comments(){
        return $this->hasMany(InterviewerComment::class, 'interviewer_id', 'id');
    }
}