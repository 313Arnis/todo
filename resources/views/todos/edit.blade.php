<x-layout>
  <x-slot:title>
    Redige : {{ $todo->content }}
  </x-slot:title>
  
  <h1>Redige {{ $todo->content }}</h1>
  
  <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
    
    <label>
      <input name="content" value="{{ $todo->content }}">
    </label>
    <label>
  Izpildīts:
  <input name="completed" type="hidden" value="{{ $todo->completed }}">
  <input name="completed" type="checkbox" value="{{ $todo->completed }}">   
</label>
    <button type="submit">Saglabāt</button>
  </form>
</x-layout>
