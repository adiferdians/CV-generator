<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Akun</title>
</head>
<body>
    <h1>Konfirmasi Akun Anda</h1>

    <p>
        Terima kasih telah mendaftar di situs kami. Silakan klik tautan di bawah ini untuk mengaktifkan akun Anda:
    </p>

    <a href="{{ url('/confirm/' . $token) }}">Aktifkan Akun</a>

    <p>
        Jika Anda tidak dapat mengklik tautan, salin dan tempel tautan ke bilah alamat browser Anda.
    </p>

    <p>
        Terima kasih,
        <br>
        Tim {{ config('app.name') }}
    </p>
</body>
</html>
