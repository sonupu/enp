<?php

namespace App\Http\Controllers;

use App\Jobs\SendUserEmailJob;
use App\Models\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $users = User::limit(25)->get();
        try {
            foreach ($users as $user) {
                dispatch(new SendUserEmailJob($user));
            }
        } catch (\Throwable $th) {
            throw $th;
        }

        return response()->json(['success' => 'Email sent successfully.']);
    }
}
