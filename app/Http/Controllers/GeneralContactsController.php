<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Project;

class GeneralContactsController extends Controller
{

    public function index()
    {

        $contacts = [
            "09000000001",
            "09000000002",
            "09000000003",
            "09000000004",
            "09000000005",
            "09000000006",
            "09000000007",
            "09000000008",
            "09000000009",
            "09000000010",
            "09000000011",
            "09000000012",
            "09000000013",
            "09000000014",
            "09000000015"
        ];

        return view('general-contacts', [
            'contacts'=>$contacts,
        ]);
    }

}
