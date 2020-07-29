<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;

class PersonalContactsController extends Controller
{

    public function index()
    {

        $contacts = Auth::user()->contacts;
        
        return view('personal-contacts', [
            'contacts'=>$contacts,
        ]);

    }

    public function store()
    {
        $validated = request()->validate([
            'number' => 'required|string|min:11|max:11',
        ]);

        $newContact = null;

        if (Contact::where('number', $validated['number'])->exists()) {
            $newContact = 
                Contact::where('number', $validated['number'])->first();
        } else {
            $newContact = Contact::create($validated);
        }

        Auth::user()->addContact($newContact->id);

        return back();
    }

}
