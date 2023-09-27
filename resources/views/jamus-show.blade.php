<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Jamu</title>
</head>
<body>

    @php
    $id = 1; // Ganti dengan nilai ID yang sesuai
    $jamu = App\Models\Jamu::find($id);
    @endphp

    <h1>Detail Jamu</h1>

    <div>
        <h2>{{ $jamu->nama }}</h2>
        <p>Manfaat: {{ $jamu->manfaat }}</p>
        <p>Harga: ${{ $jamu->harga }}</p>
        <img src="{{ asset('images/' . $jamu->gambar) }}" alt="Gambar Jamu">
    </div>

</body>
</html>

