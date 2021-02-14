<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $article = Article::all();
        return view('home', ['categories' => $category, 'articles' => $article]);
    }
    
    public function aboutus()
    {
        return view('aboutus');
    }

    public function desc($id)
    {
        $category = Category::all();
        $article = Article::find($id);

        return view('desc',['categories' => $category, 'articles' => $article]);
    }

    public function category($id)
    {
        $article = Article::where('category_id', $id)->get();

        return view('category',['articles' => $article]);
    }
    
    public function admin()
    {
        $article = Article::all();

        return view('admin',['articles' => $article]);
    }

    public function blog()
    {
        $id = Auth::user()->id;
        $article = Article::where('user_id', $id)->get();

        return view('blog',['articles' => $article]);
    }
    
    public function delArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        Article::destroy($id);

        return back();
    }
    
    public function user()
    {
        $user = User::where('role', 'User')->get();

        return view('user',['users' => $user]);
    }
    
    public function profile()
    {

        return view('profile');
    }
    
    public function seeprofile()
    {

        return view('updateprofile');
    }
    
    public function updateprofile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10',
        ]);

        $id = Auth::user()->id;
        DB::table('users')->where('id',$id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return back();
    }

    public function deluser($id)
    {
        $article = Article::where('user_id',$id);
        $article->delete();
        User::destroy($id);

        return back();
    }

    public function newarticle()
    {
        $category = Category::all();

        return view('newarticle',['categories' => $category]);
    }
    
    public function postarticle(Request $request)
    {
        $id = Auth::user()->id;
        $last = DB::table('articles')->latest('id')->first();

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required|min:10',
            'image' => 'required'
        ]);

        $articles = new Article();

        $articles->title = $request->input('title');
        $articles->user_id = $id;
        $articles->category_id = $request->input('category_id');
        $articles->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($last == NULL) {
                $filename = 0 . '.' . $extension;
            } else {
                $filename = $last->id + 1 . '.' . $extension;
            }
            $file->storeAs('public/images/', $filename);
            $articles->image = $filename;
        } else {
            $articles->image = '';
        }

        $articles->save();

        $category = DB::table('categories')->get();

        return back()->with('success', 'deleted!');
    }
}