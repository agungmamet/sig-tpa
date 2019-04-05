<div class="row">
    <div class="col-xs-4">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Peringkat Terbaik</h3>
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

    <div class="col-xs-8">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Peta</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <iframe width="100%" height="520" frameborder="0" src="https://aufalmarom.carto.com/builder/82b1dc45-33f8-4777-bb4a-feab570fdbdf/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
              </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

