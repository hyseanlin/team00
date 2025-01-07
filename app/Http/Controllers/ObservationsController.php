<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateObservationRequest;
use App\Models\Observation;
use Illuminate\Support\Facades\Gate;

class ObservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $observations = Observation::all();
        //return view('observations.index', compact('observations'));
        return view('observations.index')->with('observations', $observations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("observations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateObservationRequest $request)
    {
        $data = $request->only([
            'project_name',
            'year',
            'month',
            'day',
            'survey_method',
            'longitude',
            'latitude',
            'administrative_region',
            'identification_level',
            'common_species_name',
            'original_species_name',
            'original_species_scientific_name',
            'verified_species_code',
            'quantity',
            'quantity_unit',
            'kingdom',
            'kingdom_chinese_name',
            'phylum',
            'phylum_chinese_name',
            'class',
            'class_chinese_name',
            'order',
            'order_chinese_name',
            'family',
            'family_chinese_name',
            'genus',
            'genus_chinese_name',
        ]);
        
        $observation = Observation::create($data);
        
        return redirect('observations');
        
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
        $observation = Observation::findOrFail($id);
        return view('observations.show')->with('observation', $observation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::allows('user'))
            abort(401);

        $observation = Observation::findOrFail($id);
        return view("observations.edit")->with('observation', $observation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateObservationRequest $request, $id)
    {
        if (Gate::allows('user'))
            abort(401);

        $observation = Observation::findOrFail($id);

        $data = $request->only([
            'project_name',
            'year',
            'month',
            'day',
            'survey_method',
            'longitude',
            'latitude',
            'administrative_region',
            'identification_level',
            'common_species_name',
            'original_species_name',
            'original_species_scientific_name',
            'verified_species_code',
            'quantity',
            'quantity_unit',
            'kingdom',
            'kingdom_chinese_name',
            'phylum',
            'phylum_chinese_name',
            'class',
            'class_chinese_name',
            'order',
            'order_chinese_name',
            'family',
            'family_chinese_name',
            'genus',
            'genus_chinese_name',
        ]);

        // Update the model's attributes
        $observation->fill($data);

        // Save the changes to the database
        $observation->save();
        
        return redirect('observations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $observation = Observation::findOrFail($id);
        $observation->delete();
        return redirect('observations'); // 觸發一組路由 observations
    }
}
