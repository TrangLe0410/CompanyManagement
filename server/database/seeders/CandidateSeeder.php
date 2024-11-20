<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidate')->insert([
            array('del_flag'=>false, 'name'=>'Lê Hồng Phong', 'is_male'=>true, 'birthday'=>'1997-06-21', 'cv'=>'cv1.pdf', 'is_passed'=>false, 'university_id'=>2, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'name'=>'Trần Hưng Đạo', 'is_male'=>true, 'birthday'=>'1997-03-16', 'cv'=>'cv2.pdf', 'is_passed'=>false, 'university_id'=>5, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'name'=>'Lý Thường Kiệt', 'is_male'=>true, 'birthday'=>'1997-01-21', 'cv'=>'cv3.pdf', 'is_passed'=>false, 'university_id'=>4, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'name'=>'An Dương Vương', 'is_male'=>true, 'birthday'=>'1997-08-11', 'cv'=>'cv4.pdf', 'is_passed'=>false, 'university_id'=>3, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'name'=>'Võ Văn Ngân', 'is_male'=>false, 'birthday'=>'1997-08-11', 'cv'=>'cv5.pdf', 'is_passed'=>false, 'university_id'=>6, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}