<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Kosmik</title>
    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body{
            background: linear-gradient(black, #38073b);
            font-family: 'Acme', sans-serif;
        }

        .paralax{
            position: relative;
            width: 100%;
            height: 200vh;
            padding: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .paralax::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top,#c4c2c3,transparent );
            z-index: 1000;
        }
        .paralax img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        #text{
            position: absolute;
            font-size: 4.8em;
            color: white;
            letter-spacing: 2px;
            text-align: center;
            text-shadow: 3px 3px 10px grey;
            bottom: -100px;
        }
        #text2{
            position: absolute;
            font-size: 3em;
            color: white;
            letter-spacing: 2px;
            text-align: center;
            text-shadow: 3px 3px 10px grey;
            bottom: -100px;
        }
        .paralax img#meteorid{
            z-index: 100;
        }

        #button{
            position: absolute;
            font-size: 1em;
            color: white;
            background-color: #38073b;
            padding: 10px 50px;
            border-radius: 20px;
            text-decoration: none;
        }
        .description {
            position: relative;
            padding:10em;
            background-color: #c4c2c3;
        }
        .description p {
            right: 0;
            font-size: 1.1em;
        }
        .description img{
            left: 0;
            width: 80%;
        }

    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="paralax">
        <img :src="Vite::asset('img/stars.png')" id="stars">
        <img :src="Vite::asset('img/meteorid.png')" id="meteorid">
        <img :src="Vite::asset('img/rocket.png')" id="rocket">
        <h1 id="text">Selamat Datang <br>di Kelas Kosmik!</h1>
    </div>
    <div class="description col-12 d-flex align-items-center justify-content-center">
        <div class="col-6">
            <div data-aos="zoom-in-right" data-aos-duration="1000">
                <img :src="Vite::asset('img/png/astro2.png')" id="astro">
            </div>
        </div>
        <div class="col-6">
            <div data-aos="zoom-in-left" data-aos-duration="1500">
                <h2>Bergabunglah dengan Astro dalam Petualangan Luar Angkasa! 🚀</h2><br>
                <p>Halo, Aku Astro!🌟<br> Bersama-sama, mari kita menjelajahi keajaiban tata surya! <br> Di sini, kamu akan menemukan dunia yang penuh dengan bintang, planet, dan misteri kosmik yang menunggu untuk diungkap!</p>
                <a href="halaman-utama.html" id="button">Ayo Mulai! 🚀</a>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
