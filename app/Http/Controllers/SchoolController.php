<?php

namespace App\Http\Controllers;

use App\School;
use App\Schoolboard;
use App\SchoolTeacher;
use App\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SchoolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $schools = School::orderBy('id','asc')->paginate(1);


        return view('schools.index',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cs = Schoolboard::orderBy('name','ASC')->get();
        return view('schools.create',compact('cs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $teacher = Teacher::create([
//            'username'=> $request->get('username'),
//            'firstname'=> $request->get('firstname'),
//            'lastname'=> $request->get('lastname'),
//            'email'=> $request->get('email'),
//            'password'=> $request->get('password'),
//
//
//        ]);
//
//
//        $school =School::create([
//            'name'=> $request->get('name'),
//            'adress_number'=>$request->get('adress_number'),
//            'adress'=>$request->get('adress'),
//            'phone'=>$request->get('phone'),
//            'zipcode'=>$request->get('zipcode'),
//            'url'=>$request->get('url'),
//            'schoolboard_id'=>$request->get('schoolboard_id'),
//        ]);
//
//
//
//        $ts = SchoolTeacher::create([
//            'teacher_id' => $teacher->id,
//            'school_id' => $school->id,
//            'years'=>'3e année',
//        ]);


        return redirect('school');
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
    public function update(Request $request, $id)
    {
        //
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
