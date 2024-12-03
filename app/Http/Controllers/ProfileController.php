<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        if (!$profile) {
            return response()->json(['message' => 'Profile not found'], 404);
        }

        $profile->update($request->only(['nama', 'bio', 'foto_profil']));

        return response()->json(['profile' => $profile]);
    }

    public function show($id)
    {
        $profile = Profile::find($id);
        if (!$profile) {
            return response()->json(['message' => 'Profile not found'], 404);
        }
        return response()->json(['profile' => $profile]);
    }
}
