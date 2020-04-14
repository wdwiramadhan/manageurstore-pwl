<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Barang</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Barang">Barang</a></li>
            <li class="breadcrumb-item active">Tambah</li>
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
                <h5>Detail Barang</h5>
              </div>
              <div class="col-md-6">
                <a href="<?= BASEURL ?>/Barang" class="btn btn-primary btn-sm float-right">Kembali</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL ?>/Barang/store" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="kode">Kode Barang</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="id" id="kode" placeholder="Kode barang">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="nama">Nama Barang</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama barang">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="satuan">Satuan</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Example: buah, cm, inch">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="harga">Harga Jual</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga jual">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="harga_beli">Harga Beli</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="harga_beli" id="harga_beli" placeholder="Harga beli">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="stock">Stock</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="stock_min">Stock  min</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="stock_min" id="stock_min" placeholder="Stock min">
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