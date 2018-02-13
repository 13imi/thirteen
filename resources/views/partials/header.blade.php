<header class="banner">
  <div class="container-fluid">
    <div class="logo">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/icon_FBBLIFE.png')">
                  </a>
                  </div>
                  <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </nav>
    </div>
</header>
