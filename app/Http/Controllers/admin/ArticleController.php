<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(10);
        return view('admin.article.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('title', 'id');

        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'slug' => 'required|unique:articles|max:255',
            'keyword' => 'max:255',
            'description' => 'required'
        ]);

        $article = new Article();
if(empty($request->image)){
    $image='admin/img/category-thumb.png';
    }
    $request->merge(['image'=>$image]);

        try {
            $article = $article->create($request->all());
            $article->categories()->attach($request->categories);
        } catch (Exception $exception) {
            return redirect(route('admin.article'))->with('warning', $exception->getMessage());
        }

        $msg = "مقاله جدید ثبت شد";
        return redirect(route('admin.article'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all()->pluck('title', 'id');

        return view('admin.article.edit', compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'keyword' => 'max:255',
            'description' => 'required'
        ]);




        try {
             $article->update($request->all());
            $article->categories()->sync($request->categories);
        } catch (Exception $exception) {
            return redirect(route('admin.article'))->with('warning', $exception->getMessage());
        }

        $msg = "مقاله ویرایش شد";
        return redirect(route('admin.article'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        try {
            $article->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.article'))->with('warning', $exception->getMessage());
        }

        $msg = "مقاله حذف گردید";
        return redirect(route('admin.article'))->with('success', $msg);
    }

    public function updatestatus(Article $article)
    {
        if ($article->active == 1) {
            $article->active = 0;
        } else {
            $article->active = 1;
        }
        $article->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.article'))->with('success', $msg);
    }


}
