<form action="/storenewsletter" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Veuillez vous inscrire pour recevoir la newsletter</h1>
    <input type="email" name="email" id="" value="blabla@gmail.com">
    <button type="submit">S'inscrire</button>
    </form>
