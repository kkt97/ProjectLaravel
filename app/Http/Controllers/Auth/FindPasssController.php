<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\FindPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class FindPasssController extends Controller
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
//     * @param  \App\Models\Auth\FindPassword  $findPassword
     * @return \Illuminate\Http\Response
     */
    public function show(FindPassword $findPassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\Auth\FindPassword  $findPassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
//        Log::info(__METHOD__."!!!!!!!!!!!!!!");
//        Log::info($request);
//        Log::info($request->user_id);
//        Log::info($id);
//        Log::info($user);
        $user = User::where('name',$request->name)
                    ->where('user_id',$request->user_id)
                    ->where('email',$request->email)
                    ->where('phone',$request->phone)
                    ->first();
//        Log::info($user);
        $outs = [];

        try {
            $outs = $user->update(['password' => bcrypt($request->password)]);
        } catch (\Exception $e) {
//            Log::info($e->getMessage());
        }
        return json_encode($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth\FindPassword  $findPassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(FindPassword $findPassword)
    {
        //
    }
}
