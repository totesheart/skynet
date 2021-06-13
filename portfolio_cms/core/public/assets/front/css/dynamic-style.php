<?php

header("Content-Type:text/css");

$color = $_GET['color']; // Change Your Color Form Here


if( isset( $_GET[ 'color' ] ) ) {
    $color = '#'.$_GET[ 'color' ];
}else{
  $color = "#4285f4";
}

?>


.custom-navbar.top-nav-collapse .logo a, 
.custom-navbar.top-nav-collapse .main-menu ul.navbar-nav li.active a, 
.welcome-text h1, 
.welcome-area .home-arrow a, 
.social-links a:hover, 
ul.work-list li.active, 
.modal-body h3, 
.project-list li a, 
.single-stat h2, 
.contact-form .form-group i.fa, 
.post-meta span:hover, 
.widget.category li a:hover, 
.widget.category li:before, 
.breadcroumb .active, 
.comment-reply-link, 
h4.about-heading span, 
h4.about-heading span, 
.footer p a,
#counterArea .counter_box span,
#counterArea .counter_box h2,
.breadcrumb-area .links li a:hover,
.mybtn-bg:hover,
.section-title h2::before,
.mybtn-bg:hover span,
.blog-details .blog-content .content .tag-social-link .social-links li a,
.mybtn-light span,
.footer .social-link ul li a,
.blog-aside .categori .categori-list li a:hover,
.blog-aside .recent-post-widget .post-list li .post .post-details .post-title:hover,
.blog-aside .archives .archives-list .single-category:hover a,
.header.style .nav-item .nav-link.active,
 .header.style .nav-item .nav-link:hover,
 .blog-details .blog-content .content .post-meta li a:hover,
 .blog-aside .categori .categori-list li:hover a,
 .blog-aside .categori .categori-list li.active a,
 .skill-area .skill-list  .single-list-ul li p::before,
 .single-accordion .accordion-header .title i,
 .counterArea .counter_box h2,
 .counterArea .counter_box span,
 #eduandex .education-list .single-education .degree,
 .info.service-category  .service-list li .service:hover,
 .info.service-category  .service-list li .service.active,
 .info.service-category  .service-list li .service.active i,
 .info.service-category  .service-list li .service:hover i,
 .cart-box .cart-details .newprice,
 .blogs .blog-box .blog-details .blog-title:hover,
 a.language-btn,
 .header .nav-item .nav-link.active,
.header .nav-item .nav-link:hover
.header .nav-item .nav-link:focus
{
     color: <?php echo $color; ?> !important;
}


.single-service .service-overlay ul,
.hover-content a, 
.testimonial-area .owl-dots div.active, 
.btn.btn-sent, 
.info-icon, 
.cta-area a,
.read-more-btn, 
.pagination ul li:hover a,
.pagination ul li.active a, 
.search-form button[type="submit"], 
.widget.tags a:hover, 
.btn-comment,
nav.pagination-nav .page-item.active .page-link,
.back-top-btn,
.mybtn-bg,
.mybtn-light:before,
.mybtn-light:after,
.mybtn-bord:before, 
.mybtn-bord:after,
#loader-wrapper .loader-section,
.blog-details .blog-content .content .tag-social-link .social-links li a:hover,
.header.style .nav-item .nav-link.active::before,
 .header.style .nav-item .nav-link.active::after,
 .header.style .nav-item .nav-link:hover::before,
 .header.style .nav-item .nav-link:hover::after,
 .idgallery .slidPrv4.slick-arrow,
 .idgallery .slidNext4.slick-arrow,
 ul.language-dropdown li a::before,
 .testimonial .testimonial-slider .owl-controls .owl-dots .owl-dot

{
     background: <?php echo $color; ?>;
}

.about-area .progress .progress-bar,
.about-area .progress .progress-bar span{
    background-color: <?php echo $color; ?>;
}

.mybtn1,
.mybtn2:hover
{
    background: <?php echo $color; ?>;
    border: 1px solid <?php echo $color; ?>;
}


.portfolio-category li:hover a,
.portfolio-category li.active a{
    background: <?php echo $color; ?>;
}
.footer .social-link ul li a:hover{
    background: <?php echo $color; ?>;
}
.mybtn-bg,
.mybtn-bord:hover,
{
  border-color: <?php echo $color; ?>;
}
.mybtn-bord {
  border: 1px solid <?php echo $color; ?>; 
}
.mybtn-bg {
    border-color: <?php echo $color; ?>;
}
.progress-bar{
  background-color: <?php echo $color; ?>;
}
.readmore-btn{
  background: <?php echo $color; ?>;
}
nav.pagination-nav .page-item.active .page-link{
  background: <?php echo $color; ?>!important;
}
.form-control:focus {
    border-color: <?php echo $color; ?>;
}


 .owl-carousel .owl-controls .owl-nav .owl-prev,
 .owl-carousel .owl-controls .owl-nav .owl-next {
  border: 1px solid <?php echo $color; ?>4d !important;
  color: <?php echo $color; ?>!important;
}

.owl-carousel .owl-controls .owl-nav .owl-prev:hover,
 .owl-carousel .owl-controls .owl-nav .owl-next:hover{
   background: <?php echo $color; ?>!important;
   border: 1px solid <?php echo $color; ?> !important;
   color: #fff !important;
 }

 
 .header.style .nav-item.active .nav-link::before,
.header.style .nav-item.active .nav-link::after,
.header.style .nav-item:hover .nav-link::before,
.header.style .nav-item:hover .nav-link::after
{
  background: <?php echo $color; ?>;
}

.header.style .nav-item.active .nav-link,
.header.style .nav-item:hover .nav-link{
color: <?php echo $color; ?>;
}




.progress-circle .right{
  background-color: <?php echo $color; ?>;
}
.progress-circle .rotate {
  background-color: <?php echo $color; ?>;
}


.single-accordion
{
border-left: 3px solid <?php echo $color; ?>;
}

.aside-contact-form .title:before {
    background: <?php echo $color; ?>;
}

@media (max-width: 991px) {
    .header .nav-item.active .nav-link, .header .nav-item:hover .nav-link {
        color: <?php echo $color; ?>;
    }
    .header .nav-item .nav-link.active, .header .nav-item .nav-link:hover{
        color: <?php echo $color; ?>;
    }
}


.darktheme .form-control:focus {
    border-bottom: 1px solid <?php echo $color; ?>;
}

.darktheme footer .social-link ul li a:hover{
  background: <?php echo $color; ?>!important;
}
.darktheme .portfolio-category li:hover a, 
.darktheme .portfolio-category li.active a{
  background: <?php echo $color; ?>!important;
}
.darktheme .blog-aside .categori .categori-list li a:hover,
.darktheme .blog-aside .categori .categori-list li.active a
{
  color: <?php echo $color; ?>!important;
}

.rtl .section-title,
.rtl .single-accordion
{
    border-left: 0px !important;
    border-right: 3px solid <?php echo $color; ?>!important;
}

.about-box .about-content,
.counterArea .counter_box,
#services .item,
.skill-box,
.pricing-palden .pricing-item,
.single-review .main-content,
.contact .single-info,
.home-page-form,
.google_map_wrapper,
.service-details-content,
.portfolio-details .info,
.blog-aside .categori,
.blog-aside .recent-post-widget,
.blog-aside .archives,
.blog-details .blog-content .content
{
  border-top: 3px solid <?php echo $color; ?>;
}

#eduandex .education-list .single-education
{
  border-left: 3px solid <?php echo $color; ?>;
}

.blogs .blog-box
{
  border-bottom: 3px solid <?php echo $color; ?>;
}
