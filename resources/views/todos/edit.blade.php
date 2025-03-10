<x-layout>
  <x-slot:title>
    Redige : {{ $todo->content }}
  </x-slot:title>
  
  <h1>Redige {{ $todo->content }}</h1>
  
  <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
    
    <label>
      Saturs:
      <input name="content" value="{{ old('content', $todo->content) }}">
    </label>
    @error("content")
      <p>{{ $message }}</p>
    @enderror
    
    <label>
      Izpildīts:
      <input name="completed" type="hidden" value="0">
      <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}
    </label>
    @error("completed")
      <p style="color: red;">{{ $message }}</p>
    @enderror

    <button type="submit">Saglabāt</button>
  </form>
</x-layout>
