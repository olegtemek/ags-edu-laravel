@extends('admin.main')


@section('title')
Изменить вопрос
@endsection

@section('content')


<div class="card-body row">
  <form method="POST" action="{{ route('admin.question.update', $post->id) }}">
    @csrf
    @method('PUT')
    <ul class="nav nav-tabs pb-2">
      <li class="active ml-2 mr-4"><a data-toggle="tab" href="#ru" class="nav-link"><img src="/store/icons/ru.png" alt="" class="icon-lang"></a></li>
      <li class="mr-4"><a data-toggle="tab" href="#en" class="nav-link"><img src="/store/icons/en.jpg" class="icon-lang" alt=""></a></li>
      <li class="mr-4"><a data-toggle="tab" href="#kz" class="nav-link"><img src="/store/icons/kz.png" class="icon-lang" alt=""></a></li>
    </ul>

  <div class="tab-content">
    <div id="ru" class="tab-pane active">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Русская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Вопрос на русском</label>
            @error('title')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title }}" class="form-control" name="title" placeholder="Вопрос на русском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Ответ на русском</label>
            @error('answer')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Ответ на русском" class="form-control" name="answer">{{ $post->answer }}</textarea>
          </div>
        </div>
      </div>
    </div>
    <div id="en" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Английская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Вопрос на английском</label>
            @error('title_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_en }}" class="form-control" name="title_en" placeholder="Вопрос на казахском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Ответ на английском</label>
            @error('answer_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Ответ на английском" class="form-control" name="answer_en">{{ $post->answer_en }}</textarea>
          </div>
        </div>
      </div>
    </div>
    <div id="kz" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Казахская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Вопрос на казахском</label>
            @error('title_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_kz }}" class="form-control" name="title_kz" placeholder="Вопрос на казахском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Ответ на казахском</label>
            @error('answer_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Ответ на казахском" class="form-control" name="answer_kz">{{ $post->answer_kz }}</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Сохранить вопрос</button>
      </div>    
    </div>
  </form>
</div>

@endsection
