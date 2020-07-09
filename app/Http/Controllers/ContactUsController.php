<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactUsController extends Controller
{
    //
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'message' => 'required'
         ]);
       

         $employe = new Contact([
            'name' =>  $request -> get('name'),
           'email' => $request -> get('email'),
           'message' => $request -> get('message'),
          
       ]);

       $employe -> save();
        return redirect ('/home');
    }
 
}
