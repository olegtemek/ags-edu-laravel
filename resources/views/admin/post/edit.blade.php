@extends('admin.main')


@section('title')
Изменить {{$data['title_main']}}
@endsection

@section('content')


<div class="card-body row">
  
    @if ($data['title_second'] == 'мероприятия')
    <form method="POST" action="{{ route('admin.event.update', $post->id) }}">
        @else
        <form method="POST" action="{{ route('admin.news.update', $post->id) }}">
        @endif
    @csrf
    @method('PUT')
    <ul class="nav nav-tabs pb-2">
      <li class="active ml-2 mr-4"><a data-toggle="tab" href="#ru" class="nav-link"><img src="/store/icons/ru.png" alt="" class="icon-lang"></a></li>
      <li class="mr-4"><a data-toggle="tab" href="#en" class="nav-link"><img src="/store/icons/en.jpg" class="icon-lang" alt=""></a></li>
      <li class="mr-4"><a data-toggle="tab" href="#kz" class="nav-link"><img src="/store/icons/kz.png" class="icon-lang" alt=""></a></li>
      <li class="mr-4"><a data-toggle="tab" href="#video" class="nav-link"><img src="https://w7.pngwing.com/pngs/405/769/png-transparent-clapperboard-high-efficiency-video-coding-video-player-video-icon-logo-immersive-video-media-player.png" class="icon-lang" alt=""></a></li>
    </ul>

  <div class="tab-content">
    <div id="ru" class="tab-pane active">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Русская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
          
            <label>Заголовок на русском</label>
            @error('title')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title }}" class="form-control" name="title" placeholder="Заголовок на русском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Описание на русском</label>
            @error('description')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Описание на русском" class="form-control" name="description">{{ $post->description }}</textarea>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Seo title ru</label>
            <input type="text" placeholder="Seo title" class="form-control" name="seo_title" value="{{ $post->seo_title }}" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Seo description ru</label>
            <input type="text" placeholder="Seo description" class="form-control" name="seo_description" value="{{ $post->seo_description }}" />
          </div>
        </div>

      </div>
    </div>
    <div id="en" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Английская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
          
            <label>Заголовок на английском</label>
            @error('title_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_en }}" class="form-control" name="title_en" placeholder="Заголовок на английском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Описание на английском</label>
            @error('description_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Описание на английском" class="form-control" name="description_en">{{ $post->description_en }}</textarea>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Seo title en</label>
            <input type="text" placeholder="Seo title" class="form-control" name="seo_title_en" value="{{ $post->seo_title_en }}" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Seo description en</label>
            <input type="text" placeholder="Seo description" class="form-control" name="seo_description_en" value="{{ $post->seo_description_en }}" />
          </div>
        </div>
      </div>
    </div>
    <div id="kz" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Казахская версия</h4></div>
        <div class="col-sm-6">
          <div class="form-group">
          
            <label>Заголовок на казахском</label>
            @error('title_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_kz }}" class="form-control" name="title_kz" placeholder="Заголовок на казахском">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Описание на казахском</label>
            @error('description_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <textarea placeholder="Описание на казахском" class="form-control" name="description_kz">{{ $post->description_kz }}</textarea>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Seo title kz</label>
            <input type="text" placeholder="Seo title" class="form-control" name="seo_title_kz" value="{{ $post->seo_title_kz }}" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Seo description kz</label>
            <input type="text" placeholder="Seo description" class="form-control" name="seo_description_kz" value="{{ $post->seo_description_kz }}" />
          </div>
        </div>
      </div>
    </div>
    <div id="video" class="tab-pane fade">
      <div class="row col-sm-12 mt-4">
        <div class="col-sm-12 text-warning"><h4>Видео версия</h4></div>
        <div class="col-sm-4">
          <div class="form-group">
          
            <label>Заголовок на русском</label>
            @error('title_video')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_video }}" class="form-control" name="title_video" placeholder="Заголовок на казахском">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Заголовок на английском</label>
            @error('title_video_en')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_video_en }}" class="form-control" name="title_video_en" placeholder="Заголовок на английском">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Заголовок на казахском</label>
            @error('title_video_kz')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->title_video_kz }}" class="form-control" name="title_video_kz" placeholder="Заголовок на казахском">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Ссылка на видео из youtube</label>
            @error('video')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
            <input type="text" value="{{ $post->video }}" class="form-control" name="video" placeholder="Видео">
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row col-sm-12 mt-2">

      
      <div class="col-sm-4 mt-4">
        <div class="form-group">
          
            @error('feature_image')
          <span class="error text-danger">{{ $message }}</span>
          @enderror

          
          <div class="row col-sm">
            <label style="display: block; width:100%">Фотография {{$data['title_second']}}</label>
            <input type="text" id="feature_image" name="feature_image" value="{{ $post->image }}">
            <a href="" class="popup_selector btn btn-success" data-inputid="feature_image"><i class="fas fa-file"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <input type="hidden" value="{{$post->section}}" name="section_id">
        <button class="btn btn-success" type="submit">Добавить {{$data['title_main']}}</button>
      </div>    
    </div>
  </form>
</div>

@endsection

@section('js')
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'link,image,code,media',
    menu: {
      file: { title: 'File', items: 'none' },
      edit: { title: 'Edit', items: 'false' },
      view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
      insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
      format: { title: 'Format', items: 'bold italic underline strikethrough codeformat | formats blockformats fontformats fontsizes lineheight | forecolor backcolor | removeformat' },
      tools: { title: 'Tools', items: 'media |spellchecker spellcheckerlanguage | code wordcount' },
      table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
      help: { title: 'Help', items: 'help' }
    },
    
    toolbar_mode: 'floating',
    file_picker_callback : elFinderBrowser
  });
  function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         * 
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;
                
                // Make file info
                const info = file.name;
                
                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }
                
                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }
                
                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }
                
                dialogApi.close();
            }
        }
    });
}
</script>
@endsection