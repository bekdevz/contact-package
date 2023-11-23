<?php

namespace Bekadmin\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Bekadmin\Contact\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // return view('contact');
        return view('contact::contact',[
        ]);
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
