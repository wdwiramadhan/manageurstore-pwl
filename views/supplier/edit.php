<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Supplier</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Supplier">Supplier</a></li>
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
                <h5>Detail Supplier</h5>
              </div>
              <div class="col-md-6">
                <a href="<?= BASEURL ?>/Supplier" class="btn btn-primary btn-sm float-right">Kembali</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL ?>/Supplier/update/<?= $data['kd_sup'] ?>" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="kode">Kode</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="kd_sup" id="kode" value="<?= $data['kd_sup'] ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="nama">Nama</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="nm_sup" id="nama" value="<?= $data['nm_sup'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="alm_sup">Alamat</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="alm_sup" id="alm_sup" value="<?= $data['alm_sup'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="kota_sup">Kota</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="kota_sup" id="kota_sup" value="<?= $data['kota_sup'] ?>">
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
                  <div class="col-md-2">
                    <label for="telp_sup">Telephone</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="telp_sup" id="telp_sup" value="<?= $data['telp_sup'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="hp_sup">Handphone</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="hp_sup" id="hp_sup" value="<?= $data['hp_sup'] ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="email">Email</label>
                  </div>
                  <div class="col-md-10">
                    <input type="email" class="form-control" name="email_sup" id="email" value="<?= $data['email_sup'] ?>">
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