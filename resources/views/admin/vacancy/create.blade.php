@extends('admin.main')


@section('title')
Создать вакансию
@endsection

@section('content')


<div class="card-body row">
  <form method="POST" action="{{ route('admin.vacancy.store') }}">
    @csrf
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
            <label>Название на русском</label>
            @error('title')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ old('title') }}" class="form-control" name="title" placeholder="Название на русском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Описание на русском <span style="display:block; color:gray;">Максимальная длинна 600 символов</span></label>
            @error('description')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Описание на русском" class="form-control" name="description">{{ old('description') }}</textarea>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Требования на русском <span style="display:block; color:gray;">Пустое поле не будет отображаться на сайте</span></label>
            @error('req')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea class="form-control" name="req" cols="8" rows="8">{{old('req')}}</textarea>
          </div>
        </div>
      </div>
    </div>
    <div id="en" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Английская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Название на английском</label>
            @error('title_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ old('title_en') }}" class="form-control" name="title_en" placeholder="Название на английском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Описание на английском <span style="display:block; color:gray;">Максимальная длинна 600 символов</span></label>
            @error('description_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Описание на английском" class="form-control" name="description_en">{{ old('description_en') }}</textarea>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Требования на английском <span style="display:block; color:gray;">Пустое поле не будет отображаться на сайте</span></label>
            @error('req_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea class="form-control" name="req_en" cols="8" rows="8">{{old('req_en')}}</textarea>
          </div>
        </div>
      </div>
    </div>
    <div id="kz" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Казахская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Название на казахском</label>
            @error('title_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ old('title_kz') }}" class="form-control" name="title_kz" placeholder="Название на казахском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Описание на казахском <span style="display:block; color:gray;">Максимальная длинна 600 символов</span></label>
            @error('description_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Описание на казахском" class="form-control" name="description_kz">{{ old('description_kz') }}</textarea>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Требования на казахском <span style="display:block; color:gray;">Пустое поле не будет отображаться на сайте</span></label>
            @error('req_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea class="form-control" name="req_kz" cols="8" rows="8">{{old('req_kz')}}</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить вакансию</button>
      </div>    
    </div>
  </form>
</div>

@endsection
