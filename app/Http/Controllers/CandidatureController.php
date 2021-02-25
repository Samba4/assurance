<?php

namespace app\Http\Controllers;

use app\Jobs;
use app\Candidature;
use app\CoverLetter;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function store(Request $request, Jobs $job)
    {
        $candidature = Candidature::create([
            'job_id' => $job->id,
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'ville' => $request->input('ville'),
            'telephone' => $request->input('telephone'),
            'validated' => false,
            'content' => $request->input('content'),
            'attachment' => $request->input('attachment'),
        ]);

        return redirect()->route('jobs');
    }
}
