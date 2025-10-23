<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\ProjectService;
use App\Services\TechnologiesService;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    protected $informations;
    protected $projects;

    public function __construct(DeveloperService $informations, ProjectService $projects)
    {
        $this->informations = $informations;
        $this->projects = $projects;
    }

    public function home()
    { 
        $info = $this->informations->getHerosection();
        $info['about'] = $this->informations->getAboutsection();
        $info['projects'] = $this->projects->getProjects();

        return view('home', [
            'info' => $info,
            'infoAbout' => $info['about'],
            'getProject' => $info['projects'],
        ]);
    }

    public function about()
    {
        $infoAbout = $this->informations->getAboutsection();
        return view('pages.about', compact('infoAbout')); 
    }

    public function projects()
    {
        $getProject = $this->projects->getProjects();
        return view('pages.project', compact('getProject')); 
    }

    public function footer()
    {
        $getsocialmedia = $this->informations->getSocialmediaContact();
        return view('partials.footer', compact('getsocialmedia'));
    }
}
