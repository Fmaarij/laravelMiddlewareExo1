<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
</head>

<body>
    <form action="/sendMail" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Subject : </label>
        <input type="text" name="sujet">
        <label for="">Email : </label>
        <input type="email" name="email">
        <label for="">Message : </label>
        <textarea type="text" name="msg"></textarea>

        <button type="submit">Send</button>
    </form>
</body>
</html>
