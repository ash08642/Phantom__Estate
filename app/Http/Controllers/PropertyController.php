<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    // show all property
    public function index(){
        return view('properties.index',[
            'properties' => Property::latest()->filter(request(['propertytype', 'purchasetype','search']))->paginate(8),
            'propertytype' => request('propertytype'),
            'purchasetype' => request('purchasetype')
        ]);
    }

    // show single property
    public function show(Property $property){
        return view('properties.show', [
            'property' => $property
        ]);
    }

    //show create form
    public function create(){
        return view('properties.create');
    }

    // Store Property Data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'plz' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'size' => 'required',
            'price' => 'required',
            'propertytype' => 'required',
            'purchasetype' => 'required',
            'description' => 'required',
            'agentfirstname' => 'required',
            'agentlastname' => 'required',
            'agentemail' => ['required', 'email'],
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos','public');
        }

        $formFields['user_id'] = Auth::user()->id;

        Property::create($formFields);

        return redirect('/')->with('message', 'Property Saved Succesfully');
    }

    public function edit(Property $property){
        return view('properties.edit',[
            'property' => $property
        ]);
    }

    // Update Property Data from Edit Form
    public function update(Request $request, Property $property){
        
        // Make Sure Logged in user is owner
        if($property->user_id != Auth::id()){
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'plz' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'size' => 'required',
            'price' => 'required',
            'propertytype' => 'required',
            'purchasetype' => 'required',
            'description' => 'required',
            'agentfirstname' => 'required',
            'agentlastname' => 'required',
            'agentemail' => ['required', 'email'],
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos','public');
        }
        
        $property->update($formFields);

        return redirect('/Properties/' . $property->id)->with('message', 'Property Saved Succesfully');
    }

    // Delete Property
    public function destroy(Property $property, Request $request){
        
        // Make Sure Logged in user is owner
        if($property->user_id != Auth::id()){
            abort(403, $request->idToDelete . ' Auth id: ' . Auth::id());
        }
        
        $property->delete();
        return redirect('/Properties/MyProperties')->with('message', 'Property deleted succesfully');
    }

    // Manage Properties
    public function manage(){
        return view('properties.myproperties', [
            'properties' => Auth::user()->properties()->get()
        ]);
    }
}
