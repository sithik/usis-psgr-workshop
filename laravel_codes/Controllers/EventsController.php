<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\EventRegistrationModel;

class EventsController extends Controller
{
    public function register()
    {

        return view('events.register' );
    }

    public function register_action(Request $request)
    {
        $new_record = new EventRegistrationModel;
 
        $new_record->student_name = $request->input('student_name');
        $new_record->college_name = "test";
        $new_record->city = "te";
        $new_record->student_roll_no = "te";
        $new_record->email_id = "te";
        $new_record->phone_no = "te";
        $new_record->competition = "te";
        $new_record->comments = "tete";
        $new_record->registration_date = "2022-10-29 06:42:19";
 
        $new_record->save();

        
        return redirect('events/register');
    }
}
