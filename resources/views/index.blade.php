<div>
    Hello I'm a Blade Template
</div>

<ul>    
    @forelse ($tasks as $task)
        <li>
            <a href="{{route('tasks.show', ['id' => $task->id])}}">
                {{ $task->title }}
            </a>
        </li>
    @empty
        There are not tasks
    @endforelse
</ul>