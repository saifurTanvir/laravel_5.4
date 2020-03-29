<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $title = "Wlcome to Laravel!";
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "About";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
