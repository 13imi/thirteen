@extends('layouts.top')

@section('content')
  @unless(is_paged())
    @php(query_posts('tag=特集&showposts=6'))
    @if(have_posts())
      <div class="entry-list">
        <h3 class="section-title">特集記事</h3>
        <div class="row">
          @while (have_posts()) @php(the_post())
            @include('partials.feautured-cards')
          @endwhile
        </div>
      </div>
    @endif
    @php(wp_reset_query())
  @endunless


  <div class="entry-list">
    @unless(is_paged())
      <h3 class="section-title">新着記事</h3>
      @else
      <h3 class="section-title">記事一覧</h3>
    @endunless

    <div class="row">
      @while(have_posts()) @php(the_post())
        @include('partials.cards')
      @endwhile
    </div>
  </div>
@endsection
