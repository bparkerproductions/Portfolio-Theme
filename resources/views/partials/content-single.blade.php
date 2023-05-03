<div class=" no-header-padding">
  <div class="container pt-4">
    <h1 class="mb-5">{!! get_the_title() !!}</h1>

    @include('partials/entry-meta', [
      'postID' => get_the_ID(),
      'hide_date' => false
    ])

    <div class="col-12 col-lg-5">
      <img src="{{get_the_post_thumbnail_url()}}" class="border shadow rounded w-100" />
    </div>

    <article @php post_class() @endphp>
      <div class="entry-content mt-4 col-12 col-xl-10">
        @php the_content() @endphp
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
    </article>

    @php comments_template('', true); @endphp

    @include('partials.global.related-posts', [
      'component_title' => 'More Posts'
    ])
  </div>
</div>
