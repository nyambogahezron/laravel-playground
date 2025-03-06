<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job has been posted successfully. <br>
</p>

<p>
    <a href="{{url('/jobs/' . $job->id)}}">
        View your job
    </a>
</p>