<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cities.index',[
            'cities'=>City::all(),
            'states'=>State::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // گرفتن استان ها
        $states=\App\Models\State::all();

        return view('admin.cities.create',[
            'cities'=>City::all(),
            'states'=>State::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewCityRequest $request)
    {
        City::create([
            'name'=>$request->name,
            'state_id'=>$request->state_id,
            'slug'=>$request->slug ?:
            Str::slug($request->name, '-', null),
        ]);

        return redirect(route('cities.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('admin.cities.edit',[
            'city'=>$city,
            'cities'=>City::all(),
            'states'=>State::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {

        $city->update([
            'name'=>$request->name,
            'state_id'=>$request->state_id,
            'slug'=>$request->slug ?:
            Str::slug($request->name)
        ]);

        return redirect(route('cities.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect(route('cities.index'));
    }
}
