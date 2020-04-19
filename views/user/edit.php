<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/User">Admin</a></li>
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
                <h5>Detail Admin</h5>
              </div>
              <div class="col-md-6">
                <a href="<?= BASEURL ?>/User" class="btn btn-primary btn-sm float-right">Kembali</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL ?>/User/update/<?= $data['id'] ?>" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="name">Nama</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="name" id="name" value="<?= $data['name'] ?>">
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
                    <label for="role">Role</label>
                  </div>
                  <div class="col-md-10">             
                    <select class="form-control" id="role" name="role">
                      <option>--- Select Role ---</option>
                      <option value="super admin" <?= $data['role'] == 'super admin' ? 'selected' : '' ?>>super admin</option>
                      <option value="admin"  <?= $data['role'] == 'admin' ? 'selected' : '' ?>>admin</option>
                    </select>
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