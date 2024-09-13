<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationalQualification;
use Illuminate\Support\Facades\Validator;

class EducationalQualificationController extends Controller
{
    public function educationalQualification()
    {
        return view('educational-qualification');
    }



    public function saveEducationalQualification(Request $request)
    { {
            $rules = [
                'data.*.qualification' => 'nullable|string',
                'data.*.institute_name' => 'nullable|string',
                'data.*.description' => 'nullable|string',
                'data.*.started_date' => 'nullable|string',
                'data.*.end_date' => 'nullable|string'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        if (auth()->check()) {

            $userId = auth()->id();

            if (!$userId) {

                return 'Error: User ID is null';
            }

            foreach ($request->data as $key => $value) {
                $educational_qualification = new EducationalQualification();
                $educational_qualification->user_id = $userId;
                $educational_qualification->qualification = $value['qualification'];
                $educational_qualification->institute_name = $value['institute_name'];
                $educational_qualification->description = $value['description'];
                $educational_qualification->started_date = $value['started_date'];
                $educational_qualification->end_date = $value['end_date'];
                $educational_qualification->save();
            }


            return redirect()->route('skill');
        } else {

            return redirect()->route('login');
        }
    }
}
