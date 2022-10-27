<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancy.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacancy.create');
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
            'description' => 'required',
            'req' => 'required',
        ]);

        Vacancy::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'title_kz' => $request->title_kz,
            'description' => $request->description,
            'description_en' => $request->description_en,
            'description_kz' => $request->description_kz,
            'req' => json_encode(preg_split('/[\n\r]+/', $request->req), JSON_UNESCAPED_UNICODE),
            'req_kz' => json_encode(preg_split('/[\n\r]+/', $request->req_kz), JSON_UNESCAPED_UNICODE),
            'req_en' => json_encode(preg_split('/[\n\r]+/', $request->req_en), JSON_UNESCAPED_UNICODE),
        ]);

        return redirect()->route('admin.vacancy.index')->with('message', 'Вакансия была добавлена');
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
        $post = Vacancy::find($id);
        return view('admin.vacancy.edit', compact('post'));
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
            'description' => 'required',
            'req' => 'required',
        ]);

        Vacancy::find($id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'title_kz' => $request->title_kz,
            'description' => $request->description,
            'description_en' => $request->description_en,
            'description_kz' => $request->description_kz,
            'req' => json_encode(preg_split('/[\n\r]+/', $request->req), JSON_UNESCAPED_UNICODE),
            'req_kz' => json_encode(preg_split('/[\n\r]+/', $request->req_kz), JSON_UNESCAPED_UNICODE),
            'req_en' => json_encode(preg_split('/[\n\r]+/', $request->req_en), JSON_UNESCAPED_UNICODE),
        ]);

        return redirect()->route('admin.vacancy.index')->with('message', 'Вакансия была изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vacancy::destroy($id);
        return redirect()->route('admin.vacancy.index')->with('message', 'Вакансия была удалена');
    }
}
