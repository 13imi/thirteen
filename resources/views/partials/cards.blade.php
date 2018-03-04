<div class="col-md-4">
  <a href="{{ get_permalink() }}">
  <div class="card">
    <img class="card-img-top" src="{{ the_post_thumbnail_url( 'large' ) }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ get_the_title() }}</h5>
      <span class="card-category"></span>
      <p class="card-text"><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
      </p>
    </div>
  </div>
  </a>
</div>
