<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function profile() {

        $profile_id = Auth::id();
        if($profile_id) {
            $profile = User::find($profile_id);
            return view('users.profile', compact('profile')); 
        }
    }

    public function update_profile(Request $request) {

        $profile_id = Auth::id();

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'cv' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);

        // Find the profile by ID
        $profile = User::findOrFail($profile_id);

        // Update the profile's information
        if(empty($validatedData['name'])) {
            $profile->name ='No name';
        } else {
            $profile->name = $validatedData['name'];   
        }
        
        

        if(empty($validatedData['job_title'])) {
            $profile->job_totle ='No job title';
        } else {
            $profile->job_totle = $validatedData['job_totle'];
        }

        if(empty($validatedData['cv'])) {
            $profile->cv ='No cv';
        } else {
            $profile->cv = $validatedData['cv'];
        }

        if(empty($validatedData['bio'])) {
            $profile->bio ='No bio';
        } else {
            $profile->bio = $validatedData['bio'];
        }

        // Save the changes to the database
        $profile->save();

        // Redirect or return response
        return redirect()->back()->with('success', 'Profile updated successfully!');

    }

    public function edit_profile() {

        $profile_id = Auth::id();

        //Get authenticated user
        $user = User::find($profile_id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        //return auth user info to update profile form
        return view('users.update_profile', compact('user'));        

    }

}
