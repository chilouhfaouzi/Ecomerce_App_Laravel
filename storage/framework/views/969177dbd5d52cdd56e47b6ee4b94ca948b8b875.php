
<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?php echo e($title); ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active"><?php echo e($title); ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
  </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?php if(session()->has('success')): ?>
              <div class="alert alert-success alert-dismissible show fade">
                  <?php echo e(session()->get('success')); ?>

                  <button type="button" class="close" data-dismiss="alert" area-labe="Close" role="alert">
                      <span area-hidden='true'>&times;</span>
                  </button> 
              </div>
          <?php endif; ?>
          <?php if(session()->has('danger')): ?>
              <div class="alert alert-danger alert-dismissible show fade">
                  <?php echo e(session()->get('danger')); ?>

                  <button type="button" class="close" data-dismiss="alert" area-labe="Close" role="alert">
                      <span area-hidden='true'>&times;</span>
                  </button> 
              </div>
          <?php endif; ?>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Liste of categories</h3>
                  <a href="<?php echo e(route('categorie.create')); ?> " class="btn btn-success float-right"><i class="fa fa-plus"></i>  Add a new category</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table  class="table  table-condensed ">
                    <thead>
                    <tr>
                      <th>#ID</th>
                      <th >Title</th>
                      <th class="justify-content-center d-flex" width="20%">Icon</th>
                      <th>Acion</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($category->id); ?> </td>
                              <td><?php echo e($category->name); ?> </td>
                              <td class=""><img src="<?php echo e(asset($category->image)); ?> " alt="<?php echo e($category->name); ?>" style="width: 100px"> </td>
                              <td width="25%">
                                <a href="<?php echo e(route('categorie.edit',$category->id)); ?>" class="badge badge-warning p-2"><i class="fa fa-edit"></i> Edit category</a>

                                
                               <form id="cat_delete" action="<?php echo e(route('categorie.destroy',$category->id)); ?>" method="post" class="form-inline ms-2" style="display: inline">
                                  <?php echo csrf_field(); ?>
                                  <button type="submit" class="badge badge-danger p-2" style="border: none"> <i class="fa fa-trash"></i>remove category</button>
                                  <?php echo method_field("DELETE"); ?>
                                </form>
                               </td>
                             
                              
                            </tr> 

                           

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
    
                    </tbody>
                   
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_ecomerce_project\resources\views/admin/categories/categories.blade.php ENDPATH**/ ?>