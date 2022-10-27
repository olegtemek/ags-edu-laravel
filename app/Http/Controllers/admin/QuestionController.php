<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'answer' => 'required'
        ]);

        Question::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'title_kz' => $request->title_kz,
            'answer' => $request->answer,
            'answer_kz' => $request->answer_kz,
            'answer_en' => $request->answer_en,
        ]);
        return redirect()->route('admin.question.index')->with('message', 'Вопрос был добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Question::find($id);
        return view('admin.question.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'answer' => 'required'
        ]);

        Question::find($id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'title_kz' => $request->title_kz,
            'answer' => $request->answer,
            'answer_kz' => $request->answer_kz,
            'answer_en' => $request->answer_en,
        ]);
        return redirect()->route('admin.question.index')->with('message', 'Вопрос был изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect()->route('admin.question.index')->with('message', 'Вопрос был удален');
    }
}
