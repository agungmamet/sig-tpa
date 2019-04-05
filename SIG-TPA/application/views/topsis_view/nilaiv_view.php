<div class="row">
    <div class="col-xs-6">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Nilai Preferensi</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
			  <p>Nilai Tertinggi : <?php echo round($maksimal->max,4)?></p>
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Daerah</th>
                          <th>Nilai V</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>
                          <td><?php echo $row->nama_daerah?></td>  
                          <td><?php echo round($row->v,4)?></td>
                      </tr>
                          <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<style>
  table th{
    text-align: center;
  }
  table td{
    text-align: center;
  }
</style>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
