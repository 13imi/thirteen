@extends('layouts.top')

@section('content')
  <div class="entry-list">
    <h3 class="section-title">新着記事</h3>
    <div class="row">
      @while(have_posts()) @php(the_post())
        @include('partials.cards')
      @endwhile
    </div>
  </div>
@endsection
