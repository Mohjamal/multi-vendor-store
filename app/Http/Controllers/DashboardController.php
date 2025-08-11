<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Actions
    public function index()
    {
        $title = 'Store';

        // Return response: view, json, redirect, file
        return view('dashboard.index', [
            'user' => 'Mohammedjamal Elkhatib',
            'title' => $title
        ]);
    }
}
