<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1><?= $title ?></h1>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Default box -->
      
      <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $sub_title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?= base_url('admin/').$controller.'/update/'.$data_edit->kategori_id ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                      <label for="" class="col-sm-4 control-label">Nama Kategori:</label>
                      <input type="text" class="form-control" id="" name="kategori_nama" value="<?= $data_edit->kategori_nama ?>" placeholder="Masukkan Nama"  required>
                      <input type="hidden" class="form-control" id="" name="kategori_id"  value="<?= $data_edit->kategori_id ?>"  required>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                     <a href="<?= base_url('admin/'.$controller) ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                  </div>
                  
               
              </form>
            </div>
            
          </div>
        
      </div>
    
      <!-- /.card -->
   </section>
   <!-- /.content -->
</div>
<?php $this->load->view('admin/layouts/js'); ?>

 
<script type="text/javascript">
  $(document).ready( function() {

    $('.select2').select2();
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });
</script>