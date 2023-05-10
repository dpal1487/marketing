<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'comments' => 'required'
        // ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'comments' => $request->comments,
        ]);
        if ($contact) {
            return redirect('/contact')->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        }
    }
}
