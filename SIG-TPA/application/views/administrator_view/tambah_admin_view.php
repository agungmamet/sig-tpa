<div class="row">
    <div class="col-md-6" style="opacity: 0.9;">
          <!-- Horizontal Form -->
      <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Administrator</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Admin/register" method="POST">
            <div class="box-body">
              <?php echo form_open(); ?>
              <?php echo validation_errors(); ?>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nama Administrator</label>
                  <div class="col-sm-8">
                    <input type="username" class="form-control" id="inputEmail3" name="namaadmin" placeholder="Nama Administrator" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="username" class="form-control" id="inputEmail3" name="username" placeholder="Username" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputEmail3" name="password" placeholder="Password" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Konfirm Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputEmail3" name="conf_pass" placeholder="Konfirm Password" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Hak Akses</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="hakakses" value="1"> Administrator
                  &nbsp;&nbsp;<input type="radio" name="hakakses" value="2"> Manager
                  &nbsp;&nbsp;<input type="radio" name="hakakses" value="3"> Client
              </div>

            </div>
              <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/pengaturan/Admin/index">
                  <button type="button" class="btn btn-default">Cancel</button>
                </a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
              <!-- /.box-footer -->
        </form>
      </div>
    </div>