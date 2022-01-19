<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = RouteServiceProvider::HOME;

    public function index()
    {
        Log::info(__METHOD__);

        $outs = User::all();

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Log::info(__METHOD__);

        $outs = User::create([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'user_id' => $request->input('user_id'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'user_level' => config('ext.user.user_level.default'),
        ]);


        Log::info($outs);

        return json_encode($outs);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
