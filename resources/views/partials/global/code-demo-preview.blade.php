<section class="code-demo-preview spacer column-center">
  <div class="inner-container card">
    <div class="card-header">
      <a href="{{$demo_link['url']}}" class="clickable-link"></a>
      <i class="fas fa-code icon"></i>
      <h3 class="title">Want to check out some code demos?</h3>

      <p class="description">Check out code samples written in JavaScript, React, Node, and more </p>
    </div>

    <div class="demo-container layout-three-columns">
      @foreach($demo_loop->posts as $key=>$post)
        @if($key <= 2)
          @include('partials.demo-card')
        @endif
      @endforeach
    </div>

    <a href="{{$demo_link['url']}}" class="view-all">
      <i class="fas fa-angle-right"></i>
      View all {{count($demo_loop->posts)}} code samples
    </a>
  </div>
</section>