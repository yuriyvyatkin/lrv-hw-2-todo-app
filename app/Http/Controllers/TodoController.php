<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Faker\Factory;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('id','desc')->simplePaginate(5);

        return response(view('todo.index', ['todos' => $todos]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faker = Factory::create();
        $todo = new Todo;

        $todo->title = $faker->sentence(3);
        $todo->description = $faker->paragraph();
        $todo->updated_at = NULL;
        $todo->save();

        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Todo $todo)
    {
        return response(view('todo.show', ['todo' => $todo]));
    }
}
