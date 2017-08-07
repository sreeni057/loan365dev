<?php
namespace Citw\Loan365\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\emailmodel;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Mail\Userforgotpassword;
use Mail;

class ForgotPasswordController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Password Reset Controller
  |--------------------------------------------------------------------------
  |
  | This controller is responsible for handling password reset emails and
  | includes a trait which assists in sending these notifications from
  | your application to your users. Feel free to explore this trait.
  |
  */

  //use SendsPasswordResetEmails;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  protected $request;

  public function __construct(Request $request)
  {
      $this->request        = $request;
      $this->siderbarActive = 'login';
  }
  public function index()
  {
     $fetchvalues['siderbarActive'] = $this->siderbarActive;
     return view('loan365::auth.forgot');

  }

  public function postForgot()
  {
    $inputs = $this->request->only('email');
    $messages = array(
            'email.required' => 'Please enter email address',
            
            );
    $rules = array(
            'email' => 'required|email|max:255|exists:users',
            );
     $validator = Validator::make($inputs, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    $user = Users::where(['email'=>$inputs['email'],'active'=>'1'])->first();
    $user->forgot_token = md5($user->email.rand().time());
    $user->save();
    /*$mail_status = emailmodel::email_sending($user->email,$user);*/
    try
    {
        Mail::to($user->email)->send(new Userforgotpassword($user));    
        dd("success");
    }
    catch (\Exception $e)
    {
    // mail fialed    
    }
    return redirect('forgot')->with('message', 'Please check your e-mail for reset link.');
  }
  public function getReset($token)
  {    
    $user = Users::where(['forgot_token'=>$token,'active'=>'1'])->first();
    if(!$user)
    {
      abort('404');
    }
    /*password set */
    if(Input::get('password_set'))
    {
        $inputs = $this->request->only('password','password_confirmation');        
        $messages = array(
                      'password.required'               => 'Please enter new password',
                      'password_confirmation.required'  => 'Please enter password confirmation',
                    );
          $rules = array(
          'password'      => 'required|min:6',
          'password_confirmation' => 'required|same:password',
              );
        $messages = [];
        $validator = Validator::make($inputs, $rules, $messages);
        if ($validator->fails()) {
            return redirect('reset/user/'.$token)->withErrors($validator);
        }
        $user = Users::where(['forgot_token'=>$token,'active'=>'1'])->first();
        if(!$user)
        {
          abort('404');
        }
        $user->password = \Hash::make($inputs['password']);
        $user->forgot_token=NULL;
        $user->save();
        return redirect('dashboard');
    }
    $fetchvalues['siderbarActive'] = $this->siderbarActive;
    return view('loan365::auth.reset',compact('token'));
  }
  public function postReset($token)
  {
    dd($token);
    $inputs = $this->request->only('password');
    $messages = array(
                  'password.required' => 'Please enter new password',
                );
      $rules = array(
      'password'      => 'required|min:6',
      'password_confirmation' => 'required|same:password',
          );
    $messages = [];
    $validator = Validator::make($inputs, $rules, $messages);
    if ($validator->fails()) {
        return redirect('reset/user/'.$token)->withErrors($validator);
    }
    $user = Users::where(['forgot_token'=>$token,'active'=>'1'])->first();
    if(!$user)
    {
      abort('404');
    }
    $user->password = \Hash::make($inputs['password']);
    $user->forgot_token=NULL;
    $user->save();
    $fetchvalues['siderbarActive'] = $this->siderbarActive;
    return view('authentication::user.resetSuccess');
  }
}
 

     



















    


      
