<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goalkeeper;
use Illuminate\Validation\Rule;

class GoalKeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goalkeepers = Goalkeeper::all();
        return view('goalkeepers.index',compact('goalkeepers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goalkeepers.create');
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

      // Save new goalkeeper on DB
        $goalkeeper = new Goalkeeper();
        $goalkeeper->fill($data);
        $saved =  $goalkeeper->save();

        //redirect to show route
        if($saved){
            $newGoalkeeper = Goalkeeper::find($goalkeeper->id);
            return redirect()->route('goalkeepers.show', $newGoalkeeper->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Goalkeeper $goalkeeper)
    {
        return view('goalkeepers.show', compact('goalkeeper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('goalkeepers.edit', compact('goalkeeper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goalkeeper $goalkeeper)
    {
        $data = $request->all();
        
        // validazione
        $request->validate($this->validationRules($goalkeeper->id));
        // update data on DB
        $updated = $goalkeeper->update($data);
        //redirect
        if($updated){
            return redirect()->route('goalkeepers.show', $goalkeeper->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goalkeeper $goalkeeper)
    {
        // ref entity to be deteted
        $ref = $goalkeeper->name;
        //delete
        $deleted = $goalkeeper->delete();

        // redirect with section data
        if($deleted){
            return redirect()->route('goslkeepers.index')->with('deleted', $ref);
        }
    }

    // define validation rules
private function validationRules($id = null)
{
    return [
        'name' =>[ 
            'required',
            'max:20',
            Rule::unique('goalkeepers')->ignore($id)
        ],
        'gs' => 'required',
        'penaltyshots' => 'required'
    ];
}
}
