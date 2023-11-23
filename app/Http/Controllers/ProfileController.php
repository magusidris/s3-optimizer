<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'path'  => ['required', 'file', 'mimes:pdf']
        ]);

        $file = $request->file('path');

        $request->user()->documents()->create([
            'path' => $file->storeAs("files/{$request->user()->id}", "secret.{$file->extension()}", 's3-private')
        ]);

        return back();
    }
}
