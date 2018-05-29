@if ( is_singular() ){
  @php($footer_custom = get_post_meta($post->ID, 'footer_custom', true))
  @if ( $footer_custom )
    {!! $footer_custom !!}
  @endif
@endif
