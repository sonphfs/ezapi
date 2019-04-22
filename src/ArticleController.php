<?php

namespace Sonphfs\Ezapi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;

class ArticleController extends Controller
{
    public function index()
    {
        return DB::table('articles')->get();
    }

    public function show($id)
    {
        $article = DB::table('articles')->find($id);

        return response()->json($article, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:articles',
            'body' => 'required'
        ]);

        $article = DB::table('articles')->insert([
            'title' => $request['title'],
            'body' => $request['body']
        ]);

        return response()->json($article, 200);
    }

    public function update(Request $request, $id)
    {
        $article = DB::table('articles')->where('id', $id)->update([
            'title' => $request['title'],
            'body' => $request['body']
        ]);
        if($article)
            return response()->json("{'status': 'ok'}");
        return response()->json("{'status': 'failed'}");
    }

    public function delete($id)
    {
        DB::table('articles')->where('id', $id)->delete();

        return response()->json("{'status: ok'}", 200);
    }

}
