<form action="/storearticle" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titre" value="Water" id="">
    <input type="text" name="text" value="Water is neccessary for living...." id="">
    {{-- <input type="number" name="user_id" value="0=membre, 1 pour admin"id=""> --}}
    <button type="submit">Ajouter</button>
</form>
