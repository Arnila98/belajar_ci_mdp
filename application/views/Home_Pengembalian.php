<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/bootstrap.min.css">

    <title>Aplikasi Koperasi</title>
</head>

<body>
    <div class="p-2">
        <h1>Aplikasi Koperasi</h1>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah
            Data</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No Peminjaman</th>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Sisa Pengembalian</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Pengembalian ke</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <?php
            foreach($peminjaman as $a){
                ?>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
            </tbody>
        </table>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Form Data Pengembalian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url();?>pengembalian/tambah" method="POST">
                            <div class="form-group">
                                <label for="No_Peminjaman">No Peminjaman</label>
                                <input name="no_peminjaman" type="text" class="form-control" id="No_Peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="No">No</label>
                                <input name="no" type="text" class="form-control" id="No" placeholder="Masukkan Nomor">
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="Nama"
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="Sisa_Pengembalian">Sisa Pengembalian</label>
                                <input name="sisa_pengembalian" type="text" class="form-control" id="Sisa_Pengembalian"
                                    placeholder="Masukkan Sisa Pengembalian">
                            </div>
                            <div class="form-group">
                                <label for="Tanggal">Tanggal</label>
                                <input name="tanggal" type="date" class="form-control" id="Tanggal"
                                    placeholder="Masukkan Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="Pengembalian_Ke">Pengembalian Ke</label>
                                <input name="pengembalian_ke" type="text" class="form-control" id="Pengembalian_Ke"
                                    placeholder="Masukkan Pengembalian Ke">
                            </div>
                            <div class="form-group">
                                <label for="Jumlah">Jumlah</label>
                                <input name="jumlah" type="text" class="form-control" id="Jumlah"
                                    placeholder="Jumlah">
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets')?>/js/bootstrap.min.js"></script>
</body>

</html>