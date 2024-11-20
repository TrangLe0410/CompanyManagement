<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    protected $table = 'configuration';
    protected $fillable = ['id', 'del_flag', 'value', 'description', 'type', 'created_at', 'updated_at'];

    protected $hidden = [
        'pivot'
    ];

    public function member_access_levels(){
        return $this->hasMany(Member::class, 'access_level', 'id');
    }

    public function team_member_roles(){
        return $this->hasMany(TeamMember::class, 'team_member_role', 'id');
    }

    public function candidate_universities(){
        return $this->hasMany(Candidate::class, 'university_id', 'id');
    }

    public function candidate_skills(){
        return $this->hasMany(CandidateSkill::class, 'skill_id', 'id');
    }

    public function candidate_use_skills(){
        return $this->belongsToMany(Candidate::class, CandidateSkill::class, 'skill_id', 'candidate_id');
    }

    public function candidate_contacts(){
        return $this->hasMany(CandidateContact::class, 'contact_id', 'id');
    }

    public function candidate_use_contacts(){
        return $this->belongsToMany(Candidate::class, CandidateContact::class, 'contact_id', 'candidate_id');
    }


    public function interview_positions(){
        return $this->hasMany(Interview::class, 'position_id', 'id');
    }
}