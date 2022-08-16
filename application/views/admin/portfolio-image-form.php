

<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 text-dark"><?= isset($data) ? '<i class="fas fa-edit"></i>&nbsp;&nbsp;Edit work' : '+&nbsp;&nbsp;Add work' ?></h4>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url('Admin/Portfolio')?>">Works</a></li>
                <li class="breadcrumb-item active"><?= isset($data) ? 'Edit' : 'Add new' ?> work</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form role="form" method="post" action="<?= isset($data) ? base_url('Edit/updatePortfolioImage/'.$data->id) : base_url('Add/savePortfolioImage') ?>" enctype="multipart/form-data">
                     
                        <div class="row mb-4">

                            <div class="form-group col-md-6">
                                <label for="portfolio_category_id" class="text-sm mr-2 pt-2">Category <span class="text-danger">*</span> :</label>
                                <select name="portfolio_category_id" id="portfolio_category_id" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    <?php foreach($category as $c){?>
                                        <option value="<?=$c->id?>" <?= isset($data) && $data->portfolio_category_id == $c->id ? 'selected' : '' ?> ><?=$c->category?></option>
                                    <?php }?>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text" class="text-sm mr-2 pt-2">Text <span class="text-danger">*</span> :</label>
                                <input type="text" value="<?= isset($data) ? $data->text: '' ?>" class="form-control" name="text" id="text" required>
                            </div>
                            <div class="form-group col-md-6">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="img" class="text-sm mr-2 pt-2">Image <?= isset($data) ? '' : '<span class="text-danger">*</span>' ?> :</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" accept=".png, .jpg, .jpeg, .gif, .bmp, .svg" name="img" <?= isset($data) ? '' : 'required' ?>>
                                    <label class="custom-file-label" for="img">Choose image</label>
                                </div>
                            </div>

                        </div>
                        <div class="row ml-1">
                            <a href="<?=base_url('Admin/PortfolioImg')?>" class="btn btn-secondary mr-3 col-md-2"><strong>x</strong> Cancel</a>
                            <button type="submit" class="btn btn-primary col-md-2"><?= isset($data) ? '<i class="fa fa-recycle"></i> Update' : '<strong>+ </strong> Submit' ?></button>
                        </div>
                    </form>
                
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

    $('#summernote').summernote({
        height: 300
    });

    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

</script>


