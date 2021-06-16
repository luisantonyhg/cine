<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Yajra\Datatables\Datatables;

class TaskController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function getTasks()
    {
        $tasks = Task::select(['id','name','category','state']);

        return Datatables::of($tasks)

            ->make(true);
    }


}
