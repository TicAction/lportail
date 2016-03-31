<?php

namespace App\Http\Controllers;

use App\Schoolboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolboardController extends Controller
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
        $schoolboards = Schoolboard::all();


        return view('schoolboards.index', compact('schoolboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('schoolboards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Schoolboard::create($request->all());
        return view('schoolboards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schoolboard = Schoolboard::findOrFail($id);

        return view('schoolboards.show', compact('schoolboard'))->with('message', ['Je suis le meilleur']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schoolboard = Schoolboard::findOrFail($id);

        return view('schoolboards.show', compact('schoolboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $schoolboard = Schoolboard::findOrFail($id);
        $schoolboard->update($request->all());

        return redirect('schoolboards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schoolboard::destroy($id);

        return view('schoolboards.index');
    }
}
