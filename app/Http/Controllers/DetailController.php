<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use Illuminate\Validation\Rule;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();
        return view('details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validazione

        $request->validate($this->validationRules());

        // save new detail on DB
        $detail = new Detail();
        //$detail->name = $data['name'];
        //$detail->gf = $data['gf']; 
        //$detail->assist = $data['assist']; 
        $detail->fill($data);
        $saved = $detail->save();
        
        // redirect to show route
        if($saved){
            $newDetail = Detail::find($detail->id);
            return redirect()->route('details.show', $newDetail);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('details.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view('details.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        $data = $request->all();
        
        // validazione
        $request->validate($this->validationRules($detail->id));
        // update data on DB
        $updated = $detail->update($data);
        //redirect
        if($updated){
            return redirect()->route('details.show', $detail->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        // ref entity to be deteted
        $ref = $detail->name;
        //delete
        $deleted = $detail->delete();

        // redirect with section data
        if($deleted){
            return redirect()->route('details.index')->with('deleted', $ref);
        }
    }

// define validation rules
private function validationRules($id = null)
{
    return [
        'name' =>[ 
            'required',
            'max:20',
            Rule::unique('details')->ignore($id)
        ],
        'gf' => 'required',
        'assist' => 'required'
    ];
}

}


