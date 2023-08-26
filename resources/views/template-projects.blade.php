{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  <section id="all-projects" class="header-transparent-dark bg-gray-400">
      @foreach(get_field('all_projects') as $id)
        @php $clientProjects = get_field('client_projects', $id); @endphp
        <article
          class="project py-5 d-flex align-items-center"
          data-bg-color="{{$clientProjects['color']}}"
        >
          <div class="container">

            @include('partials.components.project', [
              'project' => $clientProjects
            ])

            {{-- <section class="project__content pt-4">
              @php echo get_post_field('post_content', $id) @endphp
            </section> --}}
          </div>
        </article>
      @endforeach
  </section>

@endsection
