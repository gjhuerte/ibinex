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
        return view('base.contact-us');
    }

    public function getAboutPage()
    {
        return view('base.about');
    }

    public function getPricingPage()
    {
        return view('base.pricing');
    }

    public function getSecurityPage()
    {
        return view('base.security');
    }

    public function getServicesPage()
    {
        return view('base.services');
    }

    public function getWhyIbinexPage()
    {
        return view('base.why-ibinex');
    }
}
