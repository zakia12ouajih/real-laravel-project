<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterPeopleController extends Controller
{
    public function Insert_people(Request $request){
        DB::table('register_people')->insert(
            [
                'first_name' => $request->first_name,
                'last_name'=>$request->last_name,
                'phone_number'=>$request->phone_number,
                'email_address'=>$request->email_address,
                'password'=>$request->password,
            ]
        );
        return redirect('/');
    }
    public function viewDatabaseFunction()
    {
        $people = DB::table('register_people')->get();
        return view('viewDatabase', compact('people'));
    }
}
