<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\weiter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class News extends Controller
{

    function index(){
        $news=\App\Models\News::query()->latest()->get();

        return  view("admin.news.index",["news"=>$news]);
    }
    public function create()
    {
        $categories = \App\Models\classification::query()->get();
        return view ("admin.news.create" ,["categories"=>$categories]);

    }
    /*
    */
    /**
     *Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'imgs'=>'required|image',
            'title'=>'required',
            'body'=>'required',
            'category_id'=>'required',
        ]);
        $user = Auth::user();

        if($request->file('imgs'))
            $name=$request->file('imgs')->store("news");

        \App\Models\News::query()->create([
                "title"=>$request->title,
                'body'=>$request->body,
                "images"=>'storage/'.$name,
                "writer_id"=>auth()->id(),
                'category_id'=>$request->category_id,
                'essential'=>$request->has('essential')
            ]
        );

        return redirect()->route('admin.news.index');
    }
 function edit($id){
        $news=\App\Models\News::query()->findOrFail($id);
        $categories=\App\Models\Classification::query()->get();
        return view('admin.news.edit',compact("news","categories"));
 }
 function update($id,Request $request){
     $this->validate($request,[
         'imgs'=>'nullable|image',
         'title'=>'required',
         'body'=>'required',
         'category_id'=>'required',
     ]);
     $data = $request->only('title', 'body');
     if($request->imgs){
         $data['images']= "storage/".$request->imgs->store("news");
     }
     $data['essential']=$request->has("essential");
        \App\Models\News::query()->where("id","=",$id)->update($data);
return redirect()->route("admin.news.index")->with("msg","success");
 }
 function destroy($id,Request $request){
        \App\Models\News::query()->where("id",'=',$id)->delete();
        return redirect()->route("admin.news.index");
 }

    function showNewsCategory($category_id)
    {
        $newsForCategory=\App\Models\News::query()->where("category_id","=",$category_id)->latest()->get();
        $category = \App\Models\Classification::query()->find($category_id);
 return view("front.newsForCategory",compact('newsForCategory',"category"));
    }
    function showNewsSelected($news_id){
        $urgentNewsA=[];
        $newsItem=\App\Models\News::query()->findOrFail($news_id);
        $news=\App\Models\News::query()->get();
        $writer=User::query()->find($newsItem->writer_id);
        foreach ($news as $urgentNews){
            if(($urgentNews->created_at->diffInMinutes(now()))<=30){
$urgentNewsA[]=$urgentNews;
            }
        }
        return view("front.news",compact("newsItem","writer","news","urgentNewsA")) ;
    }
}

