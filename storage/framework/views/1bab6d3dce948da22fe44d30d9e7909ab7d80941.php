
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
                  <h3 class="card-title">Users</h3>
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table  class="table table-hover ">
                    <thead class="">
                    <tr>
                      <th>#ID</th>
                      <th>avater</th>
                      <th>Full Name</th>
                      <th>Phone Number</th>
                      <th>country</th>
                      <th>city</th>
                      <th>Action</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                            <tr>
                              <td><?php echo e($user->id); ?> </td>
                              <?php if($user->avatar!=null): ?>
                              <td> <img src="<?php echo e(asset("images/admin_images/".$user->avatar)); ?>" alt="avatar" class="fluid rounded-circle" style="width: 60px">  </td>
                              <?php else: ?>
                              <td><img src="<?php echo e(asset("images/admin_images/avatar5.png")); ?>" alt="avatar" class="fluid rounded-circle" style="width: 60px">  </td>

                              <?php endif; ?>
                              <td> <strong><?php echo e($user->name); ?> </strong></td>
                              <td><?php echo e($user->tel); ?> </td>
                              <td><?php echo e($user->city); ?> </td>
                              <td><?php echo e($user->country); ?> </td>

                              <td width="25%">
                                <a href="<?php echo e(route('users.edit',$user->id)); ?>" class="badge badge-info p-2 "><i class="fa fa-edit"></i> Edit user</a>
                                
 
                                
                               <form id="user_delete" action="<?php echo e(route('users.destroy',$user->id)); ?>" method="post" class="form-inline ms-2" style="display: inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="badge badge-danger p-2" style="border: none"> <i class="fa fa-trash"></i>remove user</button>
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

<?php echo $__env->make('layouts.admin_layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_ecomerce_project\resources\views/admin/users/users.blade.php ENDPATH**/ ?>