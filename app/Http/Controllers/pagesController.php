<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function getAbout()
    {
        return view('pages.about');
    }

    public function getEquipment()
    {
        return view('pages.equipment');
    }

    public function getNews()
    {
        return view('pages.news');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getNewCustomer()
    {
        return view('pages.newCustomer');
    }

    public function getPortal()
    {
        return view('pages.portal');
    }
}