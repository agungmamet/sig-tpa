<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Pembagi</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Pembagi Kelerengan</th>
                          <th>Pembagi Lahan</th>
                          <th>Pembagi Rawan Longsor</th>
                          <th>Pembagi Curah Hujan</th>
                          <th>Pembagi Hidrogeologi</th>
                          <th>Pembagi Jenis Tanah</th>
                          <th>Pembagi Rawan Banjir</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($pembagi as $row){?>
                      <tr>  
                          <td><?php echo round($row->pemkel,4)?></td>
                          <td><?php echo round($row->pemlah,4)?></td>
                          <td><?php echo round($row->pemlong,4)?></td>
                          <td><?php echo round($row->pemcur,4)?></td>
                          <td><?php echo round($row->pemhid,4)?></td>
                          <td><?php echo round($row->pemjen,4)?></td>
                          <td><?php echo round($row->pemban,4)?></td>
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

<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Ternormalisasi</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Daerah</th>
                          <th>Kelerengan</th>
                          <th>Penggunaan Lahan</th>
                          <th>Rawan Longsor</th>
                          <th>Curah Hujan</th>
                          <th>Hidrogeologi</th>
                          <th>Jenis Tanah</th>
                          <th>Rawan Banjir</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($normalisasi as $row){?>
                      <tr>
                          <td><?php echo $row->nama_daerah?></td>  
                          <td><?php echo round($row->kelerengan,4)?></td>
                          <td><?php echo round($row->lahan,4)?></td>
                          <td><?php echo round($row->longsor,4)?></td>
                          <td><?php echo round($row->hujan,4)?></td>
                          <td><?php echo round($row->hidrogeologi,4)?></td>
                          <td><?php echo round($row->tanah,4)?></td>
                          <td><?php echo round($row->banjir,4)?></td>
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