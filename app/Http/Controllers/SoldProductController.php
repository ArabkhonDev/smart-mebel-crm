<?php

namespace App\Http\Controllers;

use App\Models\SoldProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SoldProductController extends Controller
{
    
    public function index()
    {
        $soldProducts = SoldProduct::latest()->paginate(6);
        return view('soldProduct.index')->with(['soldProducts'=> $soldProducts]);
    }


    public function create()
    {
        return view('soldProduct.create');
    }

   
    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('soldProduct-photos', $name, 'public');
        }

        $request->validate([
            'name'=> 'required| max:255',
            'client_name'=> 'required| max:255',
            'client_phone_number'=> 'required',
            'client_address'=> 'required',
            'orginal_price'=> 'required',
            'sale_price'=> 'required',
            'photo'=> 'mimes:jpg, jpeg, bmp, png',
            // 'video'=> 'required|mimetypes:video/avi, video/mpeg  , video/quicktime, video/mp4',
        ]);

        $soldProduct = SoldProduct::create([
            'user_id' => auth()->user()->id,
            'name'=>$request->name,
            'client_name'=>$request->client_name,
            'client_phone_number'=>$request->client_phone_number,
            'client_address'=>$request->client_address,
            'orginal_price'=> $request->orginal_price,
            'sale_price'=> $request->sale_price,
            'photo'=> $path ?? null,
        ]);

        // dd($soldProduct);
        return redirect()->back();
    }

  
    public function show(SoldProduct $soldProduct)
    {
        return view('soldProduct.show')->with([
            'soldProduct'=>$soldProduct,
            'recent_soldProducts'=>SoldProduct::latest()->get()->except($soldProduct->id)->take(4),
        ]);
    }


    public function edit(SoldProduct $soldProduct)
    {
        return view('soldProduct.edit')->with(['soldProduct'=>$soldProduct]);
    }

    public function update(Request $request, SoldProduct $soldProduct)
    {
        if($request->hasFile('photo')){
            if(isset($soldProduct->photo)){
                Storage::delete($soldProduct->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('soldProduct-photos', $name);
        }

        $soldProduct->update([
            'title'=>$request->title,
            'name'=>$request->short_content,
            'client_name'=>$request->client_name,
            'client_phone_number'=>$request->client_phone_number,
            'client_address'=>$request->client_address,
            'orginal_price'=> $request->orginal_price,
            'sale_price'=> $request->sale_price,
            'photo'=> $path ?? $request->photo,
        ]);
        return redirect()->route('soldProduct.show', ['soldProduct' =>$soldProduct->id]);
    }

    public function destroy(SoldProduct $soldProduct)
    {
        if(isset($soldProduct->photo)){
            Storage::delete($soldProduct->photo);
        }
        $soldProduct->delete();

        return redirect()->route('soldProduct.index');
    }
}
