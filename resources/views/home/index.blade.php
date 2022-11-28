<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.0 Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
    <body>
        <div class="bg"></div>
        <ul class="wrapper">
            <li class="icon icono">
                <span class="tooltip">Blog</span>
                <a href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    <img src="/imagen/icons/blog.png">
                </a>
            </li>
            <li class="icon icono">
                <span class="tooltip">Contacto</span>
                <a href="{{ route('email.index') }}" :active="request()->routeIs('email.index')">
                    <img src="/imagen/icons/contacto.png">
                </a>
            </li>
            <li class="icon icono">
                <span class="tooltip">Caballos</span>
                <a href="{{ route('horses.index') }}" :active="request()->routeIs('horses.index')">
                    <img src="/imagen/icons/horse.png">
                </a>
            </li>
            <li class="icon icono">
                <span class="tooltip">Usuarios</span>
                <a href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                    <img src="/imagen/icons/user.png">
                </a>
            </li>
            <li class="icon icono">
                <span class="tooltip">Vacunas</span>
                <a href="{{ route('vacunas.index') }}" :active="request()->routeIs('vacunas.index')">
                    <img src="/imagen/icons/vacuna.png">
                </a>
            </li>
        </ul>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    *:focus,
    *:active {
        outline: none !important;
        -webkit-tap-highlight-color: transparent;
    }

    html, body {
        display: grid;
        height: 100%;
        width: 100%;
        font-family: "Poppins", sans-serif;
        place-items: center;
        background-image: url("/imagen/ranch_bg.jpg");
    }

    .wrapper {
        display: inline-flex;
        list-style: none;
    }

    .wrapper .icon {
        position: relative;
        background: #adada1;
        border-radius: 50%;
        padding: 15px;
        margin: 10px;
        width: 50px;
        height: 50px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .tooltip {
        position: absolute;
        top: 0;
        font-size: 14px;
        background: #ffffff;
        color: #ffffff;
        padding: 5px 8px;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .tooltip::before {
        position: absolute;
        content: "";
        height: 8px;
        width: 8px;
        background: #ffffff;
        bottom: -3px;
        left: 50%;
        transform: translate(-50%) rotate(45deg);
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .icon:hover .tooltip {
        top: -45px;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    .wrapper .icon:hover span, .wrapper .icon:hover .tooltip {
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
    }

    .wrapper .icono:hover, .wrapper .icono:hover .tooltip, .wrapper .icono:hover .tooltip::before {
        background: #333333;
        color: #ffffff;
    }
</style>
