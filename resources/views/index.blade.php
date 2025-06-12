<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="hero-navbar">
        <nav class="navbar navbar-expand-lg fixed-top scroll-reveal">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Convert<span style="color:#9ba9ff;">PDF</span></a>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav me-3">
                        <li class="nav-item">
                            <a class="nav-link underline-hover" href="{{ url('/upload') }}"
                                style="color: #fff;">Convert</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="hero scroll-reveal">
            <div class="container">
                <h1>Convert Foto Anda<br>Menjadi Sebuah PDF</h1>
                <p class="mt-3">Ubah foto Anda menjadi file PDF hanya dengan satu kali klik, kapan pun dan di mana pun
                    Anda berada, tanpa perlu instalasi aplikasi tambahan atau proses yang rumit.</p>
                <div class="mt-4">
                    <a href="{{ url('/upload') }}" class="btnlight">Convert</a>
                    <a href="{{ url('/') }}" class="btn-blur">Coming Soon&nbsp; →</a>
                </div>
            </div>
        </section>
    </div>

    <section id="sect-1" class="scroll-reveal">
        <div class="row">
            <div class="col">
                <h1>Kompresi Cepat & Efektif</h1>
                <p>Kompres PDF Anda dengan mudah dan instan. Cukup seret dan jatuhkan file Anda; alat kami akan
                    mengoptimalkannya secara otomatis dalam hitungan detik. Nikmati kinerja online yang lancar di semua
                    platform utama: Mac, Windows, Linux, iOS, dan Android. Tidak perlu penyesuaian manual.</p>
            </div>
        </div>
    </section>

    <section id="sect-2" class="scroll-reveal">
        <div class="row">
            <div class="col">
                <img src="{{ asset('img/8767132-Photoroom.png') }}" alt="" width="400px">
            </div>
            <div class="col">
                <h1>Convert Secara Gratis</h1>
                <p>Kamu bisa convert file JPG ke PDF secara gratis tanpa perlu mendaftar. Layanan ini memungkinkan
                    pengguna untuk convert dokumen ke format lain secara gratis dan cepat.</p>
            </div>
        </div>
    </section>

    <section id="sect-3" class="scroll-reveal">
        <div class="row">
            <div class="col">
                <h3>Cara Convert Ke PDF</h3>
                <ol>
                    <li>Buka Halaman Convert</li>
                    <li>Drag Atau Drop File JPG, JPEG, Atau PNG</li>
                    <li>Download File PDF Anda</li>
                    <li>Buka File Untuk Memastikan Jika Ada Foto Yang Tidak Sesuai</li>
                </ol>
            </div>
            <div class="col">
                <img src="{{ asset('img/20943418-Photoroom.png') }}" alt="" width="500px">
            </div>
        </div>
    </section>

    <section class="scroll-reveal">
        <footer>
            <div class="row">
                <div class="col">
                    <a id="label" class="navbar-brand text-white" href="#">Convert<span
                            style="color:#9ba9ff;">PDF</span></a>
                </div>
                <div class="col">
                    <h3>Support Kita</h3>
                    <a href="#">Saweria</a>
                    <a href="#">Patreon</a>
                    <a href="#">Buy Me a Coffee</a>
                    <a href="#">Trakteer</a>
                </div>
                <div class="col">
                    <h3>Contact Kita</h3>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Youtube</a>
                    <a href="#">Gmail</a>
                </div>
            </div>
        </footer>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
