<?php

namespace app\Http\Controllers;

use app\User;
use Illuminate\Http\Request;
use app\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $model)
    {
        $users = $model->utilisateurs(); /// fonction qui recupère tous les membres de la BDD
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json();
    }

    public function search()
    {
        request()->validate([
            'q' => 'required|min:1'
        ]);
        $q = request()->input('q');
        $users = User::where('nom', 'like', "%$q%")
            ->orWhere('prenom', 'like', "%$q%")
            ->orWhere('username', 'like', "%$q%")
            ->paginate(4);
        return view('users.search')->with('users', $users);
    }
}
