@extends('layouts.top')

@section('content')
  <div class="entry-list">
    <h3 class="section-title">「{!! App::title() !!}」の記事一覧</h3>
    <div class="row">
      @while(have_posts()) @php(the_post())
        @include('partials.cards')
      @endwhile
    </div>
  </div>
@endsection
