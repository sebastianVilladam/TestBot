<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Selected;

class SelectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('privateViews.questionSelect', ['list' => $questions]);
    }
}
