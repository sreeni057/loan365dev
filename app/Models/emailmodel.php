<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Jobs\mailqueue;
use DB;
use config;
class emailmodel extends Model
{
	
	public 		$timestamps  = false;
    protected 	$connection  = 'dmsmysql';
    /* The function get_email_templates get email template 
   	   From master_email_templates.
	*/
    public static function emailContentConstruct($mail_subject,$mail_message,$mail_params,$data)
    {
       	
		$mail_params_explode = explode(",",$mail_params);
			
		if(!empty($data))
		{
			if(!empty($mail_params_explode))
			{
				foreach ($mail_params_explode as $key => $value) 
				{
					$mail_message = str_replace($mail_params_explode[$key],$data[$key], $mail_message); 
					
				}
			}
			else
			{
				foreach ($data as $key => $value) 
				{
					$mail_message = str_replace("##".$key."##",$data[$key], $mail_message); 		
					
				}
			}
			
		}
	
	    $data['mail_subject']  =  $mail_subject;
		$data['mail_message']  =  $mail_message;
		return $data;
	}
	 /* The function email_sending send email 
	 * to the registered dealer email.
     */
	public static function email_sending($email,$data,$replyto='support@dealerplus.in')
	{
		$data['email'] = $email;
		$data['replyto'] = $replyto;
		$job = new \App\Jobs\mailqueue($data);
		dispatch($job);
	}
}