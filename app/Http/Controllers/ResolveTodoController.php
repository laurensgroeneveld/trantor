<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class ResolveTodoController extends Controller
{
    public function __invoke(Request $request, Todo $todo)
    {
        $this->validate($request, [
            'comment' => ['nullable', 'max:255'],
        ]);

        $todo->comment = $request->input('comment');
        $todo->resolved_at = now();
        $todo->save();

        session()->flash('message', 'Todo afgerond!');

        return redirect()->route('todos.index');
    }
}
