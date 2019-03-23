<?php

namespace App\Http\Controllers\api;

use App\feedback;
use App\Mail\contactMail;
use App\PDO\common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class commonController extends Controller
{
    use common;

    public function send_msg(Request $r)
    {
        $rules = [
            'message_name' => 'required|min:3|max:50',
            'message_email' => 'required|min:3|max:50',
            'message' => 'required|min:10|max:1500',
        ];
        $msgs = [];

        if ($error = self::validates($r->toArray(), $rules, $msgs)) {
            return $error;
        }

//        try {
//            Mail::to($r->message_email)->send(new contactMail($r));
//            if (count(Mail::failures()) == 0) {
//                feedback::create([
//                    'feed_name' => $r->message_name,
//                    'feed_email' => $r->message_email,
//                    'feed_msg' => $r->message,
//                ]);
//            }
//        } catch (\Exception $e) {
//            return response()->json(['msg' => "message can't send, you can try again...."], 403);
//        }

        return response()->json(['msg' => 'message delivered...'], 201);
    }
}
