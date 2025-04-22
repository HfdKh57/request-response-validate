<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Contact</title>
</head>
<body>
    <h2>Form Tambah Contact</h2>
    @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route ('contact.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="number" name="nomor_hp" placeholder="Masukan nomor hp" value="{{ old('nomor_hp') }}"><br>
        <input type="text" name="message" placeholder="Masukan pesan"><br>
        <button type="submit">Keep</button>
        <a href="/user/create"><button type="button">Halaman add user</button></a>
    </form>
</body>
</html>