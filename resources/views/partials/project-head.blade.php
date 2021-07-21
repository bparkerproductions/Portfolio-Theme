<section class="project-single-head spacer column-center">
  <div class="inner-container">
    <div class="image-container">
      <img src="{{$project_logo}}" alt="">
      <h6 class="caption">{{$project_duration}}</h6>
    </div>

    <div class="list-container">
      <h6 class="blue">Goals</h6>
      <ul>
        @foreach($project_goals as $goal)
          <li>{{$goal['item']}}</li>
        @endforeach
      </ul>
    </div>
  </div>
</section>