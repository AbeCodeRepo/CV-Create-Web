<?php

namespace App\Http\Controllers;

use App\Models\AboutYou;
use Illuminate\Http\Request;
use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Validator;

class PersonalDetailController extends Controller
{
    public function index()
    {
        return view('index');
    }



    public function savePersonalDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'designation' => 'required|string',
            'cv_img' => 'required|mimes:jpeg,png,pdf|max:2048',
            'address' => 'required|string',
            'marital_status' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'mobile_no' => 'required|string',
            'birthday' => 'required|string',
            'about_you' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        if (auth()->check()) {

            $userId = auth()->id();
            if (!$userId) {

                return 'Error: User ID is null';
            }

            $personal = new PersonalDetail([
                'user_id' => $userId,
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'address' => $request->input('address'),
                'marital_status' => $request->input('marital_status'),
                'gender' => $request->input('gender'),
                'email' => $request->input('email'),
                'mobile_no' => $request->input('mobile_no'),
                'birthday' => $request->input('birthday'),
            ]);


            if ($request->hasFile('cv_img')) {
                $file = $request->file('cv_img');
                $extension = $file->getClientOriginalExtension();
                $filename = $userId . '_' . time() . '.' . $extension;
                $file->move('uploads/cv_img/', $filename);
                $personal->cv_img = $filename;
            }

            $personal->save();

            $about_you = new AboutYou([
                'user_id' => $userId,
                'about_you' => $request->input('about_you'),
            ]);

            $about_you->save();

            return redirect()->route('work-experience');

        } else {
            return redirect()->route('login');
        }
    }
}

