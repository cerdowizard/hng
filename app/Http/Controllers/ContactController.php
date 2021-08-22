<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contactForm');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}