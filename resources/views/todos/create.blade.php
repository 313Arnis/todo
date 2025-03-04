<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot ierakstu</h1>
<form method="POST" action="/todos">
@csrf
  <input name="content" />
  @error("content")
  <p>{{ $message }}</p>
  @enderror
  <button>Saglabāt</button>
</form>
</x-layout>