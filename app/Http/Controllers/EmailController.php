<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use App\Mail\ContactMail;
use App\Models\User;

class EmailController extends Controller
{
    public function verifyEmail($user_id){
        $user = User::find($user_id);
        if($user){
            \Mail::to($user->email)->send(new MyTestMail($user));
        }else{
            return back()->with('Order Not Found');
        }
    }
    public function contactUs($subject, $name, $email, $comment){
        $object['subject'] = $subject;
        $object['name'] = $name;
        $object['email'] = $email;
        $object['comment'] = $comment;


        \Mail::to($email)->send(new ContactMail($object));
    }
}
