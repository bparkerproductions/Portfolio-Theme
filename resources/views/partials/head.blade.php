<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="{{$robots_meta[0]}}" content="{{$robots_meta[1]}}"></meta>

  {{-- @if(strpos($_SERVER['HTTP_HOST'], 'localhost') === false) --}}
  <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105342014-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-105342014-1');
    </script> --}}
  {{-- @endif --}}
  @php wp_head() @endphp
</head>
