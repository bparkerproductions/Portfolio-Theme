@php 
  wp_enqueue_style('bp-fancybox-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
  wp_enqueue_script('bp-fancybox-js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
@endphp

@include('partials.project-head')
@include('partials.project-content')
@include('partials.global.code-demo-preview')
@include('partials.global.cta')