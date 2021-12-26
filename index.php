<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web UAS Infomatika UIN</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Pengelolaan Data Nilai Mahasiswa Jurusan Teknik
                            Informatika</h3>
                        <div class="float-right">
                            <a href="input.php" class="btn btn-success btn-flat btn-sm" title="Tambah">Tambah</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="data" class="table table-bordered table-striped" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tugas</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>Nilai Akhir</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function() {
            $('#data').DataTable({
                serverSide: true,
                processing: true,
                type: "GET",
                dataSrc: "",
                searchDelay: 1000,
                ajax: {
                    url: 'http://localhost/ppaw-uas/getdata.php',
                },
                columnDefs: [{
                    targets: -1,
                    defaultContent: "<button class='btn btn-success btn-xs tblEdit'>Edit / Delete</button>"
                }]
            });
        });
    </script>
</body>

</html>