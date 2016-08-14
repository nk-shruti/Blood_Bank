<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TelegramController extends Controller
{
    //
    protected $telegram;

    public function __construct( Telegram $telegram )
    {
        $this->telegram = $telegram;
    }

    public function getUpdates()
    {
        $updates = $this->telegram->getUpdates();
        dd($updates);
    }
    public function getSendMessage()
    {
        return view('send-message');
    }

    public function postSendMessage()
    {
        $rules = [
            'message' => 'required'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails())
        {
            return redirect()->back()
                ->with('status', 'danger')
                ->with('message', 'Message is required');
        }

        $this->telegram->sendMessage('-253307', Input::get('message'));

        return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'Message sent');
    }

}
