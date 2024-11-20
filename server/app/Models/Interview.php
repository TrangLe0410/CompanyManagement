<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $table = 'interview';
    protected $fillable = ['id', 'del_flag', 'status', 'evaluation', 'candidate_id', 'position_id',
    'date', 'note', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = [
        'pivot'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id');
    }

    public function position(){
        return $this->belongsTo(Configuration::class, 'position_id', 'id');
    }

    public function interviewers(){
        return $this->hasMany(interviewer::class, 'interview_id', 'id');
    }

    public function member_interviewers(){
        return $this->belongsToMany(Member::class, Interviewer::class, 'interview_id', 'member_id');
    }

    public function comment_interviewers(){
        return $this->hasManyThrough(InterviewerComment::class, Interviewer::class, 'interview_id', 'interviewer_id', 'id', 'id');
    }
}