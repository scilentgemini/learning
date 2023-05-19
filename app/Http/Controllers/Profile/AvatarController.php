<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update(Request $request)
    {
            dd($request->input('avatar'));
        //stored avatar
        return redirect(route('profile.edit'));
    }
}
