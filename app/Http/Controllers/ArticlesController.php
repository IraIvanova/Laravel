<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Comments;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Articles::all();
        //        $count =   Articles::join('comments','comments.articles_id', '=', 'articles.id')->
//        select('comments.articles_id',DB::raw('count(*) as total'))->
//        groupBy('comments.articles_id')
//            ->orderBy('total', 'desc')->get();
//         DB::table('comments')->select('articles_id',DB::raw('count(*) as total'))->groupBy('articles_id')->orderBy('total', 'desc')->get();
//
//        $articles = Articles::select(array('articles.*', DB::raw('COUNT("comments.articles_id") as com')))->join('comments','comments.articles_id', '=', 'articles.id')
//            ->groupBy('articles.id')
//            ->orderBy('com', 'desc')
//->get();
        //dd($count);
        return view('articles.index')->withArticles($articles);
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = new Articles();

        if ($request->isMethod('post')) {

//            $rules =[
//                'title'=>'min:1'
//
//            ];
//            $this->validate($request, $rules);

            $article->title = $request->title;
            $article->text = $request->text;
            $article->desc = $request->desc;
            $article->tags = $request->tags;
            $article->image = $request->image;
            $article->comment_id = 1;

            $mimeTypeList = ['image/gif', 'image/jpeg', 'image/pjpeg', "image/png"];
            //вынести в сервис загрузку картинку. Проверить mime type
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $originalName = $file->getClientOriginalName();
                $name = $article->id . rand(1111111, 9999999). "." . $file->getClientOriginalExtension();
                $mime= $file->getMimeType();
                foreach ($mimeTypeList as $mimeType) {
                    if ($mime == $mimeType) {
                        $file->move(public_path() . '/image', $name);
                        $article->image = $name;
                    }

                }
            }

            $article->save();
        }
        return redirect()->route('allArticles');

    }
//    public function fileUpload(Request $request){
//
//        if($request->isMethod('post')){
//
//            if($request->hasFile('image')) {
//                $file = $request->file('image');
//                $file->move(public_path() . '/image','filename.img');
//            }
//        }
//    }


    public function show($id)
    {
        $article = Articles::find($id);

        return view('articles.show', ['article' => $article]);

    }

    public function edit($id)
    {
        $article = Articles::find($id);
        return view('articles.update')->withArticle($article);
    }


    public function update(Request $request, $id)
    {
        $article = Articles::find($id);

        if ($request->isMethod('post')) {

//            $rules = [
//                'title' => 'min:1'
//
//            ];
//            $this->validate($request, $rules);
//
            $article->title = $request->title;
            $article->text = $request->text;
            $article->desc = $request->desc;
            $article->tags = $request->tags;

            $mimeTypeList = ['image/gif', 'image/jpeg', 'image/pjpeg', "image/png"];
            //вынести в сервис загрузку картинку. Проверить mime type
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $originalName = $file->getClientOriginalName();
                $name = $article->id . rand(1111111, 9999999). "." . $file->getClientOriginalExtension();
                $mime= $file->getMimeType();
                foreach ($mimeTypeList as $mimeType) {
                    if ($mime == $mimeType) {
                        $file->move(public_path() . '/image', $name);
                        $article->image = $name;
                    }

                }
            }
            $article->save();
        }
        return redirect()->route('allArticles');
    }


    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();

        return redirect()->route('allArticles');

    }

    public function rating($id)
    {
        $data = Articles::find($id);

        $value = Articles::
        select('articles.created_at', DB::raw('sum(articles.id) as sum'))
            ->groupBy('articles.created_at')->get();

        $chart = Charts::multiDatabase('area', 'highcharts')
            // Setup the chart settings
            ->title("My Cool Chart")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400)// Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Element 1', $value)
//            ->dataset('Element 2', $value2)
//            ->dataset('Element 3', $value3)
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        return view('articles.test', ['chart' => $chart]);
    }

}
