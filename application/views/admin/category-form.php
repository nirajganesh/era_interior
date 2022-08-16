

<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="ml-2 text-dark"><?= isset($data) ? '<i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Category' : '+&nbsp;&nbsp;Add Category' ?></h4>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url('Admin/Portfolio')?>">Portfolio</a></li>
                <li class="breadcrumb-item active"><?= isset($data) ? 'Edit' : 'Add new' ?> Category</li>
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
                    <form role="form" method="post" action="<?= isset($data) ? base_url('Edit/updatePortfolio/'.$data->id) : base_url('Add/savePortfolio') ?>" enctype="multipart/form-data">
                     
                        <div class="row mb-4">
                            <div class="form-group col-md-6">
                                <label for="category" class="text-sm mr-2 pt-2">Category :</label>
                                <input type="text" value="<?= isset($data) ? $data->category : '' ?>" class="form-control" name="category" id="category" placeholder="Category of the work (5 to 8 words)">
                            </div>
                        </div>
                        <div class="row ml-1">
                            <a href="<?=base_url('Admin/Portfolio')?>" class="btn btn-secondary mr-3 col-md-2"><strong>x</strong> Cancel</a>
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

