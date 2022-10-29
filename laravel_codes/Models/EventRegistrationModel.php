<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class EventRegistrationModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_registrations';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['student_name','college_name','city','student_roll_no','email_id','phone_no','competition','comments','registration_date','created_at','updated_at'];
}