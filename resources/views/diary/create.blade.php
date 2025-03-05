<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot dienasgramatas ierakstu</h1>
<form method="POST" action="/diaries">
@csrf
<label>Virsraksts: </label>
  <input name="title" />
  @error("title")
  <p>{{ $message }}</p>
  @enderror
  <label>Saturs: </label>
  <textarea name="body">
  @error("body")
  <p>{{ $message }}</p>
  @enderror
  </textarea>
  <label>Datums :</label>
  <input type ="date" name="date" />
  @error("date")
  <p>{{ $message }}</p>
  @enderror
  <button>Saglabāt</button>
</form>
</x-layout>