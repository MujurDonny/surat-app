<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Session;

class ClearOnlineStatus
{
    public function handle(Logout $event)
    {
        Session::forget('user_online');
    }
}
