
<x-layout>
  <x-slot:title>
  {{ $diary->title  }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <a href="/diaries/{{ $diary->id }}/edit">Edit Diary</a>
  <form method="POST" action="/diaries/{{ $diary->id }}">
    @csrf
    @method('DELETE')
    
    <button type="submit">Delete</button>
  </form>
</x-layout>