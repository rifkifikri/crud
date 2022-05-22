<!@php
    // use Illuminate\Database\Eloquent\Mode\Post;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Montserrat&family=Open+Sans:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>data Buku</title>
</head>
<body>
    <div class="container">
        <div class="head p-3 mb-2">
            <div class="row">
                <div class="col-2">
                    <a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                    
                </div>
                <div class="col-4">
                <form class="d-flex" action="" method="get">
                    <input class="form-control me-2" type="search" placeholder="Masukkan Judul Buku..." name ="keyword" aria-label="Search">
                    <button class="btn btn-outline-light" name = "search" type="submit">Search</button>
                </form>
                </div>
                <div class="col-5">
                    <a href="welcome.php"><button type="button" class="keluar btn btn-outline-danger">Log Out</button></a>
                </div>
            </div>
        </div>
        <a href="index.php">kembali</a>
        <button type="button" class="btn btn-info">Cetak </button>
        <table class="table table-hover table-bordered mt-5">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ISBN</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Cetakan </th>
            <th scope="col">Jumlah Halaman</th>
            <th scope="col">Gambar</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- <td>{{$post->isbn}}</td> --}}
            <?php
                // while($data =mysqli_fetch_array($identitas)){
                   
                //     echo "
                //         <tr>
                //         <th scope='row'> $no</th>
                //         <td>$data[isbn]</td>
                //         <td> $data[judul_buku]</td>
                //         <td> $data[pengarang]</td>
                //         <td> $data[penerbit]</td>
                //         <td> $data[tahun_terbit]</td>
                //         <td> $data[cetakan]</td>
                //         <td> $data[jumlah_halaman]</td>
                //          <td> <img src= 'gambar/$data[gambar]' style='width:50px; filter: blur(0px)'></td> 
                //         <td>
                //             <div class='row '>
                //                 <div class='col d-flex justify-content-center'>
                //                     <a href='ubah_data.php? isbn=$data[isbn]'><button type='button' class='btn btn-warning'>UPDATE</button></a>
                //                 </div>
                //                 <div class='col d-flex justify-content-center'>
                //                     <a href='delete.php? isbn=$data[isbn]'><button type='button' class='btn btn-danger'>DELETE</button></a>
                                    
                //                 </div>
                //             </div>
                            
                //         </td>
                //     </tr>
                //     ";
                //     //<img src= 'gambar/$data[gambar]' style='width:50px; filter: blur(0px)'></td> line 85 digunakan untuk menampilkan gambar yang telah tersimpan
                //     // di dalam folder gambar dan di panggil sesuai nama yang tersimpan di database
                //     $no++;
                // }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>