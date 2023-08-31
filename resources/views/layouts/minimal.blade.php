<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    <div class="content">
      @include('partials.navbar', [
        'class' => $navbarClass ?? ''
      ])
      <main class="main">
        @yield('content')
      </main>
    </div>
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </body>
</html>