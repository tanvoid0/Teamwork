<?php

namespace App\Http\Controllers;

use App\Info;
use App\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $live = Stream::whereClient(Info::whereName('stream')->first()->value)->first();
        $color = array("red", "green", "purple", "orange", "blue");
        $streams = Stream::all();
        return view('admin.stream.index', compact('streams', 'live', 'color'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(Stream $stream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stream = Stream::find($id);
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('images/user/', $file->getClientOriginalName());
            $stream->image = $file->getClientOriginalName();
        }
        $stream->client = $request->client ;
        $stream->link = $request->link;
        $stream->channel = $request->channel;

        $stream->save();
        Session::flash("title", "Congratulations");
        Session::flash("result", "success");
        Session::flash("message", "Stream Client Has Been Updated");
        return redirect(route('stream.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stream $stream)
    {
        //
    }
}
