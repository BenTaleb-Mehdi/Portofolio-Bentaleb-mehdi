<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function show($id)
    {
        $projects = $this->projectService->getProjects();
        $project = collect($projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        return view('pages.project-detail', ['project' => $project]);
    }
}
