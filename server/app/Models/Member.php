<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Member extends Authenticatable implements JWTSubject
{
 
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'member';
    protected $fillable = [
        'id', 'del_flag', 'username', 'password', 'fullname', 'is_male', 
        'birthday', 'email', 'phone', 'picture', 'access_level', 'role',
        'created_by', 'modified_by', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'password',
        'pivot'
    ];

    // Các quan hệ khác
    public function teams()
    {
        return $this->belongsToMany(Team::class, TeamMember::class, 'member_id', 'team_id');
    }

    public function team_members()
    {
        return $this->hasMany(TeamMember::class, 'member_id', 'id');
    }

    public function member_role()
    {
        return $this->belongsTo(Configuration::class, 'access_level', 'id');
    }

    public function leader_of_team()
    {
        return $this->hasMany(Team::class, 'leader', 'id');
    }

    public function interviews()
    {
        return $this->belongsToMany(Interview::class, Interviewer::class, 'member_id', 'interview_id');
    }

    public function interviewers()
    {
        return $this->hasMany(Interviewer::class, 'member_id', 'id');
    }

    public function interviewer_comment()
    {
        return $this->hasManyThrough(
            InterviewerComment::class,
            Interviewer::class,
            'member_id',
            'interviewer_id',
            'id',
            'id'
        );
    }

    // JWT methods
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}