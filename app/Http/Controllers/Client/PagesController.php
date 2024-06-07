<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        $user = User::first();
        return view('client.pages.home', ['user' => $user]);
    }

    public function about()
    {
        $user = User::first();
        return view('client.pages.about', ['user' => $user]);
    }

    public function resume()
    {
        $user = User::first();
        return view('client.pages.resume', ['user' => $user]);
    }

    public function portfolio()
    {
        $user = User::first();
        return view('client.pages.portfolio', ['user' => $user]);
    }

    public function portfolio_details(Portfolio $portfolio)
    {
        return view('client.pages.portfolio-details', ['portfolio' => $portfolio]);
    }

    public function contact()
    {
        $user = User::first();
        return view('client.pages.contact', ['user' => $user]);
    }

    public function contact_create()
    {
        dd(request());
        return redirect('contact');
    }
}
