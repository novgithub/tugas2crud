<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blogger;


class PagesController extends Controller
{
    public function index()
    {
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        //$model = DB::table('blogger')->get();
        $model = Blogger::all();
        return view('index' , ['model' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $blog = new Blog;
       // $blog->name = $request->name;
      //  $blog->sosmed = $request->sosmed;
      //  $blog->information = $request->information;

      //  $blog->save();

       // Blogger::create([
          //  'name' => $request->name,
            //'sosmed' => $request->sosmed,
            //'information' => $request->information,
     //   ]);

        $request->validate([
            'name' => 'required',
            'sosmed' => 'required',
            'information' => 'required'
        ]);


        Blogger::create($request->all());
        return redirect('/')->with('status','Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogger = Blogger::find($id);
        return view('layouts.edit', compact('blogger'));
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
        $request->validate([
            'name' => 'required',
            'sosmed' => 'required',
            'information' => 'required'
        ]);

        Blogger::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'sosmed' => $request->sosmed,
                    'information' => $request->information
                ]);
        return redirect('/')->with('status','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       // $ml = Blogger::where('name', 'sosmed','information')->where('id', $id);
      //  $ml->destroy();
        //$model->delete();
        //DB::table('blogger')->where('id',$id)->destroy();

        Blogger::destroy($id);
	    return redirect('/')->with('status','Data Berhasil dihapus');
    }
}
