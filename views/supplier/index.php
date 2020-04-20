<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 text-dark">Supplier</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item active">Supplier</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <h5>List Supplier</h5>
                </div>
                <div class="col-md-6">
                  <a href="<?= BASEURL ?>/Supplier/create" class="btn btn-primary btn-sm float-right"><i class="fas fa-fw fa-plus mr-1"></i>Tambah</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <?php 
                if(isset($_SESSION['flash'])){
                  echo '<div class="alert alert-' .$_SESSION['flash']['tipe']. ' alert-dismissible fade show" role="alert">'.$_SESSION['flash']['pesan'].'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                unset($_SESSION['flash']);
              }
              ?>
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Hp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach($data['supplier'] as $supplier): ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $supplier['kd_sup'] ?></td>
                    <td><?= $supplier['nm_sup'] ?></td>
                    <td><?= $supplier['telp_sup'] ?></td>
                    <td><?= $supplier['hp_sup'] ?></td>
                    <td><?= $supplier['email_sup'] ?></td>
                    <td><?= $supplier['alm_sup'] ?></td>
                    <td><?= $supplier['kota_sup'] ?></td>
                    <td><?= $supplier['kode_pos'] ?></td>
                    <td>
                      <a href="<?= BASEURL?>/Supplier/edit/<?= $supplier['kd_sup'] ?>" class="btn btn-warning btn-sm text-white"><i class="far fa-fw fa-edit"></i></a>
                      <a href="<?= BASEURL?>/Supplier/delete/<?= $supplier['kd_sup'] ?>" class="btn btn-danger btn-sm "><i class="far fa-fw fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
