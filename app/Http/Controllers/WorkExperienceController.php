<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Validator;

class WorkExperienceController extends Controller
{
    public function workExperience()
    {
        return view('work-experience');
    }



    public function saveWorkExperience(Request $request)
    { {
            $rules = [
                'data.*.designation' => 'nullable|string',
                'data.*.company_name' => 'nullable|string',
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
                $work_experience = new WorkExperience();
                $work_experience->user_id = $userId;
                $work_experience->designation = $value['designation'];
                $work_experience->company_name = $value['company_name'];
                $work_experience->description = $value['description'];
                $work_experience->started_date = $value['started_date'];
                $work_experience->end_date = $value['end_date'];
                $work_experience->save();
            }


            return redirect()->route('educational-qualification');
        } else {

            return redirect()->route('login');
        }
    }
}
