<div class="column-center spacer">
  <div class="inner-container entry-content">
    <!-- @include('partials.global.social-share') -->

    <article @php post_class() @endphp>
      <header>
        @include('partials/entry-meta', [
          'postID' => get_the_ID()
        ])

        <div class="image-container">
          {!! get_the_post_thumbnail() !!}
        </div>

        @include('partials/post-difficulty')

      </header>
      <div class="entry-content">
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
