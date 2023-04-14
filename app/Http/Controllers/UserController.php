<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\CurriculumVitae;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function curriculumVitae(Request $request)
    {
        $data = CurriculumVitae::where('user_id', Auth::user()->id)->get()->count();
        if($data == 0){
            $insert = CurriculumVitae::create([
                'user_id' => Auth::user()->id,
                'marital_status' => $request->marital_status,
                'marriage_prep' => $request->marriage_prep,
                'marriage_target' => $request->marriage_target,
                'vission' => $request->vission,
                'mission' => $request->mission,
                'essay' => $request->essay,
                'religion_status' => $request->religion_status,
                'mahdzab' => $request->mahdzab
            ]);
            return ApiFormatter::createApi(200, "Success", $insert);
        }else{
            $update = CurriculumVitae::where('user_id', Auth::user()->id)->update($request->all());
            return ApiFormatter::createApi(200, "Success", $request->all());
        }
    }

    public function getUserByGender($id)
    {
        $gender = User::where('id', $id)->first();
        if($gender->gender == 'Laki-laki'){
            $dataUser = User::where('gender', 'Perempuan')->get();
        }else{
            $dataUser = User::where('gender', 'Laki-laki')->get();
        }

        if($dataUser){
            return ApiFormatter::createApi(200, "Success", $dataUser);
        }else{
            return ApiFormatter::createApi(400, "Failed");
        }
    }

    public function getNewUser($id)
    {
        $gender = User::where('id', $id)->first();
        if($gender->gender == 'Laki-laki'){
            $dataUser = User::where('gender', 'Perempuan')->orderBy('id', 'desc')->get();
        }else{
            $dataUser = User::where('gender', 'Laki-laki')->orderBy('id', 'desc')->get();
        }

        if($dataUser){
            return ApiFormatter::createApi(200, "Success", $dataUser);
        }else{
            return ApiFormatter::createApi(400, "Failed");
        }
    }
}
