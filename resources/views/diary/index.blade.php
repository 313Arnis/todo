<x-layout>
@foreach ($diaries as $diary)
  <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
  @endforeach
  </x-layout>
