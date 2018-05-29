@if ( is_singular() )
  @php($head_custom = get_post_meta($post->ID, 'head_custom', true))
  @if ( $head_custom )
    {!! $head_custom !!}
  @endif
@endif
