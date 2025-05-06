<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Form Tambah Admin</h2>
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

    <form method="POST" action="{{ route ('admin.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="text" name="nomor_hp" placeholder="Masukan nomor hp" value="{{ old('nomor_hp') }}"><br>
        <input type="text" name="alamat" placeholder="Masukan alamat" value="{{ old('alamat') }}"><br>
        <select name="role" id="">
            <option value="">select role</option>
            <option value="super_admin">Super Admin</option>
            <option value="kasir">Kasir</option>
        </select>
        <button type="submit">Keep</button><br>
        <a href="/user/create"><button type="button">Halaman add user</button></a>
        <a href="/contact/create"><button type="button">Halaman add Contact</button></a>
    </form>
</body>
</html>