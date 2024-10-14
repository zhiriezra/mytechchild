<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDO;

class ProfileController extends Controller
{
    public function index(){
        $authId = auth()->id();
        $user = User::where('id', $authId)->with('profile')->first();

        return view('auth.profile', compact('user'));
    }

    public function update(Request $request){

        $this->validate($request, [
            'name' => 'required|string',
            'mobile' => 'required|digits:11',
            'age' => 'required|numeric',
            'favorite_color' => 'required',
            'favorite_topic' => 'required',
            'nickname' => 'required|string'
        ]);

        $user = User::find(auth()->id());

        $user->name = $request->name;
        $user->mobile = $request->mobile;

        $user->save();


        $user->profile->favorite_color = $request->favorite_color;
        $user->profile->favorite_topic = $request->favorite_topic;
        $user->profile->nickname = $request->nickname;
        $user->profile->age = $request->age;
        $user->profile->profile_completed = true;

        $user->profile->save();


        return redirect()->route('student.dashboard')->with('success', 'Profile updated successfully.');
    }
}
