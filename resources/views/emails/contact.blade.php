<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>

</head>

<body>

    <div style="background-color: red; display:flex; padding:2.5rem;" class="container my-5 bg-danger">
        <div class="d-flex ">
            <div class="sujet">
                <h5  class="bg-danger">Suject : {{ $data['sujet'] }}</h5>
            </div>
            <div>
                <p>Message : {{ $data['msg'] }}</p>
            </div>
            <div>
                <p>Mail : {{ $data['email'] }}</p>
            </div>


        </div>

    </div>

</body>

</html>
