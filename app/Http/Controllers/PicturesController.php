<?php

namespace App\Http\Controllers;

use App\Pictures;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PicturesController extends Controller
{
    public function store(Request $request){
        $picture = new Pictures();

        $picture->title = $request->title;
        $picture->description = $request->description;
        $picture->price = $request ->price;

        $mimeTypeList = ['image/gif', 'image/jpeg', 'image/pjpeg', "image/png"];
        //вынести в сервис загрузку картинку. Проверить mime type
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $picture->id . rand(1111111, 9999999). "." . $file->getClientOriginalExtension();
            $mime= $file->getMimeType();
            foreach ($mimeTypeList as $mimeType) {
                if ($mime == $mimeType) {
                    $file->move(public_path() . '/image', $name);
                    $picture->image = $name;
                }

            }
        }

        $picture->save();

        return redirect()->route('allPictures');
    }

    public function create(){
        return view('pictures.create');
    }

    public function edit($id){
        $picture = Pictures::find($id);
        return view('pictures.edit')->withPicture($picture);
    }

    public function update(Request $request, $id){
        $picture = Pictures::find($id);

        $picture->title = $request->title;
        $picture->description = $request->description;
        $picture->price = $request ->price;

        $mimeTypeList = ['image/gif', 'image/jpeg', 'image/pjpeg', "image/png"];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $picture->id . rand(1111111, 9999999). "." . $file->getClientOriginalExtension();
            $mime= $file->getMimeType();
            foreach ($mimeTypeList as $mimeType) {
                if ($mime == $mimeType) {
                    $file->move(public_path() . '/image', $name);
                    $picture->image = $name;
                }

            }
        }

        $picture->save();

        return redirect()->route('pictures.index');
    }

    public function delete($id){
        $picture = Pictures::find($id);
        $picture->delete();

        return redirect()->route('pictures.index');
    }

    public function showSingle($id) {
        $picture = Pictures::find($id);

        return view('pictures.show',['picture'=>$picture]);
    }

    public function index(){
        $pictures = Pictures::all();

        return view('pictures.index',['pictures'=>$pictures]);
    }
}
