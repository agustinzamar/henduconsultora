<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hendu Consultora</title>
    <script src="https://kit.fontawesome.com/8fb0187cba.js" crossorigin="anonymous"></script>
</head>
<body>

    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        section{
            width: 100%;
            height: 100vh;
            background-color: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        section .img{
            width: 100%;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 5%;
        }

        section .img img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        section h1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 40px;
            color: #fff;
            text-transform: uppercase;
        }

    </style>
    
    <section>
        <div class="img">
            <img src="{{ asset('img/icon.png') }}" alt="">
        </div>
        <h1>Sitio en mantenimiento <span><i class="fas fa-wrench"></i></span></h1>
    </section>

</body>
</html>