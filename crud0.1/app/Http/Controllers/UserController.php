<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
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


    public function createPage()
    {
        //
        //echo "This Section For User Add Basically";
        $all_user = DB::table('users') -> get();
        return view('UserDepartment.addUser' , compact('all_user'));
    }
    

    public function create()
    {
        //
        //echo "This Section For User Add Basically";
        //return view('UserDepartment.addUser');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
          //echo "Now the process For store Data Into database Work"; 
          //return $request->all();


          // DB::table('users') -> insert($request->all()); // {Error Shown :- Column not found: 1054 Unknown column '_token'}

          $input = array();
          $input['name'] = $request->name;
          $input['lname'] = $request->lname;
          $input['email'] = $request->email;
          $input['mobile'] = $request->mobile;

          DB::table('users')->insert($input);
          // echo "<script> alert('User Is Created Success') </script>";
          return Redirect::to('addUser');           
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
        //echo $id;

        $user_id = DB::table('users') -> where('id' , $id) -> get();
        return view('UserDepartment.editUser' , compact('user_id'));

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

          $input = array();
          $input['name'] = $request->name;
          $input['lname'] = $request->lname;
          $input['email'] = $request->email;
          $input['mobile'] = $request->mobile;

          DB::table('users')-> where('id' , $id) -> update($input);
          // echo "<script> alert('User Is Created Success') </script>";
          return Redirect::to('addUser');           

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
