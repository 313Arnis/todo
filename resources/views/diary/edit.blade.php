<x-layout>
  <x-slot:title>
    Redige : {{ $diary->title }}
  </x-slot:title>
  
  <h1>Redige {{ $diary->title }}</h1>
  
  <form method="POST" action="/diaries/{{ $diary->id }}">
    @csrf
    @method('PUT')
    
    <label>
      Saturs:
      <input name="title" value="{{ old('title', $diary->title) }}">
    </label>
    @error("title")
      <p style="color: red;">{{ $message }}</p>
    @enderror
    
    <label>
      Body:
      <textarea name="body">{{ old('body', $diary->body) }}</textarea>
    </label>
    @error("body")
      <p style="color: red;">{{ $message }}</p>
    @enderror

    <label>
      Date:
      <input type="date" name="date" value="{{ old('date', $diary->date) }}">
    </label>
    @error("date")
      <p style="color: red;">{{ $message }}</p>
    @enderror

    <button type="submit">Saglabāt</button>
  </form>
</x-layout>
