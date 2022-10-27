@extends('admin.main')


@section('title')
Вакансии
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.vacancy.create')}}" class="btn btn-success">Создать вакансию</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все вакансии</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($vacancies as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->description}}</td>
              <td>
                <a href="{{route('admin.vacancy.edit', $post->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.vacancy.destroy', $post->id)}}" method="post">
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