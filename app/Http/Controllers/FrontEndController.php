<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Image;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skills;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $abouts = About::all();
        $contacts = Contact::all();
        $portfolios = Portfolio::all();
        $facts = Fact::all();
        $services = Service::all();
        $skills = Skills::all();
        $images = Image::all();

        return view("welcome", compact("abouts", "contacts", "portfolios", "facts", "services", "skills", "images" ));
    }
}
