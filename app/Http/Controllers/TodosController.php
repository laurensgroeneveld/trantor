<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::query()
            ->whereNull('resolved_at')
            ->get();

        return Inertia::render('Todos/Index', [
            'todos' => $todos,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => ['required', 'max:255'],
            'deadline' => ['required', 'date'],
        ]);

        Todo::create($request->only(['description', 'deadline']));

        session()->flash('message', 'Nieuwe todo opgeslagen!');

        return redirect()->route('todos.index');
    }

    public function done()
    {
        $todos = Todo::query()
            ->whereNotNull('resolved_at')
            ->get();

        return Inertia::render('Todos/Done', [
            'todos' => $todos,
        ]);
    }
}
