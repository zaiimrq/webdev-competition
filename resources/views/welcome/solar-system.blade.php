<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            overflow: hidden;
        }
        body{
            font-family: 'Acme', sans-serif;
        }
        .bg-video {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;
        }
        .card{
            background-color: white;
            transition: transform 0.3 ease, box-shadow 0.3 ease;
            bottom: 0;
            right: 0;
            letter-spacing: 1px;
            border-radius: 3rem;
        }
        #button{
            font-size: 1em;
            color: white;
            background-color: #38073b;
            border-radius: 20px;
        }
        img#astro{
            position: absolute;
            width: 7rem;
            top: -0.5rem;
            left: -1.5rem;
            z-index: 1000;
        }
        </style>
</head>
<body>
    <audio src="img/space.mp3" style="display: none;" autoplay controls>
        Your browser does not support the audio element.
     </audio>
    <video autoplay muted loop class="bg-video">
         <source src="img/tatasurya.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
    </video>
    <div data-aos="fade-right">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card col-5 py-4 text-center ">
                <div class="card-title px-5">
                    <h5>Sebelum kita menjelajah lebih dalam, Astro akan menjelaskan terlebih dahulu. <br>Apa itu Tata Surya?</h5>
                </div>
                <img src="img/png/astro2.png" id="astro">
                <div class="card-body px-5">
                    <strong>Tata Surya merupakan kumpulan benda langit yang terdiri atas sebuah bintang yang disebut Matahari dan semua objek yang terikat oleh gaya gravitasinya.</strong><br><br> Objek-objek tersebut termasuk delapan buah planet yang sudah diketahui dengan orbit berbentuk elips, lima planet kerdil/katai, 173 satelit alami yang telah diidentifikasi, dan jutaan benda langit (meteor, asteroid, komet) lainnya.
                    <br>
                    <a href="tatasurya2.html"><button class="btn btn-dark mt-3 w-50" id="button">Lanjutkan Petualangan!</button></a>
                </div>
            </div>
    </div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
