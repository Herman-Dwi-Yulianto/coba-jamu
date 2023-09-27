<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Jamu</title>

    <!-- Tambahkan tautan ke berkas CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tautan ke Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
                        <a class="nav-link" href="#">Produk</a>
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
    @php
    $jamus = App\Models\Jamu::all();
    @endphp
    <div class="container">
        <h1>Daftar Jamu</h1>

        <div class="row">
            @foreach ($jamus as $jamu)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/' . $jamu->gambar) }}" class="card-img-top" alt="Gambar Jamu">
                        <div class="card-body">
                            <h5 class="card-title">{{ $jamu->nama }}</h5>
                            <p class="card-text">Manfaat: {{ $jamu->manfaat }}</p>
                            <p class="card-text">Harga: ${{ $jamu->harga }}</p>

                            <!-- Tombol Lihat Detail dengan Modal -->
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#detailModal"
                               data-nama="{{ $jamu->nama }}" data-manfaat="{{ $jamu->manfaat }}"
                               data-harga="{{ $jamu->harga }}" data-gambar="{{ asset('images/' . $jamu->gambar) }}">
                                <i class="fas fa-info-circle"></i> Lihat Detail
                            </a>

                            <!-- Tombol Tambah ke Keranjang dengan Ikon -->
                            <button class="btn btn-success" onclick="tambahKeKeranjang('{{ $jamu->nama }}', {{ $jamu->harga }})">
                                <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Produk Jamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Tempatkan detail produk di sini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan tautan ke berkas JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function tambahKeKeranjang(namaProduk, hargaProduk) {
            // Di sini, Anda dapat menambahkan logika untuk menambahkan produk ke keranjang
            // Misalnya, Anda dapat menggunakan JavaScript atau AJAX untuk mengirim data ke server.
            // Di sini hanya contoh, Anda perlu menggantinya sesuai dengan kebutuhan Anda.
            console.log('Produk ditambahkan ke keranjang:');
            console.log('Nama: ' + namaProduk);
            console.log('Harga: ' + hargaProduk);
        }
    </script>
</body>
</html>



