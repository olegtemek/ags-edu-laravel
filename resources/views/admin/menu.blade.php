<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminPanel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="{{route('admin.vacancy.index')}}" class="nav-link {{(request()->is('admin/vacancy*')) ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Вакансии</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.question.index')}}" class="nav-link {{(request()->is('admin/question*')) ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Вопрос-ответ</p>
          </a>
        </li>
        

        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-search"></i>
          <p>
          Новости
          <i class="fas fa-angle-left right"></i>
          </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{route('admin.news.index', 1)}}" class="nav-link {{(request()->is('admin/news/1*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>Общие</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.news.index', 2)}}" class="nav-link {{(request()->is('admin/news/2*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>мл. школа</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.news.index', 3)}}" class="nav-link {{(request()->is('admin/news/3*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>ст. школа</p>
              </a>
            </li>
            
          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-search"></i>
          <p>
          Мероприятия
          <i class="fas fa-angle-left right"></i>
          </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{route('admin.event.index', 1)}}" class="nav-link {{(request()->is('admin/event/1*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>Общие</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.event.index', 2)}}" class="nav-link {{(request()->is('admin/event/2*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>мл.школа</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.event.index', 3)}}" class="nav-link {{(request()->is('admin/event/3*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>ст.школа</p>
              </a>
            </li>
            
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-search"></i>
          <p>
          Преподаватели
          <i class="fas fa-angle-left right"></i>
          </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{route('admin.educator.index', 1)}}" class="nav-link {{(request()->is('admin/educator/1*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>Администрация</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.educator.index', 2)}}" class="nav-link {{(request()->is('admin/educator/2*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>Мл.школа</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.educator.index', 3)}}" class="nav-link {{(request()->is('admin/educator/3*')) ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>ст.школа</p>
              </a>
            </li>
            
          </ul>
        </li>
        
        
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>