<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: block;

                justify-content: center;
                align-items: center;
                height: 100vh;
                width: 100%;
                background-color: grey;
            }
             .navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
            

            .isi {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 60px;


            }
            table {
                width: 50%;
                border-collapse: collapse;
                margin: 20px;
                background-color: white;
            }

            th,td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: left;
            }

            th {
                background-color: #4caf50;
                color: white;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            h2 {
                text-align: center;
            }
            button {
                display: flex;
                width: 100px;
                height: 30px;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="https://e7.pngegg.com/pngimages/779/61/png-clipart-logo-idea-cute-eagle-leaf-logo-thumbnail.png" alt="" width="30" height="24">
    <a class="navbar-brand" href="home.php">Buku Tamu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_akun.php">D. Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="lihat_guru.php">D. Buku Tamu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index1.php">Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="isi">
        <h2>DAFTAR KEADAAN GURU SMK SANTANA 2 CIBATU</h2>
        <table>
            <thead>
                <tr>
                    <th>Nomor</head>
                    <th>Nama</th>
                    <th>Nuptk</th>
                    <th>L/P</th>
                    <th>Tempat</th>
                    <th>Tanggal</th>
                    <th>Gelar</th>
                    <th>Sk Awal</th>
                    <th>Tmt</th>
                    <th>Jabatan</th>
                    <th>Prog.studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT*FROM tbguru";
                $query = mysqli_query ($koneksi, $sql);
                $no=1;

                while ($data=mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['nuptk'];?></td>
                        <td><?php echo $data['jeniskelamin'];?></td>
                        <td><?php echo $data['tempat'];?></td>
                        <td><?php echo $data['tanggal'];?></td>
                        <td><?php echo $data['gelar'];?></td>
                        <td><?php echo $data['skawal'];?></td>
                        <td><?php echo $data['tmt'];?></td>
                        <td><?php echo $data['jabatan'];?></td>
                        <td><?php echo $data['progstudi'];?></td>
                        <td>
                            <a href="hapus.php?id=<?php echo $data['no'];?>"
                            onclick="return confirm('Yakin Mau Hapus .?')">
                            <span class="text"></span>Hapus</Details> </span>
                </a>
                </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        <form method="post" action="index.php">
            <button type="submit">Tambah</button>
                </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>