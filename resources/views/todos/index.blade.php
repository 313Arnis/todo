<x-layout>
@foreach ($todos as $todo)
<li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
  @endforeach
  </x-layout>