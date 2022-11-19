
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <div class="col-sm-2 padding-10">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Buat Baru
                </button>
                <!-- <h3 class="card-title">Data Mahasiswa Aktif</h3> -->
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
        <form action="<?php echo base_url('mahasiswa/new') ?>" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">  
              <h4 class="modal-title">Tambah Baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
         
                <div class="card-body">
                  <div class="form-group">
                    <label for="i_name">Nama</label>
                    <input type="text" class="form-control" name="n_name" id="i_name" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="i_nim">NIM</label>
                    <input type="text" class="form-control" name="n_nim" id="i_nim" placeholder="Masukan NIM">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                        <select class="form-control" name="n_jurusan" id="i_jurusan">
                          <option value="SI">SI</option>
                          <option value="TI">TI</option>
                          <option value="MM">MM</option>                          
                        </select>
                  </div>
                  
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
          </form>
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
        <form action="<?php echo base_url('mahasiswa/edit') ?>" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">  
              <h4 class="modal-title">Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
         
                <div class="card-body">
                  <div class="form-group">
                    <label for="i_name">Nama</label>
                    <input type="text" class="form-control" name="n_name" id="i_name" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="i_nim">NIM</label>
                    <input type="text" class="form-control" name="n_nim" id="i_nim" placeholder="Masukan NIM">
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                        <select class="form-control" name="n_jurusan" id="i_jurusan">
                          <option value="SI">SI</option>
                          <option value="TI">TI</option>
                          <option value="MM">MM</option>                          
                        </select>
                  </div>
                  
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
          </form>
        </div>
        <!-- /.modal-dialog -->
      </div>

  <?php
    $var = base_url("");
  ?>
  <script>
    var phpVar = "<?php echo $var; ?>";
  </script>