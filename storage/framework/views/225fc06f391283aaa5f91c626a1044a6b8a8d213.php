
<?php $__env->startSection('title','Categories'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
 <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Categories/Edit</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
  </section>

  <section class="content mx-auto">
    <div class="container">
      <div class="row justify-content-center ">
        <!-- left column -->
        <div class="col-md-7">
          <?php if(session()->has('success')): ?>
              <div class="alert alert-success alert-dismissible show fade">
                  <?php echo e(session()->get('success')); ?>

                  <button type="button" class="close" data-dismiss="alert" area-labe="Close" role="alert">
                    <span area-hidden='true'>&times;</span>
                </button> 
              </div>
         <?php endif; ?>
          <!-- general form elements -->
          <div class="card ">
            <div class="card-header">
            <h3 class="card-title">Edit Category: <strong> <?php echo e($category->name); ?> </strong></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="<?php echo e(route('categorie.update',$category->id)); ?>  " enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="card-body">
                    
                <div class="form-group justify-content-center d-flex">
                  <img src="<?php echo e(asset($category->image)); ?>" alt="avatar" class="fluid rounded-3" style="width: 150px">
              </div>
              <div class="text-center"><label for="avatar" style=""><h4><?php echo e($category->name); ?> </h4></label></div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleInputEmail1" placeholder="Title" name="title" value="<?php echo e($category->name); ?>">
                  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description :</label>
                  <div class="mb-3">
                      <textarea class="textarea <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" 
                                name="description">
                                <?php echo e($category->description); ?>

                      </textarea>
                      <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>      
               </div>
                 
                <div class="form-group">
                  <label for="File">Category Icon:</label>
                   <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="formFile" name="image">
                   <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn  btn-block" style="background-color: #ff4500;color:white">edit Category</button>
              </div>
              <?php echo method_field('PUT'); ?>

            </form>
          </div>
        </div>
    </div>
  </div>
</div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_ecomerce_project\resources\views/admin/categories/add-edit-categorie.blade.php ENDPATH**/ ?>