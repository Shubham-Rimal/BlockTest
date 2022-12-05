<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class MainController extends Controller
{
    //
    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->contact = $request->contact;

        $filenamewithExt = $request->file("image")->getClientOriginalName();
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameToStore = $filename . "_" . time() . "." . $extension;
        $image = Image::make($request->file("image"));
        $image->save("storage/image/" . $filenameToStore);
        $student->image = "storage/image/" . $filenameToStore;
        $student->save();
        return redirect('/list');
    }

    public function delete($id)
    {
        $student = student::where('id', $id)->first();
        if (File::exists('storage/image/' . $student->img)) {
            File::delete('storage/image/' . $student->img);
        }
        $student->delete() ;
        return redirect('list');
    }

    public function list()
    {
        $students = Student::get();
        return view("list")->with("students", $students);

    }


}


