<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Kategori </h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Nama Kategori </label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis">Deskripsi Ketagori </label>
                        <input type="text" class="form-control" placeholder="Leave a comment here" id="" >
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Input Kategori Buku" class="btn btn-primary" name="btnInputkategori">
                    </div>


                </form>
            </div>
        </div>
    </div>


    <table class="table">
        <tr>
            <td>#</td>
            <td>nama</td>
            <td colspan=2>Menu</td>
            
        </tr>
        @forelse ( $kat as $k )
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama }}</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @empty
          Data kosong
        @endforelse
    </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>