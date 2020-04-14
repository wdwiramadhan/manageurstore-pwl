<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Konsumen</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Konsumen">Konsumen</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h5>Detail Konsumen</h5>
              </div>
              <div class="col-md-6">
                <a href="<?= BASEURL ?>/Konsumen" class="btn btn-primary btn-sm float-right">Kembali</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL ?>/Konsumen/update/<?= $data['id'] ?>" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="kode">Kode</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="id" id="kode" value="<?= $data['id'] ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="nama">Nama</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="phone">No. HP</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="phone" id="phone" value="<?= $data['phone'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="email">Email</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="email" id="email" value="<?= $data['email'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="alamat">Alamat</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $data['alamat'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="Kota">Kota</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="kota" id="Kota" value="<?= $data['kota'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="kode_pos">Kode Pos</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="kode_pos" id="kode_pos" value="<?= $data['kode_pos'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>