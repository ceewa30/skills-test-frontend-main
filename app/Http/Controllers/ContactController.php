<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \AIlluminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:11',
            'subject'=>'required',
            'message' => 'required'
        ]);

        $contact = Contact::create($request->input());

        $success = 'Thank you for your message! We will review your submission and respond to you in 24-48 hours.';

        if ($request->ajax())
            return response()->json(compact('success'));

        return redirect()->back()->with('success', $success);
    }
}
