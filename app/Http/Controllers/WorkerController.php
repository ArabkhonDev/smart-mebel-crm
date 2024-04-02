<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkerController extends Controller
{
    
    public function index()
    {
        $worker = User::where('role_id', 2)->latest()->paginate(15);
        return view('worker.index')->with(['worker'=> $worker]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all()->where('id'>1);
        return view('worker.create')->with(['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('Worker-photos', $name, 'public');
        }

        $request->validate([
            'name'=> 'required| max:255',
            'email'=> 'required',
            'password'=> 'required',
            'photo'=> 'mimes:jpg, jpeg, bmp, png',
            // 'video'=> 'required|mimetypes:video/avi, video/mpeg, video/quicktime, video/mp4',
        ]);

        $worker = User::create([
            'user_id' => 2,
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
            'photo'=> $path ?? null,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $worker)
    {
        return view('Worker.show')->with([
            'worker'=>$worker,
            'recent_worker'=>User::latest()->get()->except($worker->id)->take(4),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $worker)
    {
        return view('worker.edit')->with(['worker'=>$worker]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, SoldProduct $soldProduct)
    // {
    //     if($request->hasFile('photo')){
    //         if(isset($soldProduct->photo)){
    //             Storage::delete($soldProduct->photo);
    //         }

    //         $name = $request->file('photo')->getClientOriginalName();
    //         $path = $request->file('photo')->storeAs('soldProduct-photos', $name);
    //     }

    //     $soldProduct->update([
    //         'name'=> $request->name,
    //         'email'=> $request->email,
    //         'password'=> $request->password,
    //         'photo'=> $path ?? $request->photo,
    //     ]);
    //     return redirect()->route('worker.show', ['worker' =>$worker->id]);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $worker)
    {

        if(isset($worker->photo)){
            Storage::delete($worker->photo);
        }
        $worker->delete();

        return redirect()->route('worker.index');
    }
}
