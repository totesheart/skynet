<aside class="main-sidebar elevation-4 main-sidebar elevation-4 sidebar-dark-primary">
    <!-- Sidebar -->
    <div class="sidebar pt-0 mt-0">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel d-flex">
          <div class="image">
            <img src="<?php echo e(asset('assets/front/img/'.$adminprofile->image)); ?>" class="elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo e(route('admin.editProfile')); ?>" class="d-block"><?php echo e($adminprofile->first_name); ?> <?php echo e($adminprofile->last_name); ?></a>
            <span class="text-white"><?php echo e(__('Admin')); ?></span>
          </div>
        </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php if(request()->path() == 'admin/dashboard'): ?> active <?php endif; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    <?php echo e(__('Dashboard')); ?>

                </p>
              </a>
            </li>
            <li class="nav-item has-treeview
              <?php if(request()->path() == 'admin/basicinfo'): ?> menu-open
              <?php elseif(request()->path() == 'admin/sectiontitle'): ?> menu-open
              <?php elseif(request()->path() == 'admin/seoinfo'): ?> menu-open
              <?php elseif(request()->path() == 'admin/gsettings'): ?> menu-open
              <?php elseif(request()->path() == 'admin/scripts'): ?> menu-open
              <?php elseif(request()->path() == 'admin/homeversion'): ?> menu-open
              <?php elseif(request()->path() == 'admin/themes'): ?> menu-open
              <?php elseif(request()->path() == 'admin/page-visibility'): ?> menu-open
              <?php elseif(request()->path() == 'admin/slinks'): ?> menu-open
              <?php elseif(request()->is('admin/slinks/edit/*')): ?> menu-open
              <?php endif; ?>">
              <a href="#" class="nav-link
                <?php if(request()->path() == 'admin/basicinfo'): ?> active
                <?php elseif(request()->path() == 'admin/sectiontitle'): ?> active
                <?php elseif(request()->path() == 'admin/seoinfo'): ?> active
                <?php elseif(request()->path() == 'admin/gsettings'): ?> active
                <?php elseif(request()->path() == 'admin/scripts'): ?> active
                <?php elseif(request()->path() == 'admin/homeversion'): ?> active
                <?php elseif(request()->path() == 'admin/themes'): ?> active
                <?php elseif(request()->path() == 'admin/page-visibility'): ?> active
                <?php elseif(request()->path() == 'admin/slinks'): ?> active
                <?php elseif(request()->is('admin/slinks/edit/*')): ?> active
                <?php endif; ?>">
                <i class="nav-icon fas fas fa-cog"></i>
                <p>
                    <?php echo e(__('Settings')); ?>

                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.basicinfo')); ?>" class="nav-link <?php if(request()->path() == 'admin/basicinfo'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Basic Settings')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.themes')); ?>" class="nav-link <?php if(request()->path() == 'admin/themes'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Site Themes')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.homeversion')); ?>" class="nav-link <?php if(request()->path() == 'admin/homeversion'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Home Version')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.slinks')); ?>" class="nav-link 
                  <?php if(request()->path() == 'admin/slinks'): ?> active 
                  <?php elseif(request()->is('admin/slinks/edit/*')): ?> active
                    <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Social Links')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.sectiontitle')); ?>" class="nav-link <?php if(request()->path() == 'admin/sectiontitle'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Section Title')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.scripts')); ?>" class="nav-link <?php if(request()->path() == 'admin/scripts'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Scripts')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.seoinfo')); ?>" class="nav-link <?php if(request()->path() == 'admin/seoinfo'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('SEO Information')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo e(route('admin.pagevisibility')); ?>" class="nav-link  <?php if(request()->path() == 'admin/page-visibility'): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Pages Visibility')); ?></p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview
            <?php if(request()->path() == 'admin/herosection/static'): ?> menu-open
            <?php elseif(request()->path() == 'admin/herosection/sliders'): ?> menu-open
            <?php elseif(request()->path() == 'admin/herosection/video'): ?> menu-open
            <?php endif; ?>">
            <a href="#" class="nav-link
              <?php if(request()->path() == 'admin/herosection/static'): ?> active
              <?php elseif(request()->path() == 'admin/herosection/sliders'): ?> active
              <?php elseif(request()->path() == 'admin/herosection/video'): ?> active
              <?php endif; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                <?php echo e(__('Home')); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo e(route('admin.herosection.static')); ?>" class="nav-link <?php if(request()->path() == 'admin/herosection/static'): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Static Version')); ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('admin.slider.index')); ?>" class="nav-link <?php if(request()->path() == 'admin/herosection/sliders'): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Slider Version')); ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('admin.herosection.video')); ?>" class="nav-link <?php if(request()->path() == 'admin/herosection/video'): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Video Version')); ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview 
            <?php if(request()->path() == 'admin/about'): ?> menu-open
            <?php elseif(request()->path() == 'admin/about/contact-info'): ?> menu-open
            <?php elseif(request()->path() == 'admin/about/funfact'): ?> menu-open
            <?php elseif(request()->is('admin/about/funfact/edit/*')): ?> menu-open
            <?php elseif(request()->is('admin/about/funfact/add')): ?> menu-open
            <?php endif; ?>">
            <a href="#" class="nav-link
              <?php if(request()->path() == 'admin/about'): ?> active
              <?php elseif(request()->path() == 'admin/about/contact-info'): ?> active
              <?php elseif(request()->path() == 'admin/about/funfact'): ?> active
              <?php elseif(request()->path() == 'admin/about/funfact/add'): ?> active
              <?php elseif(request()->is('admin/about/funfact/edit/*')): ?> active
              <?php endif; ?>">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                <?php echo e(__('About')); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('admin.about_me')); ?>" class="nav-link
                <?php if(request()->path() == 'admin/about'): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <?php if($setting->themes == 'agency'): ?>
                    <p><?php echo e(__('About')); ?></p>
                  <?php else: ?> 
                    <p><?php echo e(__('About Me')); ?></p>
                  <?php endif; ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('admin.contact_info')); ?>" class="nav-link
                <?php if(request()->path() == 'admin/about/contact-info'): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Contact Info')); ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('admin.funfact')); ?>" class="nav-link
                  <?php if(request()->path() == 'admin/about/funfact'): ?> active 
                  <?php elseif(request()->path() == 'admin/about/funfact/add'): ?> active
                  <?php elseif(request()->is('admin/about/funfact/edit/*')): ?> active 
                  <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Fun Facts')); ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.service')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/service'): ?> active 
            <?php elseif(request()->path() == 'admin/service/add'): ?> active 
            <?php elseif(request()->is('admin/service/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-magic"></i>
              <p>
                <?php echo e(__('Services')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.interest')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/interest'): ?> active 
            <?php elseif(request()->path() == 'admin/interest/add'): ?> active 
            <?php elseif(request()->is('admin/interest/edit/*')): ?> active 
            <?php endif; ?>">
            <i class="nav-icon fas fa-heart"></i>
              <p>
                <?php echo e(__('Interests')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.education')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/education'): ?> active 
            <?php elseif(request()->path() == 'admin/education/add'): ?> active 
            <?php elseif(request()->is('admin/education/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                <?php echo e(__('Education')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.experince')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/experince'): ?> active 
            <?php elseif(request()->path() == 'admin/experince/add'): ?> active 
            <?php elseif(request()->is('admin/experince/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                <?php echo e(__('Experinces')); ?>

              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview 
            <?php if(request()->path() == 'admin/skill'): ?> menu-open
            <?php elseif(request()->path() == 'admin/knowledge'): ?> menu-open
            <?php elseif(request()->path() == 'admin/skill/skill-category'): ?> menu-open
            <?php elseif(request()->path() == 'admin/skill/skill-category/add'): ?> menu-open
            <?php elseif(request()->path() == 'admin/skill/add'): ?> menu-open
            <?php elseif(request()->path() == 'admin/knowledge/add'): ?> menu-open
            <?php elseif(request()->is('admin/skill/skill-category/edit/*')): ?> menu-open
            <?php elseif(request()->is('admin/skill/edit/*')): ?> menu-open
            <?php elseif(request()->is('admin/knowledge/edit/*')): ?> menu-open
            <?php endif; ?>">
            <a href="#" class="nav-link
              <?php if(request()->path() == 'admin/skill'): ?> active
              <?php elseif(request()->path() == 'admin/knowledge'): ?> active
              <?php elseif(request()->path() == 'admin/skill/skill-category'): ?> active
              <?php elseif(request()->path() == 'admin/skill/skill-category/add'): ?> active
              <?php elseif(request()->path() == 'admin/skill/add'): ?> active
              <?php elseif(request()->path() == 'admin/knowledge/add'): ?> active
              <?php elseif(request()->is('admin/skill/skill-category/edit/*')): ?> active
              <?php elseif(request()->is('admin/skill/edit/*')): ?> active
              <?php elseif(request()->is('admin/knowledge/edit/*')): ?> active
              <?php endif; ?>">
              <i class="nav-icon fas fa-lightbulb"></i>
              <p>
                <?php echo e(__('Skills')); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('admin.scategory')); ?>" class="nav-link
                <?php if(request()->path() == 'admin/skill/skill-category'): ?> active 
                <?php elseif(request()->path() == 'admin/skill/skill-category/add'): ?> active
                <?php elseif(request()->is('admin/skill/skill-category/edit/*')): ?> active 
                <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Skills Categories')); ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('admin.skill')); ?>" class="nav-link
                <?php if(request()->path() == 'admin/skill'): ?> active 
                <?php elseif(request()->path() == 'admin/skill/add'): ?> active
                <?php elseif(request()->is('admin/skill/edit/*')): ?> active
                <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Skills')); ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('admin.knowledge')); ?>" class="nav-link
                <?php if(request()->path() == 'admin/knowledge'): ?> active 
                <?php elseif(request()->path() == 'admin/knowledge/add'): ?> active
                <?php elseif(request()->is('admin/knowledge/edit/*')): ?> active
                <?php endif; ?>">
                  <i class="nav-icon far fa-circle nav-icon"></i>
                  <p><?php echo e(__('Knowledge')); ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.portfolio')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/portfolio'): ?> active 
            <?php elseif(request()->path() == 'admin/portfolio/add'): ?> active 
            <?php elseif(request()->is('admin/portfolio/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                <?php echo e(__('Portfolio')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.pricing')); ?>" class="nav-link <?php if(request()->path() == 'admin/pricing-plan'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                <?php echo e(__('Pricing Plans')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.testimonial')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/testimonial'): ?> active 
            <?php elseif(request()->path() == 'admin/testimonial/add'): ?> active 
            <?php elseif(request()->is('admin/testimonial/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                <?php echo e(__('Testimonial')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.faq')); ?>" class="nav-link
            <?php if(request()->path() == 'admin/faq'): ?> active 
            <?php elseif(request()->path() == 'admin/faq/add'): ?> active 
            <?php elseif(request()->is('admin/faq/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                <?php echo e(__('FAQ')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item has-treeview 
              <?php if(request()->path() == 'admin/blog'): ?> menu-open
              <?php elseif(request()->path() == 'admin/blog/blog-category'): ?> menu-open
              <?php elseif(request()->path() == 'admin/blog/blog-category/add'): ?> menu-open
              <?php elseif(request()->path() == 'admin/blog/add'): ?> menu-open
              <?php elseif(request()->path() == 'admin/archives'): ?> menu-open
              <?php elseif(request()->path() == 'admin/archive/edit'): ?> menu-open
              <?php elseif(request()->path() == 'admin/archive/add'): ?> menu-open
              <?php elseif(request()->is('admin/blog/blog-category/edit/*')): ?> menu-open
              <?php elseif(request()->is('admin/blog/edit/*')): ?> menu-open
              <?php endif; ?>">
              <a href="#" class="nav-link 
                <?php if(request()->path() == 'admin/blog'): ?> active
                <?php elseif(request()->path() == 'admin/blog/blog-category'): ?> active
                <?php elseif(request()->path() == 'admin/blog/blog-category/add'): ?> active
                <?php elseif(request()->path() == 'admin/blog/add'): ?> active
                <?php elseif(request()->path() == 'admin/archives'): ?> active
                <?php elseif(request()->path() == 'admin/archive/edit'): ?> active
                <?php elseif(request()->path() == 'admin/archive/add'): ?> active
                <?php elseif(request()->is('admin/blog/blog-category/edit/*')): ?> active
                <?php elseif(request()->is('admin/blog/edit/*')): ?> active
                <?php endif; ?>">
                <i class="nav-icon fab fa-blogger-b"></i>
                <p>
                  <?php echo e(__('Blog')); ?>

                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.archive')); ?>" class="nav-link
                    <?php if(request()->path() == 'admin/archives'): ?> active 
                    <?php elseif(request()->path() == 'admin/archive/edit'): ?> active
                    <?php elseif(request()->path() == 'admin/archive/add'): ?> active
                    <?php endif; ?>" >
                    <i class="far fa-circle nav-icon"></i>
                      <p>
                        <?php echo e(__('Arcive')); ?>

                      </p>
                    </a>
                  </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.bcategory')); ?>" class="nav-link 
                  <?php if(request()->path() == 'admin/blog/blog-category'): ?> active 
                  <?php elseif(request()->path() == 'admin/blog/blog-category/add'): ?> active
                  <?php elseif(request()->is('admin/blog/blog-category/edit/*')): ?> active 
                  <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Blog Categories')); ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('admin.blog')); ?>" class="nav-link 
                  <?php if(request()->path() == 'admin/blog'): ?> active 
                  <?php elseif(request()->path() == 'admin/blog/add'): ?> active
                  <?php elseif(request()->is('admin/blog/edit/*')): ?> active
                  <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__('Blog')); ?></p>
                  </a>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.client')); ?>" class="nav-link 
            <?php if(request()->path() == 'admin/client'): ?> active 
            <?php elseif(request()->path() == 'admin/client/add'): ?> active 
            <?php elseif(request()->is('admin/client/edit/*')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                <?php echo e(__('Client')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.language.index')); ?>" class="nav-link 
            <?php if(request()->path() == 'admin/languages'): ?> active 
            <?php elseif(request()->path() == 'admin/language/add'): ?> active 
            <?php elseif(request()->is('admin/language/21/edit')): ?> active 
            <?php elseif(request()->is('admin/language/*/edit/keyword')): ?> active 
            <?php endif; ?>">
              <i class="nav-icon fas fa-language"></i>
              <p>
                <?php echo e(__('Language')); ?>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.footer.index')); ?>" class="nav-link <?php if(request()->path() == 'admin/footer'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-feather-alt"></i>
              <p>
                <?php echo e(__('Footer')); ?>

              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\laragon\www\porichoy\core\resources\views/admin/partials/side-navbar.blade.php ENDPATH**/ ?>