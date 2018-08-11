<!doctype html>
<html @php(language_attributes())>
         @include('partials.head')
  <body @php(body_class())>
         @include('partials.gtm')
         @php(do_action('get_header'))
         @if(is_front_page())
         @include('partials.header-top')
         @else
         @include('partials.header')
         @endif
    <div class="wrap container" role="document">
      <div class="content">
        <div class="row">
          @if(is_single())
            <div class="breadcrumbs col-md-12" typeof="BreadcrumbList" vocab="https://schema.org/">
              <i class="fas fa-folder-open"></i>
              <?php if(function_exists('bcn_display'))
              {
              bcn_display();
              }?>
            </div>
          @endif

          <main class="main col-md-12">
            @yield('content')
            <div class="pagination-area">
              <?php wp_pagination(); ?>
            </div>
          </main>
        </div>
      </div>
      <div class="push"></div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
