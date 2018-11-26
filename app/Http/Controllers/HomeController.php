<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    } public function insert()
{
    return view('admin.users.create');
}
public function store(){
        //validate the address

    //create the address
    $address = new Address();
    $address->name =request('address');
    $address->user_id = auth()->user()->id;


    //save the address
    $address->save();
}
public function user(){
        $id = auth()->user()->id;
    $user = User::findOrFail($id);

    return $user->address()->get();
}

    public function address(){


        $address = Address::findOrFail(1);
        return   $address->users()->get();

    }
}
