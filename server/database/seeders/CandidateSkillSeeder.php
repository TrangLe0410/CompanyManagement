<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CandidateSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidate_skill')->insert([
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>29, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>30, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>31, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>32, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>45, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>50, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'skill_id'=>51, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'skill_id'=>25, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'skill_id'=>26, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'skill_id'=>27, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'skill_id'=>28, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'skill_id'=>47, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'skill_id'=>49, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'skill_id'=>34, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'skill_id'=>35, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'skill_id'=>36, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'skill_id'=>37, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'skill_id'=>44, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'skill_id'=>45, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'skill_id'=>38, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'skill_id'=>39, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'skill_id'=>40, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'skill_id'=>41, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'skill_id'=>43, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'skill_id'=>48, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'skill_id'=>25, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'skill_id'=>30, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'skill_id'=>35, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'skill_id'=>40, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'skill_id'=>45, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'skill_id'=>50, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}