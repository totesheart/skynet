<?php if($setting->isresume == 1): ?>
<!-- Resume Area Start -->
<div id="eduandex" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title ">
                    <h2><?php echo e($setting->resume_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row skill-area" id="statisticsSection">

            <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($scategory->skills_type == 'line'): ?>
                    <div class="col-lg-6 skill-area-line">
                        <div class="skill-box ">
                            <h4 class="title">
                                <?php echo e($scategory->name); ?>

                            </h4>
                            <div class="skill-list">
                                <?php $__currentLoopData = $scategory->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-skill">
                                        <div class="label">
                                            <span><?php echo e($skill->name); ?></span>
                                            <span><?php echo e($skill->level); ?><?php echo e(__('%')); ?></span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                 role="progressbar" aria-valuenow="<?php echo e($skill->level); ?>"
                                                 aria-valuemin="0" aria-valuemax="100"
                                                 style="width: <?php echo e($skill->level); ?>%"></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-lg-6 skill-area-circle">
                        <div class="skill-box ">
                            <h4 class="title">
                                <?php echo e($scategory->name); ?>

                            </h4>
                            <div class="skill-list">
                                <?php $__currentLoopData = $scategory->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-skill">
                                        <div class="progress-circle position" data-percent="<?php echo e($skill->level); ?>"
                                             data-duration="1000"
                                             data-color="#e9ecef, <?php echo e($setting->base_color); ?>"></div>
                                        <div class="label mt-1 d-block text-center">
                                            <span><?php echo e($skill->name); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 skill-area-circle">
                <div class="skill-box ">
                    <h4 class="title">
                        <?php echo e($setting->knowledge); ?>

                    </h4>
                    <div class="skill-list">
                        <ul class="single-list-ul">
                            <?php $__currentLoopData = $knowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $knowledge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <p><?php echo e($knowledge->content); ?></p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="edu-box ">
                    <h2 class="title"><?php echo e($setting->education_title); ?></h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="education-list">
                                <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-education">
                                        <h4 class="collage-name">
                                            <?php echo e($education->school); ?>

                                        </h4>
                                        <p class="degree"><?php echo e($education->field); ?><span class="year"><?php echo e($education->from_date); ?>  - <?php echo e(empty($education->date_to) ? 'Present' : $education->date_to); ?></span>
                                        </p>
                                        <div class="description">
                                            <p>
                                                <?php echo e($education->description); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="edu-box ">
                    <h2 class="title"><?php echo e($setting->experince_title); ?></h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="education-list">
                                <?php $__currentLoopData = $experinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experince): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-education">
                                        <h4 class="collage-name">
                                            <?php echo e($experince->company); ?>

                                        </h4>
                                        <p class="degree"><?php echo e($experince->field); ?> <span class="year"><?php echo e($experince->from_date); ?> - <?php echo e(empty($experince->date_to) ? 'Present' : $experince->date_to); ?></span>
                                        </p>
                                        <div class="description">
                                            <p>
                                                <?php echo e($experince->description); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($setting->isresumedownload == 1): ?>
        <div class="row download-cv-area">
            <div class="col-lg-12 text-center">
                <a href="<?php echo e(asset('assets/front/file/'.$abouts->resume)); ?>" class="mybtn mybtn-bg "
                   download><span><?php echo e(__('Download Resume')); ?></span></a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Resume Area End -->
<?php endif; ?><?php /**PATH C:\laragon\www\liveporichoy\core\resources\views/front/partials/section-partials/resume.blade.php ENDPATH**/ ?>