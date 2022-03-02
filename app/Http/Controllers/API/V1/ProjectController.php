<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return ProjectResource::collection(Project::all());
    }
}