<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\AboutTitre;
use App\Models\Contact;
use App\Models\Cta;
use App\Models\endFutur;
use App\Models\Faq;
use App\Models\Header;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Titre;
use Database\Seeders\CtaSeeder;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $dbTitre = Titre::all();
        $dbTitreAbout = AboutTitre::all();
        $dbInfoAbout = AboutInfo::all();
        $dbHeader = Header::all();
        $dbNavbar = Navbar::all();
        $dbEndFutur = endFutur::all();
        $dbCta = Cta::all();
        $dbService = Service::all();
        $dbPortfolio = Portfolio::all();
        $dbFaq = Faq::all();
        // $dbContact = Contact::all();
        return view('welcome', compact('dbTitre', 'dbTitreAbout', 'dbInfoAbout','dbHeader','dbNavbar','dbEndFutur','dbCta','dbService','dbPortfolio','dbFaq',));
    }
    
}
