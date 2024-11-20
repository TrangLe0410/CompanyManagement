<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $fillable = ['id', 'del_flag', 'name', 'leader', 'description',
    'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = [
        'pivot'
    ];

    public function members(){
        return $this->belongsToMany(Member::class, TeamMember::class, 'team_id', 'member_id');
    }

    public function team_members(){
        return $this->hasMany(TeamMember::class, 'team_id', 'id');
    }

    public function member_leader(){
        return $this->belongsTo(Member::class, 'leader', 'id');
    }
}