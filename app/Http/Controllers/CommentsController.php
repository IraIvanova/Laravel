<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommentsController extends Controller
{
    public function store(Request $request){
        $comment = new Comments();

//        $this->validate($request,[
//           'text' => 'Min:1'
//        ]);

        $comment->text = $request->text;
        $comment->save();

        return redirect()->route('allComments');
    }

    public function create(){
        return view('comments.create');
    }

    public function edit($id){
        $comment = Comments::find($id);
        return view('comments.edit')->withComment($comment);
    }

    public function update(Request $request, $id){
        $comment = Comments::find($id);
//        $this->validate($request,[
//            'text' => 'Min:1'
//        ]);

        $comment->text = $request->text;
        $comment->save();

        return redirect()->route('comments.index');
    }

    public function delete($id){
        $comment = Comments::find($id);
        $comment->delete();

        return redirect()->route('comments.index');
    }

    public function index(){
        $comments = Comments::all();
        return view('comments.index')->withComments($comments);
    }

}
