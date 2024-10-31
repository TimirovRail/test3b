<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telephone;

class TelephoneController extends Controller
{
    public function index()
    {
        $telephones = Telephone::orderBy('surname', 'asc')->get();
        return view('contacts.index', compact('telephones'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required',
            'first_name' => 'required',
            'patronymic' => 'nullable',
        ]);

        Telephone::create($request->all());
        return redirect()->route('contacts.index');
    }

    public function show(Telephone $telephone)
    {
        return view('contacts.show', compact('telephone'));
    }
}

