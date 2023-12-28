<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTaskRequest;
use App\Models\Projects;
use App\Models\Tasks;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $Projects = Projects::all();

        $Tasks = Tasks::with('project')->paginate(4);

        if ($request->ajax()) {
            $query = Tasks::query();
            $Search = $request->get('searchTaskValue');
            $Filter = $request->get('selectProjrctValue');
            $Search = str_replace(' ', '%', $Search);

            // pagination
            if (empty($Search) && $Filter === "Filtrer par projet") {
                return view('Tasks.Search', compact('Tasks', 'Projects'));
            }
            // search
            if ($Search) {
                $Tasks = $query->with('project')->where('name', 'like', '%' . $Search . '%')->paginate(4);
            }
            // filter
            if ($Filter !== "Filtrer par projet") {
                $Tasks = $query->where('project_id', $Filter)->paginate(3);
            }
            return view('Tasks.Search', compact('Tasks', 'Projects'))->render();
        }

        return view('Tasks.index', compact('Tasks', 'Projects'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Projects::all();
        return view('tasks.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormTaskRequest $request)
    {
        Tasks::create($request->validated());
        return redirect('/')->with('success', 'Tâche créée avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasks $tasks)
    {
        $projects = Projects::all();
        return view('tasks.edit', compact('tasks', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormTaskRequest $request, Tasks $tasks)
    {
        $tasks->update($request->validated());
        return redirect('/')->with('success', 'Tâche update avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $tasks)
    {
        $tasks->delete();
        return redirect('/')->with('success', 'Tâche delete avec succès !');
    }
}
