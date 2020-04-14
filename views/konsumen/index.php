<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 text-dark">Konsumen</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item active">Konsumen</li>
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
                  <h5>List Konsumen</h5>
                </div>
                <div class="col-md-6">
                  <a href="<?= BASEURL ?>/Konsumen/create" class="btn btn-primary btn-sm float-right"><i class="fas fa-fw fa-plus mr-1"></i>Tambah</a>
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
                    <th scope="col">No. HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach($data['konsumen'] as $konsumen): ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $konsumen['id'] ?></td>
                    <td><?= $konsumen['nama'] ?></td>
                    <td><?= $konsumen['phone'] ?></td>
                    <td><?= $konsumen['email'] ?></td>
                    <td><?= $konsumen['alamat'] ?></td>
                    <td><?= $konsumen['kode_pos'] ?></td>
                    <td><?= $konsumen['kota'] ?></td>
                    <td>
                      <a href="<?= BASEURL?>/Konsumen/edit/<?= $konsumen['id'] ?>" class="btn btn-warning btn-sm text-white"><i class="far fa-fw fa-edit"></i></a>
                      <a href="<?= BASEURL?>/Konsumen/delete/<?= $konsumen['id'] ?>" class="btn btn-danger btn-sm "><i class="far fa-fw fa-trash-alt"></i></a>
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
