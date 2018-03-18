<?php

namespace App\Http\Controllers;

use App\Recruiter;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the Recruiters ads.
     *
     * @return \Illuminate\Http\Response
     */
    public function ads()
    {
        //dd(auth()->id());
        $ads = Recruiter::find(auth()->id())->ads;
        return view('ads', ['ads' => $ads]);
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
     * @param  \App\Recruiter  $recruiter
     * @return \Illuminate\Http\Response
     */
    public function show(Recruiter $recruiter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recruiter  $recruiter
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruiter $recruiter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recruiter  $recruiter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruiter $recruiter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recruiter  $recruiter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruiter $recruiter)
    {
        //
    }
}
