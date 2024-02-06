<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR KEADAAN GURU SMK SANTANA 2 CIBATU</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 5px;
      width: 300px;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 0px 0 5px;
    }

    input {
      width: 100%;
      padding: 5px;
      margin-bottom: 0px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
      padding: 5px;
      margin-bottom: 0px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 5px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>DAFTAR KEADAAN GURU SMK SANTANA 2 CIBATU</h2>
  <form action="simpan.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="nuptk">Nuptk:</label>
    <input type="text" id="nuptk" name="nuptk" required>

    <label for="jenisjelamin">JenisKelamin:</label>
    <input type="text" id="jeniskelamin" name="jeniskelamin" required>

    <label for="tempat">Tempat:</label>
    <input type="text" id="tempat" name="tempat" required>

    <label for="tanggal">Tanggal:</label>
    <input type="text" id="tanggal" name="tanggal" required>

    <label for="gelar">Gelar:</label>
    <input type="text" id="gelar" name="gelar" required>

    <label for="skawal">Sk Awal:</label>
    <input type="text" id="skawal" name="skawal" required>

    <label for="tmt">Tmt:</label>
    <input type="text" id="tmt" name="tmt" required>

    <label for="jabatan">Jabatan:</label>
    <input type="text" id="jabatan" name="jabatan" required>

    <label for="progstudi">Progstudi:</label>
    <input type="text" name="progstudi" rows="progstudi" required></textarea>

    <button type="submit">Kirim</button>
  </form>
</div>

</body>