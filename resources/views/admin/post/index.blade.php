@extends('admin.main')


@section('title')
{{$data['title_second']}}
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        @if ($data['title_second'] == 'мероприятия')
        <a href="{{route('admin.event.create', $section)}}" class="btn btn-success">Создать {{$data['title_main']}}</a>
        @else
        <a href="{{route('admin.news.create', $section)}}" class="btn btn-success">Создать {{$data['title_main']}}</a>    
        @endif
        
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все {{$data['title_second']}}</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Заголовок {{$data['title_second']}}</th>
                <th>Фотография/Видео {{$data['title_second']}}</th>
                <td>Видео {{$data['title_main']}}</td>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($news as $post)
            <tr>
              <td>{{$post->video == null ? $post->title : $post->title_video}}</td>
              <td>
                @if ($post->video == null)
                <img src="/{{$post->image}}" style="width: 150px" alt="">    
                @else
                <iframe width="250" height="auto" src="https://www.youtube.com/embed/{{$post->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
              </td>
              <td>{{$post->video == null ? 'Текст' : 'Видео'}}</td>
              <td>
               
                @if ($data['title_second'] == 'мероприятия')
                <a href="{{route('admin.event.edit', $post->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.event.destroy', $post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
                @else
                <a href="{{route('admin.news.edit', $post->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.news.destroy', $post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        
        </div>
    </div>
  </div>
</section>

@endsection