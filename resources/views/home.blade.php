<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Jamu Kita</title>

    <!-- Tambahkan tautan ke berkas CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">Jamu Kita</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jamus.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center mt-5" style="background-image: url('/path/to/your/background-image.jpg'); background-size: cover; padding: 100px;">
        <h1 style="color: #fff; text-shadow: 2px 2px 4px #000;">Selamat Datang di Jamu Kita</h1>
        <p style="color: #fff; text-shadow: 2px 2px 4px #000;">Kami Menyediakan Jamu Alami Berkualitas</p>
        <a href="{{ route('jamus.index') }}" class="btn btn-primary btn-lg">Lihat Produk</a>
    </div>

    <!-- Bahan-bahan Alami -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Bahan-bahan Alami yang Digunakan</h2>
    
        <!-- Carousel -->
        <div id="bahanCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bahanCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bahanCarousel" data-slide-to="1"></li>
                <!-- Tambahkan lebih banyak indikator jika ada lebih banyak gambar -->
            </ol>
    
            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/kunyit.jpg" alt="Kunyit" class="d-block mx-auto" style="max-width: 250px; max-height: 250px;">
                    <div class="carousel-caption">
                        <h3 class="text-white">Kunyit</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/temulawak.jpg" alt="Temulawak" class="d-block mx-auto" style="max-width: 250px; max-height: 250px;">
                    <div class="carousel-caption">
                        <h3 class="text-white">Temulawak</h3>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak slide jika ada lebih banyak gambar -->
            </div>
    
            <!-- Controls -->
            <a class="carousel-control-prev" href="#bahanCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#bahanCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    
    
            
    
            <!-- Controls -->
            <a class="carousel-control-prev" href="#bahanCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#bahanCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    

    <!-- Tambahkan tautan ke berkas JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
