<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Specialization;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('doctor.index',);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $user = auth()->user();
        return view('doctor.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        $user = auth()->user();
        $specializations = Specialization::all();
        return view('doctor.edit', compact('user', 'specializations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = auth()->user();

        $validateData = $request->validate([
            'name' => "required|min:3",
            'surname' => "required|min:3",
            'email' => "required|email",
            'address' => "required",
            'curriculum' => "nullable|mimes:pdf|max:2048",
            "image" => "nullable|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'phone' => "required|regex:/^[0-9]{10}$/",
            "services" => "nullable",
            "specializations" => "nullable|exists:specializations,id",
        ]);



        if (array_key_exists("image", $validateData)) {
            if ($user->image) {
                Storage::delete($user->image);
            }
            $imagePath = Storage::put("avatars", $validateData["image"]);
            $validateData["image"] = $imagePath;
        }
        

        if (array_key_exists("curriculum", $validateData)) {
            if ($user->curriculum) {
                Storage::delete($user->curriculum);
            }
            $cvPath = Storage::put("doctors_cv", $validateData["curriculum"]);
            $validateData["curriculum"] = $cvPath;
        }

        $user->specializations()->detach();

        $user->specializations()->attach($validateData["specializations"]);

        $user->update($validateData);

        return redirect()->route("doctor.show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
