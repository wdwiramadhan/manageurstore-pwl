<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 text-dark">Dashboard</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Konsumen</span>
              <span class="info-box-number"><?= $data['totalkonsumen'] ?></span>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-fw fa-box"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Produk</span>
              <span class="info-box-number"><?= $data['totalbarang'] ?></span>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
