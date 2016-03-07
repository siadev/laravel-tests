<?php

namespace LaravelExamples\Http\Controllers;

use LaravelExamples\Flyer;
use Illuminate\Http\Request;

use LaravelExamples\Http\Requests;
use LaravelExamples\Http\Controllers\Controller;
use LaravelExamples\Photo;

class FlyersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('flyers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|Requests\FlyerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FlyerRequest $request)
    {
        // Validate the form        -- ( About using php artisan make:request
        //                               You find it in ..app/Requests directory )
        // persist the flyer (save) -- Flyer::create($request->all());

        Flyer::create($request->all());

//        flash()->success('Successfully saved' , 'Flyer created');

        flash()->overlay('Successfully saved' , 'Flyer created', 'success');

        // redirect to landing page -- for the same page use:
        //                             return redirect()->back();
        return redirect()->back();  // Back one to the form
    }

    public function byPostcodeStreet($postcode, $street) {

        $flyer = Flyer::locatedAt($postcode, $street)->first();
        return view('flyers.by_postcode_and_street', compact('flyer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flyer = Flyer::find($id);
        return view('flyers.show',  compact('flyer'));
    }

    public function addPhoto($id, Request $request) {
        $this->validate($request, [ 'file' => 'required|mimes:jpg,jpeg,png,bmp,gif' ]);

        $photo = Photo::fromForm($request->file('file'));

        Flyer::find($id)->addPhoto($photo);

        flash()->overlay('Successfully saved' , 'Photos have been saved', 'success');

        return "Photos Uploaded";
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
