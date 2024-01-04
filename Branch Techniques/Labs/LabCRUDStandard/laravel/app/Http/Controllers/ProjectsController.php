<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectsRepository;

class ProjectsController extends Controller
{
    protected $projectRepository;
    public function __construct(ProjectsRepository $projectsRepository){
        $this->projectRepository = $projectsRepository; 
    }
    public function index(){
        $projectss = $this->projectRepository->index();
        dd($projectss);
        return view('Projects.index' , compact('projects'));
    }
}