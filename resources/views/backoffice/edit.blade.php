<form action="/{{ $articles->id }}/update" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="titre" value="{{ $articles->titre }}" id="">
    <input type="text" name="text" value="{{ $articles->text }}" id="">
    {{-- <input type="number" name="user_id" value="0=membre, 1 pour admin"id=""> --}}
    <button type="submit">Update</button>
</form>
