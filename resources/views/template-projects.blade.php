{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  <section id="all-projects" class="project-container header-dark bg-gray-400">
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

            @if ( $loop->index % 4 == 0 && $loop->index > 1)
              <section class="cta mt-5">
                <div class="card card-body bg-dark">
                  @include('partials.components.cta')
                </div>
              </section>
            @endif
          </div>

        </article>
      @endforeach
  </section>

@endsection
