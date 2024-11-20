<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewerComment extends Model
{
    use HasFactory;
    protected $table = 'interviewer_comment';
    protected $fillable = ['id', 'del_flag', 'interviewer_id', 'comment', 'rating',
    'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = [
        'laravel_through_key'
    ];

    public function interview(){
        return $this->belongsToMany(Interview::class, Interviewer::class, 'id', 'interview_id');
    }

    public function interviewer(){
        return $this->belongsTo(Interviewer::class, 'interviewer_id', 'id');
    }

    public function member_interviewer(){
        return $this->belongsToMany(Member::class, Interviewer::class, 'id', 'interview_id');
    }
}