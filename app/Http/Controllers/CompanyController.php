<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as Company;
use Validator, Input, Redirect; 
use View;
use Uuid;
use Session;

class CompanyController extends Controller
{
    public function index()
    {
        // get all the companys
        $company = Company::all();

        // load the view and pass the companies
        return view('companies.index')    
            ->with('company', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title' => 'required|string',
            'email' => 'required|email',
            'adress' => 'required|string',
            'zip_code' => 'required|string',
            'phone_number' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('company/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $company = new Company;
            $company->title        = Input::get('title');
            $company->email        = Input::get('email');
            $company->adress       = Input::get('adress');
            $company->email        = Input::get('email');
            $company->zip_code     = Input::get('zip_code');
            $company->city         = Input::get('city');
            $company->phone_number = Input::get('phone_number');
            $company->state        = Input::get('state');
            $company->description  = Input::get('description');
            $company->category     = Input::get('category');
            $company->uuid         = Uuid::generate()->string;
            $company->save();

            // redirect
            Session::flash('message', 'Successfully created company!');
            return Redirect::to('company');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show( int $id )
    {
        // get the Company
        $company = Company::find($id);

        // show the view and pass the Company to it
        return View::make('companies.show')
            ->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit( int $id )
    {
        // get the company
        $company = Company::find($id);

        // show the edit form and pass the Company
        return View::make('companies.edit')
            ->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( int $id )
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title' => 'required|string',
            'email' => 'required|email',
            'adress' => 'required|string',
            'zip_code' => 'required|string',
            'phone_number' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('company/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $company = Company::find($id);
            $company->title        = Input::get('title');
            $company->email        = Input::get('email');
            $company->adress       = Input::get('adress');
            $company->email        = Input::get('email');
            $company->zip_code     = Input::get('zip_code');
            $company->city         = Input::get('city');
            $company->phone_number = Input::get('phone_number');
            $company->state        = Input::get('state');
            $company->description  = Input::get('description');
            $company->category     = Input::get('category');
            $company->save();

            // redirect
            Session::flash('message', 'Successfully updated company!');
            return Redirect::to('company');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return Response
     */
    public function destroy( int $id )
    {
        // delete
        $company = Company::find($id);
        $company->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the company!');
        return Redirect::to('company');
        
    }

    public function searchCompany( string $content ) : json
    {
       $search =  Company::where('title', 'like', '%' . $content . '%')
                    ->orWhere('adress', 'like', '%' . $content . '%')
                    ->orWhere('zip_code', 'like', '%' . $content . '%')
                    ->orWhere('city', 'like', '%' . $content . '%')
                    ->orWhere('category', 'like', '%' . $content . '%')->get();
        dd($search);
    }
}
