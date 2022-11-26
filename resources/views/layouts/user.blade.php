<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('./assets/img/netflix-icon.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./css/user.css')}}">

    <title>Netflix-clone</title>
</head>

<body>
    <header>
        <img src="{{ asset('./assets/img/logo.png')}}" alt="Logo">
    </header>

    @yield('contenido')
</body>

</html>