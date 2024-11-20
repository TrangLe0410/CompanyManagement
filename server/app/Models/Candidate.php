<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidate';
    protected $fillable = ['id', 'del_flag', 'name', 'is_male', 'birthday', 'cv', 'is_passed',
    'university_id', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = [
        'pivot'
    ];
    
    public function skills(){
        return $this->belongsToMany(Configuration::class, CandidateSkill::class, 'candidate_id', 'skill_id');
    }

    public function contacts(){
        return $this->belongsToMany(Configuration::class, CandidateContact::class, 'candidate_id', 'contact_id');
    }

    public function candidate_skills(){
        return $this->hasMany(CandidateSkill::class, 'candidate_id', 'id');
    }

    public function candidate_contacts(){
        return $this->hasMany(CandidateContact::class, 'candidate_id', 'id');
    }

    public function candidate_university(){
        return $this->belongsTo(Configuration::class, 'university_id', 'id');
    }
    
    public function interviews(){
        return $this->hasMany(Interview::class, 'candidate_id', 'id');
    }

    public function interviewers(){
        return $this->hasManyThrough(Interviewer::class, Interview::class, 'candidate_id', 'interview_id', 'id', 'id');
    }
    
}