<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class InterviewerCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('interviewer_comment')->insert([
            array('del_flag'=>false, 'interviewer_id'=>1, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>1, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>1, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>2, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>2, 'comment'=>'Tư duy về giải quyết vấn đề tốt', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>2, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>3, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>3, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>4, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>4, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>4, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>5, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>5, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>6, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>6, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>6, 'comment'=>'Có kỹ năng OT cao', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>7, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>7, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>7, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>8, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>8, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>9, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>9, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>7, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>7, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>7, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>8, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>8, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>8, 'comment'=>'Đi phỏng vấn đồng phục không chỉnh tề', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>9, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>9, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>10, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>10, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>10, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>11, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>11, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>12, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>12, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>10, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>10, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>10, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>11, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>11, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>12, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>12, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>13, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>13, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>13, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>14, 'comment'=>'Đi phỏng vấn trễ', 'rating'=>2, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>14, 'comment'=>'Phần trình bày thuyết phục', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>15, 'comment'=>'Không nắm chắc về MySQL', 'rating'=>1, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>15, 'comment'=>'Tốt nghiệp vào cuối năm', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>16, 'comment'=>'Kiến thức nền tảng tốt', 'rating'=>4, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>16, 'comment'=>'IQ cũng tạm chấp nhận', 'rating'=>3, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'interviewer_id'=>16, 'comment'=>'Có kiến thức về AWS', 'rating'=>5, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}