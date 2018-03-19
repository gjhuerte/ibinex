<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getContactUsPage()
    {
        return view('base.contact-us')
            ->with('title', 'Contact Us');
    }

    public function getAboutPage()
    {
        return view('base.about-us')
            ->with('title', 'About Us');
    }

    public function getPricingPage()
    {
        return view('base.pricing')
            ->with('title', 'Pricing');
    }

    public function getSecurityPage()
    {
        return view('base.security')
            ->with('title', 'Security');
    }

    public function getServicesPage()
    {
        return view('base.services')
            ->with('title', 'Custodian Services');
    }

    public function getWhyIbinexPage()
    {
        return view('base.why-ibinex')
            ->with('title', 'Why Ibinex');
    }
}
