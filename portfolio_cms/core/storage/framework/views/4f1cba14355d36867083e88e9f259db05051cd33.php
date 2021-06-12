<?php if($setting->isclient == 1): ?>
<!-- Client Area Start -->
<section class="myclient-area section-padding">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="section-title ">
                   <h2><?php echo e($setting->client_title); ?></h2>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="client-slider">
                   <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="item ">
                           <a href="<?php echo e($client->url); ?>" target="_blank">
                               <img src="<?php echo e(asset('assets/front/img/'.$client->image)); ?>" alt="">
                           </a>
                       </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- Client Area End -->
<?php endif; ?><?php /**PATH C:\laragon\www\porichoy\core\resources\views/front/partials/section-partials/client.blade.php ENDPATH**/ ?>