<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team_member')->insert([
            array('del_flag'=>false, 'member_id'=>1, 'team_id'=>1, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>2, 'team_id'=>1, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>3, 'team_id'=>1, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>4, 'team_id'=>1, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>5, 'team_id'=>1, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>6, 'team_id'=>1, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>7, 'team_id'=>1, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>8, 'team_id'=>1, 'team_member_role'=>75, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>9, 'team_id'=>1, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>2, 'team_id'=>2, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>10, 'team_id'=>2, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>11, 'team_id'=>2, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>12, 'team_id'=>2, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>13, 'team_id'=>2, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>14, 'team_id'=>2, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>15, 'team_id'=>2, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>16, 'team_id'=>2, 'team_member_role'=>75, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>3, 'team_id'=>3, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>17, 'team_id'=>3, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>18, 'team_id'=>3, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>19, 'team_id'=>3, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>20, 'team_id'=>3, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>21, 'team_id'=>3, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>22, 'team_id'=>3, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>23, 'team_id'=>3, 'team_member_role'=>75, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>4, 'team_id'=>4, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>24, 'team_id'=>4, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>25, 'team_id'=>4, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>26, 'team_id'=>4, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>27,'team_id'=>4, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>28, 'team_id'=>4, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>29, 'team_id'=>4, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>30, 'team_id'=>4, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>5, 'team_id'=>5, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>2, 'team_id'=>5, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>3, 'team_id'=>5, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>4, 'team_id'=>5, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>1,'team_id'=>5, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>6, 'team_id'=>5, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>7, 'team_id'=>5, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>8, 'team_id'=>5, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>6, 'team_id'=>6, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>9, 'team_id'=>6, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>10, 'team_id'=>6, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>11, 'team_id'=>6, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>12,'team_id'=>6, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>13, 'team_id'=>6, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>14, 'team_id'=>6, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>15, 'team_id'=>6, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>7, 'team_id'=>7, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>16, 'team_id'=>7, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>17, 'team_id'=>7, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>18, 'team_id'=>7, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>19,'team_id'=>7, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>20, 'team_id'=>7, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>21, 'team_id'=>7, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>22, 'team_id'=>7, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>8, 'team_id'=>8, 'team_member_role'=>69, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>23, 'team_id'=>8, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>24, 'team_id'=>8, 'team_member_role'=>66, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>25, 'team_id'=>8, 'team_member_role'=>67, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>26,'team_id'=>8, 'team_member_role'=>73, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>27, 'team_id'=>8, 'team_member_role'=>74, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>28, 'team_id'=>8, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>29, 'team_id'=>8, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'member_id'=>30, 'team_id'=>8, 'team_member_role'=>76, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}