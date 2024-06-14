<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutPageTranslation;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\ContactPageTranslation;
use App\Models\EducationTranslation;
use App\Models\FooterPageTranslation;
use App\Models\HeaderPageTranslation;
use App\Models\HomePageTranslation;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\ResumePageTranslation;
use App\Models\User;
use App\Models\UserTranslation;
use App\Nova\PortfolioCategory;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{

    public function home()
    {
        $user_tr = UserTranslation::all()->where('language.short_name', App::getLocale())->first();
        $header_page = HeaderPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $home_page = HomePageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $footer = FooterPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        return view('client.pages.home', [
            'user_tr' => $user_tr,
            'languages' => Language::all(),
            'footer' => $footer,
            'home_page' => $home_page,
            'header_page' => $header_page,
        ]);
    }

    public function about()
    {
        $user_tr = UserTranslation::all()->where('language.short_name', App::getLocale())->first();
        $footer = FooterPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $header_page = HeaderPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $about_page = AboutPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        return view('client.pages.about', [
            'user_tr' => $user_tr,
            'languages' => Language::all(),
            'footer' => $footer,
            'about_page' => $about_page,
            'header_page' => $header_page,
        ]);
    }

    public function resume()
    {
        $user_tr = UserTranslation::all()->where('language.short_name', App::getLocale())->first();
        dd($user_tr -> user -> educations);
        $educations = $user_tr -> educations -> where('language.short_name', App::getLocale());
        $header_page = HeaderPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $resume_page = ResumePageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $footer = FooterPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        return view('client.pages.resume', [
            'user_tr' => $user_tr,
            'educations' => $educations,
            'languages' => Language::all(),
            'footer' => $footer,
            'header_page' => $header_page,
            'resume_page' => $resume_page,
        ]);
    }

    public function portfolio()
    {
        $user_tr = UserTranslation::all()->where('language.short_name', App::getLocale())->first();
        $header_page = HeaderPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $footer = FooterPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $categories = CategoryTranslation::all()->where('language.short_name', App::getLocale());

        // dd($categories);
        return view('client.pages.portfolio', [
            'user_tr' => $user_tr,
            'languages' => Language::all(),
            'categories' => $categories,
            'footer' => $footer,
            'header_page' => $header_page,
        ]);
    }

    public function portfolio_details(Portfolio $portfolio)
    {
        return view('client.pages.portfolio-details', ['portfolio' => $portfolio]);
    }

    public function contact()
    {
        $user_tr = UserTranslation::all()->where('language.short_name', App::getLocale())->first();
        $header_page = HeaderPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $footer = FooterPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        $contact = ContactPageTranslation::all()->where('language.short_name', App::getLocale())->first();
        return view('client.pages.contact', [
            'user_tr' => $user_tr,
            'languages' => Language::all(),
            'footer' => $footer,
            'contact' => $contact,
            'header_page' => $header_page,
        ]);
    }
}
