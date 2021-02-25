<?php

namespace app\Http\Controllers;

use app\Article;
use app\Categorie;
use app\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Nexmo\User\User as UserUser;
use Illuminate\Support\Facades\DB;
use app\Repositories\ArticleRepository;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{

    /**
     * Article repository.
     *
     * @var \App\Repositories\ArticleRepository
     */
    protected $articleRepository;


    public function __construct(ArticleRepository $repository)
    {
        $this->articleRepository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $articles = Article::paginate(5);
        $categories = Categorie::latest()->get();
        if (request('categorie')) {
            $articles = Article::where('categorie_id', request('categorie'))->paginate(5);
            return view('article.index', compact('articles', 'categories'));
        }
        return view('article.index', compact('articles', 'categories'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|max:2000',
            'categorie_id' => 'required|exists:categories,id',
            'titre' => 'required|string|max:255',
            'texte' => 'required|string'
            // 'description' => 'required|string|max:255'
        ]);

        $this->articleRepository->store($data);

        return back()->with('ok', __("Votre article a bien été postée !"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Article $model)
    {
        $recents = $model->recents();
        $article = Article::find($id);
        $categories = Categorie::latest()->get();
        return view('article.show', compact('article', 'categories', 'recents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search()
    {
        request()->validate([
            'titre' => 'required|min:1',
            'auteur' => 'required|min:1',
        ]);
        $titre = request()->input('titre');
        $auteur = request()->input('auteur');

        $users = User::where('nom', 'like', "%$auteur%")
            ->orWhere('prenom', 'like', "%$auteur%")
            ->orWhere('username', 'like', "%$auteur%")
            ->paginate(3);
        $articles = Article::where('titre', 'like', "%$titre%")
            ->orWhere('texte', 'like', "%$titre%")
            ->orWhere('description', 'like', "%$titre%")
            ->paginate(3);

        return view('articles.search')->with([
            'articles' => $articles,
            'users' => $users,
        ]);
    }
}
