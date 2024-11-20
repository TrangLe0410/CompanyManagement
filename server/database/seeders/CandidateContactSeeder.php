<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CandidateContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidate_contact')->insert([
            array('del_flag'=>false, 'candidate_id'=>1, 'contact_id'=>52, 'value'=>'https://www.facebook.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'contact_id'=>53, 'value'=>'https://www.twitter.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'contact_id'=>54, 'value'=>'minhhuy97.ptit@gmail.com', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>1, 'contact_id'=>63, 'value'=>'https://www.viber.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'contact_id'=>52, 'value'=>'https://www.facebook.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'contact_id'=>55, 'value'=>'0794755005', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'contact_id'=>56, 'value'=>'https://www.zalo.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>2, 'contact_id'=>64, 'value'=>'https://www.weibo.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'contact_id'=>52, 'value'=>'https://www.facebook.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'contact_id'=>57, 'value'=>'https://www.linkedin.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'contact_id'=>58, 'value'=>'https://www.skype.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>3, 'contact_id'=>65, 'value'=>'https://www.baidu.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'contact_id'=>52, 'value'=>'https://www.facebook.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'contact_id'=>59, 'value'=>'https://www.slack.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>4, 'contact_id'=>60, 'value'=>'https://www.pinterest.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'contact_id'=>52, 'value'=>'https://www.facebook.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'contact_id'=>61, 'value'=>'https://www.wechat.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'candidate_id'=>5, 'contact_id'=>62, 'value'=>'https://www.whatsapp.com/minhhuyptit', 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}