<?php

namespace App\Http\Controllers;

use App\Models\EmailSubjects;
use App\Http\Requests\StoreEmailSubjectsRequest;
use App\Http\Requests\UpdateEmailSubjectsRequest;

class EmailSubjectsController extends Controller
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
     * @param  \App\Http\Requests\StoreEmailSubjectsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmailSubjectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailSubjects  $emailSubjects
     * @return \Illuminate\Http\Response
     */
    public function show(EmailSubjects $emailSubjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailSubjects  $emailSubjects
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailSubjects $emailSubjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmailSubjectsRequest  $request
     * @param  \App\Models\EmailSubjects  $emailSubjects
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmailSubjectsRequest $request, EmailSubjects $emailSubjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailSubjects  $emailSubjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailSubjects $emailSubjects)
    {
        //
    }
}
