<?php

namespace app\Http\Controllers;

use app\Jobs;
use app\User;
use app\France;
use Carbon\Carbon;
use app\Candidature;
use Illuminate\Http\Request;
use app\Http\Requests\JobStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function addLike()
    {
        auth()->user()->likes()->toggle($this->job->id);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Candidature $id)
    {
        $candidature = Candidature::all();
        $jobs = Jobs::paginate(15);
        // $jobs = Jobs::online()->latest()->get();
        $nbcandidature = $id->nombre();
        return view('emploi.index', compact(['jobs', 'candidature', 'nbcandidature']));
    }

    public function search()
    {
        $pe = request()->input('pe');
        $vp = request()->input('vp');

        $jobs = Jobs::where('intitule', 'like', "%$pe%")
            ->orWhere('entreprise', 'like', "%$pe%")
            ->orWhere('ville', 'like', "%$vp%")
            ->orWhere('departement', 'like', "%$vp%")
            ->paginate('6');

        return view('emploi.search')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, France $france)
    {
        return view('emploi.create', compact('user'));
    }

    public function postule(Jobs $id)
    {
        return view('emploi.postule', compact('id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStore $request)
    {

        $validated = $request->validated();

        dd($validated);
        
        $job = new Jobs();
        $job->user_id =  auth()->id();
        $job->intitule = $validated['intitule'];
        $job->entreprise = $validated['entreprise'];
        $job->lien_annonce = $validated['lien_annonce'];
        $job->entreprise = $validated['entreprise_mail'];
        $job->description_entreprise = $validated['description_entreprise'];
        $job->job_lieu = $validated['job_lieu'];
        $job->entreprise_adresse = $validated['entreprise_adresse'];
        $job->postale = $validated['postale'];
        $job->ville = $validated['ville'];
        $job->departement = $validated['departement'];
        $job->pays = $validated['pays'];
        $job->profil = $validated['profil'];
        $job->description = $validated['description'];
        $job->aspect = $validated['aspect'];
        $job->type = $validated['type'];
        $job->disponibilite = $validated['disponibilite'];
        $job->diplome = $validated['diplome'];
        $job->salaire = $validated['salaire'];
        $job->save();

        return redirect()->route('jobs')->with('success', 'Votre offre d\'emploi à bien été publiée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \app\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $id)
    {
        return view('emploi.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        //
    }
}
