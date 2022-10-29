<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\EventRegistrationModel;

class TestController extends Controller
{
    public function show()
    {

    	//$result = DB::select("SELECT * from event_registrations where id = 1");


    	/*$new_record = EventRegistrationModel::create([
    		'student_name' => 'Kumar',
    		'college_name' => 'PSGR',
    		'city'=>'coimbatore',
    		'student_roll_no'=>'20bcs031',
    		'email_id'=>'kumar@psgrkcw.com',
    		'phone_no'=>'1234567890',
    		'competition'=>'quiz',
    		'comments' => 'Test',
    		'registration_date'=>'2022-10-29 06:42:19'
    		

    	]);
		echo $new_record->id;*/

		$new_record = new EventRegistrationModel;
 
        $new_record->student_name = "e";
        $new_record->college_name = "test";
        $new_record->city = "te";
        $new_record->student_roll_no = "te";
        $new_record->email_id = "te";
        $new_record->phone_no = "te";
        $new_record->competition = "te";
        $new_record->comments = "tete";
        $new_record->registration_date = "2022-10-29 06:42:19";
 
        $new_record->save();

        echo $new_record->id;

		exit;


    	$result = DB::table('event_registrations')
             ->select('student_name','college_name')
             ->where('id', 1)
             ->get();
    	
    	$data = ['user' => $result[0] ];
        return view('test.show', $data);
    }
}
