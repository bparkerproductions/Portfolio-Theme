<div class="container pt-5 pt-sm-6">
  <h1 class="mb-3">{!! get_the_title() !!}</h1>

  @include('partials/entry-meta', [
    'postID' => get_the_ID(),
    'hide_date' => false
  ])

  <article @php post_class() @endphp>
    <div class="entry-content mt-4 col-12 col-xl-10">
      @php the_content() @endphp
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0,
      'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
  </article>
</div>

@php comments_template('', true); @endphp

@include('partials.related-posts', [
  'component_title' => 'More Posts'
])
