<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['shares' => Share::paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function share()
    {
        return view('share');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'desc' => 'nullable',
        ]);
        try {
            $validated['user_id'] = Auth::id();
            Share::create($validated);
            return redirect()->route('home');
        } catch (Exception $e) {
        }
        return back()->withInput();
    }
}
