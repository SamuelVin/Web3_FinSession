<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Usager;
use DB;

class usagersController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usagers = Usager::All();

        return view('usagers.acceuil', compact( 'usagers'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usagers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            try{
    
               $usager =new Usager ($request->all());
               $usager->password=Hash::make($request->password);
                $usager->save();
            }
            catch(\Throwable $e)
            {
                log::debug($e);
         }
            return redirect()->route('usagers.acceuil');
       
       return redirect()->route('usagers.acceuil');
       }
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


 
    public function showLoginForm()
    {
        return view('usagers.showLoginForm');
    }


    public function login(Request $request)
    {
        $reussi = Auth::attempt(['nom'=>$request->nom, 'prenom'=>$request->prenom, 'sexe'=>$request->sexe, 'email'=>$request->email, 'password'=>$request->password]);

        if([$reussi]){
           
            return redirect()->route('films.acceuil')->withErrorrs(['Informations invalides']);
        }
        else{
            return redirect()->route('login')->withErrorrs(['Informations invalides']);
        }
    }


    public function logout($id)
    {
        
    }

}
