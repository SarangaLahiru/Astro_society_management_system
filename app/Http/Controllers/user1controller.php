<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\user1;
use App\Models\User;
use App\Mail\Mailnotify;
use Illuminate\Support\Facades\Mail;
use PDF;
use Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
class user1controller extends Controller
{

    public function reg(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'pass'=>'required|min:6',

        ]);

        $user1=new user1();

        $user1->username=$request->name;
        $user1->email=$request->email;
        $user1->password=$request->pass;
        $dis=$user1->save();

        if($dis){
            return redirect('/login')->with('success','you do  have registered');
            
        }

        else{
            return back()->with('fail','you do not have register');

        }
    }

    public function log(Request $request){

        $request->validate([
            'email'=>'required',
            'pass'=>'required|min:6',


        ]);

        $data=user1::where('email','=',$request->email)->first();
        if($data){
            if($request->pass==$data->password){

                $otp=rand(100000,999999);
                
                Session::put('otp',$otp);
                Session::put('name',$data->username);
                Session::put('email',$data->email);
                Mail::to($data->email)->send(new Mailnotify());
                
                return redirect('/home')->with('success','welcome');

            }
            else{
                 return back()->with('fail','you are not a member');
                 
            }
        }
    }

    public function pdf(){
        $pdf=PDF::loadView('mail/mail');

        return $pdf->download('file.pdf');
    }
    
    public function googleReg(){
        return Socialite::driver('google')->redirect();
    }
    public function googleRegwith(){
        $users=new user1();

         $user=Socialite::driver('google')->stateless()->User();


         

          $users->username=$user->getName();
          $users->email=$user->getEmail();
          $users->password=Hash::make($user->getName().'@'.$user->getId());
          $users->save();

          Session::put('name',$user->getName());
          Session::put('email',$user->getEmail());

          return redirect('/home')->with('success','welcome');
           


        //return Socialite::driver('google')->redirect();

       /* try {
            $user=Socialite::driver('google')->stateless()->User();
            $is_user=User::where('email','=',$user->getEmail())->first();

            if(!$is_user){
                $save_user=User::updateOrcreate(
                    [
                        'google_id'=>$user->getId()
                    ],

                    
                    [
                       'name'=>$user->getName(),
                       'email'=>$user->getEmail(),
                       'password'=>Hash::make($user->getName().'@'.$user->getId()),
                    ],
                );
            }
            else{
                $save_user=User::where('email',$user->getEmail())->update([
                    'google_id'=>$user->getId(),
                ]);
                $save_user=User::where('email',$user->getEmail())->first();

            }
            Auth::loginUsingId($save_user->id);
            return redirect('register');
           
            
        } catch (\Throwable $th) {
            throw $th;
           
        }*/
    }
    public function member(Request $request){
        Session::put('m_name',$request->name);
        Session::put('m_email',$request->email);
        Session::put('m_phone',$request->phone);
        Session::put('m_age',$request->age);
        Session::put('m_address',$request->address);

        $pdf=PDF::loadView('PDF/member');

        
        return  $pdf->download('file.pdf');
       // return redirect('/member')->with('success','Thank you join with us as a member');
        

    }
}
