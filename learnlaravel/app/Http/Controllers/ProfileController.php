<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile = DB::table('profile') -> get();
        return view('profile/alluser' , compact('profile'));
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
        
        $data = array();
        $data['name'] = $request->name;
        $data['mobile'] = $request->mobile;
        $profile = DB::table('profile')
                   ->insert($data);

        if($profile){
            echo "Data Is Saved";
            return Redirect::to('/show_user');
        }else{
            echo "Data Is Not Saved";
        }           


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
        //return $id;

        $profile = DB::table('profile')
                    ->where('id' , $id) ->get();
                    return view('profile/edit_user' , compact('profile'));
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
        //return $request -> all();
        $data = array();
        $data['name'] = $request->name;
        $data['mobile'] = $request->mobile;
        $update = DB::table('profile')
                -> where('id' , $id)
                -> update($data);

        if($update){
            echo "Data Is Updated";
            return Redirect::to('/show_user');
        }else{
            echo "Data Is Not Updated";
        }

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
}
