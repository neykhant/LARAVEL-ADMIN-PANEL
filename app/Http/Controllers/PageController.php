<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home(){
        // return view('home');
        $categorys = Category::all();
        return view('category', compact('categorys'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        $category = new Category();

        // $profile_img_name = $category->profile_img;
        // if ($request->hasFile('profile_img')) {
        //     Storage::disk('public')->delete('employee/' . $category->profile_img);

        //     $profile_img_file = $request->file('profile_img');
        //     $profile_img_name = uniqid() . '_' . time() . '.' . $profile_img_file->getClientOriginalExtension();
        //     Storage::disk('public')->put('employee/' . $profile_img_name, file_get_contents($profile_img_file));
        // }

        if($request->hasFile('profile_img')){
            
        }

        $category->Name = $request->name;
        $category->Publish = $request->checkbox ? 'Yes' : 'No';
        $category->save();

        return redirect()->route('home')->with('create', 'Your data has been created!');
    }

    public function edit($id){
        $categorys  = Category::find($id);
        return view('edit', compact('categorys'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->Name = $request->name;
        $category->Publish = $request->checkbox ? 'Yes' : 'No';
        $category->save();

        return redirect()->route('home')->with('create', 'Your data has been created!');
    }

    public function destroy($id){
        // $category = Category::whereId($id)->firstOrFail();
        Category::findOrFail($id)->delete();
        // $category->delete();
        
        return redirect()->route('home')->with('create', 'Your data has been created!');

        // $student=student::whereId($id)->firstOrFail();
        // $student->delete();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
