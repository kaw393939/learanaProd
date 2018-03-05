<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    var $pusher;
    var $user;
    var $chatChannel;

    const DEFAULT_CHAT_CHANNEL = 'chat';

    public function index()
    {
        echo 'hello';
    }
    /*
        public function __construct()
        {
            $this->pusher = App::make('pusher');
            $this->user = Session::get('user');
            $this->chatChannel = self::DEFAULT_CHAT_CHANNEL;
        }

        public function index()
        {
            if(!$this->user)
            {
                return redirect('auth/github?redirect=/');
            }

            return view('pages.chat', ['chatChannel' => $this->chatChannel]);
        }

        public function postMessage(Request $request)
        {
            $message = [
                'text' => e($request->input('chat_text')),
                'username' => $this->user->getNickname(),
                'avatar' => $this->user->getAvatar(),
                'timestamp' => (time()*1000)
            ];
            $this->pusher->trigger($this->chatChannel, 'new-message', $message);
        }
    */
}