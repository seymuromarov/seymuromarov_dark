<div class="columns">
    @foreach($projects as $project)
        <div class="column is-4 project">
            <a><img src="/storage/{{$project->image}}" alt="Project image"></a>
            <div class="desc">
                <a> <h3 class="secondary-color"> {{$project->title}}</h3></a>
                <p>{{$project->header}}</p>
            </div>
        </div>
    @endforeach
</div>
{{ $projects->render() }}
