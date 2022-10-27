@extends('admin.main')


@section('title')
Вопрос-ответ
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.question.create')}}" class="btn btn-success">Создать новый вопрос</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все вопросы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Вопрос</th>
                <th>Ответ</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($questions as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->answer}}</td>
              <td>
                <a href="{{route('admin.question.edit', $post->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.question.destroy', $post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
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