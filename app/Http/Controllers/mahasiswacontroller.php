<?php

namespace App\Http\Controllers;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\error;

class mahasiswacontroller extends Controller
{
    public function getAllData (){
        $data = MahasiswaModel::all();
        return view('mahasiswa')->with('data', $data);
    }

    public function createData (Request $request){
        $validation = Validator::make($request->all(),[
        'name' => 'required',
        'nim' => 'required',
        'address' => 'required',
     ]);

    if ($validation->fails()){
        $errors = $validation->errors()->first();
        alert::warning('check your validation', $errors);
        return redirect()->back();
    }

    $data = new MahasiswaModel();
    $data->name = $request ->name;
    $data->name = $request ->nim;
    $data->name = $request ->address;
    $data->save();
    Alert ::success ('Success tambah data');
    return redirect()->back();

    }
}
