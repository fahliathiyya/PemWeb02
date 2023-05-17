<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H2>Form Tambah Mobil</H2>
   <div class="card">
    <form action="/mobil/SimpanData" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Mobil</label> <br>
            <input type="text" name="nama_mobil" id="nama_mobil" required>
        </div>
    
        <div class="form-group">
            <label for="">Merk Mobil</label> <br>
            <input type="text" name="merk_mobil" id="merk_mobil" required>
        </div>
    
        <div class="form-group">
            <label for="">CC Mobil</label><br>
            <input type="text" name="cc" id="cc" required>
        </div>
        <div class="form-group">
            <button type="submit">Tambah Data</button>
        </div>
    </form>
   </div>
</body>
</html>