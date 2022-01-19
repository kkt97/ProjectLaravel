<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\FindId;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FindIDsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info(__METHOD__);

        $outs = User::all();

        return json_encode($outs);
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
     * @param  \App\Models\Auth\FindId  $findId
     * @return \Illuminate\Http\Response
     */
    public function show(FindId $findId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\FindId  $findId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FindId $findId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth\FindId  $findId
     * @return \Illuminate\Http\Response
     */
    public function destroy(FindId $findId)
    {
        //
    }
}
