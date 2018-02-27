<header class="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="logo">
          <a class="brand" href="{{ home_url('/') }}">
            <img src="@asset('images/icon-13.png')">
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="nav-tabs-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-fill fbb-nav']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</div>
