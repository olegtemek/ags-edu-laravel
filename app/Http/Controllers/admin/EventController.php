<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $news = Event::where('section', $id)->get();
        $section = $id;
        $data['title_main'] = 'мероприятие';
        $data['title_second'] = 'мероприятия';
        return view('admin.post.index', compact('news', 'section', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $section = $id;
        $data['title_main'] = 'мероприятие';
        $data['title_second'] = 'мероприятия';
        return view('admin.post.create', compact('section', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        Event::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'title_kz' => $request->title_kz,
            'description' => $request->description,
            'description_kz' => $request->description_kz,
            'description_en' => $request->description_en,
            'image' => $request->feature_image,
            'seo_description' => $request->seo_description,
            'seo_description_en' => $request->seo_description_en,
            'seo_description_kz' => $request->seo_description_kz,
            'seo_title' => $request->seo_title,
            'seo_title_kz' => $request->seo_title_kz,
            'seo_title_en' => $request->seo_title_en,
            'section' => $request->section_id,
            'slug' => Str::slug($request->title),
            'title_video' => $request->title_video,
            'title_video_en' => $request->title_video_en,
            'title_video_kz' => $request->title_video_kz,
            'video' => $request->video,
        ]);


        return redirect()->route('admin.event.index', $request->section_id)->with('message', 'Мероприятие было добавленно');
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
        $post = Event::find($id);
        $data['title_main'] = 'мероприятие';
        $data['title_second'] = 'мероприятия';
        return view('admin.post.edit', compact('post', 'data'));
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
        Event::find($id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'title_kz' => $request->title_kz,
            'description' => $request->description,
            'description_kz' => $request->description_kz,
            'description_en' => $request->description_en,
            'image' => $request->feature_image,
            'seo_description' => $request->seo_description,
            'seo_description_en' => $request->seo_description_en,
            'seo_description_kz' => $request->seo_description_kz,
            'seo_title' => $request->seo_title,
            'seo_title_kz' => $request->seo_title_kz,
            'seo_title_en' => $request->seo_title_en,
            'section' => $request->section_id,
            'slug' => Str::slug($request->title),
            'title_video' => $request->title_video,
            'title_video_en' => $request->title_video_en,
            'title_video_kz' => $request->title_video_kz,
            'video' => $request->video,
        ]);
        return redirect()->route('admin.event.index', $request->section_id)->with('message', 'Меропритяе было изменено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Event::find($id);
        Event::destroy($post->id);
        return redirect()->route('admin.event.index', $post->section)->with('message', 'Мероприятие было удаленно');
    }
}
