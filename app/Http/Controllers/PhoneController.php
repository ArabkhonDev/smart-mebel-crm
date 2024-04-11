<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
  
    public function index(){}
    public function create(){}

    public function store(Request $request)
    {
        $phone = Phone::create([
            'user_id'=> $request->user_id,
            'title'=> $request->title,
            'number'=> $request->number,
        ]);
        if($phone){
            return redirect()->back();
        }
        return redirect()->route('users.index');
    }

    public function show(Phone $phone){}
    public function edit(Phone $phone){}
    public function update(Request $request, Phone $phone){}
    public function destroy(Phone $phone){}
}
