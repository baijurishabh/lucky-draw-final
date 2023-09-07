<?php

namespace App\Http\Controllers\auth\user;

// use App\Events\ReferralMail;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Notifications\ReferralMail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('user.auth.register2');
    }

    public function registrationPost2(Request $request)
    {
        // Notification::send(User::first(), new ReferralMail());

        $rules = [
            'username1' => 'required',
            'mob1' => 'required|unique:users,mobile,',
            'email1' => 'required|email|unique:users,email',
            'email2' => 'sometimes|required|email|unique:users,email',
            'email3' => 'sometimes|required|email|unique:users,email',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator)->with('error', 'Validation Error');
        }
        $userData1 = User::pluck('referred_userone');
        $userData2 = User::pluck('referred_usertwo');
        // dd($userData);
        $userCheck = User::where('referred_userone',$request->email1)->orWhere('referred_usertwo',$request->email1)->first();
        $user = User::whereEmail($request->useremail)->first();
        if ($userCheck) {
            //   dd(Cookie::get('referral'));
            if ($user == null) {
                $user1 = new User();
                $password1 = "$request->username1#benefitshop";
                $user1->name = $request->username1;
                $user1->uuid = Str::uuid();
                $user1->email = $request->email1;
                $user1->mobile = $request->mob1;
                $user1->referred_userone = $request->email2;
                $user1->referred_usertwo = $request->email3;
                $user1->referred_by = $userCheck->affiliate_id;
                $user1->type = "new";
                $user1->state = $request->state;
                $user1->password = Hash::make($password1);
                $user1->save();
                Cookie::queue(Cookie::forget('referral'));
                // dd($user1->getReferralLink());
                //
                try {
                    $userone = [
                        'email' => $request->email2, 'name' => $request->username2, 'referred_user' => 'You are referred to Benifitshops by' . ' ' . $user1->name,
                        'link' => 'Referral link is:' . ' ' . $user1->getReferralLink()
                    ];
                    $usertwo = [
                        'email' => $request->email3, 'name' => $request->username3, 'referred_user' => 'You are referred to Benifitshops by' . ' ' . $user1->name,
                        'link' => 'Referral link is:' . ' ' . $user1->getReferralLink()
                    ];
                    Notification::route('mail', $userone['email'])
                        ->notify(new ReferralMail($userone));
                    Notification::route('mail', $usertwo['email'])
                        ->notify(new ReferralMail($usertwo));
                    $data = [
                        'greeting' => 'Hi ' . $user1->name . ',',
                        'subject' => 'Registration Success',
                        'body' => 'Registartion Procedure is Completed',
                        'thanks' => 'Thank you for connecting with Benefitshops',
                        'actionText' => 'Visit site',
                        'actionURL' => url('/'),
                        'id' => 57
                    ];
                    Notification::send($user1, new EmailNotification($data));
                } catch (\Throwable $th) {
                    //throw $th;
                }
                //event(new ReferralMail($user1,$user2 = $request->username2,$user3 = $request->username3));
            }
            return redirect(url('/'))->with('message', 'User Registered Successful');
        }
        //   dd(Cookie::get('referral'));

        if ($user == null) {
            $user1 = new User();
            $password1 = "$request->username1#benefitshop";
            $user1->name = $request->username1;
            $user1->uuid = Str::uuid();
            $user1->email = $request->email1;
            $user1->mobile = $request->mob1;
            $user1->referred_userone = $request->email2;
            $user1->referred_usertwo = $request->email3;
            $user1->type = "new";
            $user1->state = $request->state;
            $user1->password = Hash::make($password1);
            $user1->save();
            Cookie::queue(Cookie::forget('referral'));
            // dd($user1->getReferralLink());
            //
            try {
                $userone = [
                    'email' => $request->email2, 'name' => $request->username2, 'referred_user' => 'You are referred to Benifitshops by' . ' ' . $user1->name,
                    'link' => 'Referral link is:' . ' ' . $user1->getReferralLink()
                ];
                $usertwo = [
                    'email' => $request->email3, 'name' => $request->username3, 'referred_user' => 'You are referred to Benifitshops by' . ' ' . $user1->name,
                    'link' => 'Referral link is:' . ' ' . $user1->getReferralLink()
                ];
                Notification::route('mail', $userone['email'])
                    ->notify(new ReferralMail($userone));
                Notification::route('mail', $usertwo['email'])
                    ->notify(new ReferralMail($usertwo));
                $data = [
                    'greeting' => 'Hi ' . $user1->name . ',',
                    'subject' => 'Registration Success',
                    'body' => 'Registartion Procedure is Completed',
                    'thanks' => 'Thank you for connecting with Benefitshops',
                    'actionText' => 'Visit site',
                    'actionURL' => url('/'),
                    'id' => 57
                ];
                Notification::send($user1, new EmailNotification($data));
            } catch (\Throwable $th) {
                //throw $th;
            }
            //event(new ReferralMail($user1,$user2 = $request->username2,$user3 = $request->username3));
        }
        return redirect(url('/'))->with('message', 'User Registered Successful');
    }
}
