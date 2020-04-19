<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/Dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>/User">Admin</a></li>
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
                <h5>Detail Admin</h5>
              </div>
              <div class="col-md-6">
                <a href="<?= BASEURL ?>/User" class="btn btn-primary btn-sm float-right">Kembali</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL ?>/User/store" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="name">Nama</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="email">Email</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email aktif">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="password">Password</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="password" id="password" value="admin123">
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
                      <option value="super admin">super admin</option>
                      <option value="admin">admin</option>
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