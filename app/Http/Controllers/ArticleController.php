<?php

namespace App\Http\Controllers;

use App\Article as Article;
use Illuminate\Http\Request;
use App\Http\Resources\Article as ArticleResource;
use stdClass;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::paginate(7);

        return ArticleResource::collection($articles);
        
    }
    public function show($id)
    {
        $articles =  Article::findOrFail($id);

        // return  $articles;

        return new ArticleResource($articles);

      

    }
    public function store(Request $request)
    {
        $articles = new stdClass();

        $routType = 0;
       
        if($request->isMethod('put'))
        {
            $articles->id = $request->article_id;
            $articles =  Article::findOrFail($articles->id);

            $routType = 1;

                        
        }
        else
        {
            $articles = new Article();
            $routType = 2;
        }
        $articles->title = $request->title;
        $articles->body = $request->body;

        $articles->save();

       if($articles->save())
       {
            return new ArticleResource($articles);
       }
   // return "the route is fine".$routType;
    }
    public function destroy($id)
    {
        $articles =  Article::findOrFail($id);

        
        if($articles->delete())
        {
            return new ArticleResource($articles);
        }

        

    }
}
