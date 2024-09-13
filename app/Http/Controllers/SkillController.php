<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interest;
use App\Models\Language;
use App\Models\PersonalSkill;
use App\Models\TechSkill;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function skill()
    {
        return view('skill');
    }



    public function saveSkills(Request $request)
    { {
            $rules = [
                'data.*.language' => 'nullable|string',
                'data.*.personal_skill' => 'nullable|string',
                'data.*.tech_skill' => 'nullable|string',
                'data.*.interest' => 'nullable|string'
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
                if (isset($value['personal_skill'])) {
                    $personal_skill = new PersonalSkill();
                    $personal_skill->user_id = $userId;
                    $personal_skill->personal_skill = $value['personal_skill'];
                    $personal_skill->save();
                }
            }


            foreach ($request->data as $key => $value) {
                if (isset($value['interest'])) {
                    $interest = new Interest();
                    $interest->user_id = $userId;
                    $interest->interest = $value['interest'];
                    $interest->save();
                }
            }

            foreach ($request->data as $key => $value) {
                if (isset($value['tech_skill'])) {
                    $tech_skill = new TechSkill();
                    $tech_skill->user_id = $userId;
                    $tech_skill->tech_skill = $value['tech_skill'];
                    $tech_skill->save();
                }
            }




            foreach ($request->data as $key => $value) {
                if (isset($value['language'])) {
                    $language = new Language();
                    $language->user_id = $userId;
                    $language->language = $value['language'];
                    $language->save();
                }
            }


            return redirect()->route('pdf-selection');
        } else {

            return redirect()->route('login');
        }
    }
}
