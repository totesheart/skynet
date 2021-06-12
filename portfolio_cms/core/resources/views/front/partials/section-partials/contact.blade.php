	<!-- Contact Us Area Start -->
	<div class="contact contact-info-area section-padding" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="section-title ">
						<h2 class="">{{ $setting->contact_title }}</h2>
						<span class="">{{ $setting->contact_title }}</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-4 col-md-6">
					<!-- Single Info -->
					<div class="single-info ">
						<div class="info-icon">
							<i class="fa fa-rocket"></i>
						</div>
						<div class="info-content">
							<h5>{{ __('My Location:') }}</h5>
							<p>{{ $abouts->address }}</p>
						</div>

					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<!-- Single Info -->
					<div class="single-info ">
						<div class="info-icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="info-content">
							<h5>{{ __('Phone Number:') }}</h5>
							<p>{{ $abouts->phone }}</p>
						</div>

					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<!-- Single Info -->
					<div class="single-info ">

						<div class="info-icon">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="info-contentr">
							<h5>{{ __('Email Address:') }}</h5>
							<p>{{ $abouts->mail }}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row cAndm">
				<div class="col-lg-6">
					<div class="home-page-form ">
						<div class="contact-form">
							<form id="contact-form" method="post" action="{{route('front.sendmail')}}">
								@csrf
								<div class="controls">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<i class="fa fa-user-o"></i>
											<input id="form_name" type="text" name="name" class="form-control" placeholder="{{ __('Name*') }}" required="required"
													data-error="Name is required.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<i class="fa fa-envelope-o"></i>
											<input id="form_email" type="email" name="email" class="form-control" placeholder="{{ __('Email*') }}" required="required"
													data-error="Valid email is required.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<i class="fa fa-question-circle-o"></i>
											<input id="form_subject" type="text" name="subject" class="form-control" placeholder="{{ __('Subject*') }}" required="required"
													data-error="Subject is required.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<i class="fa fa-comment-o"></i>
											<textarea id="form_message" name="message" class="form-control" placeholder="{{ __('Message*') }}" rows="7" required="required"
													data-error="Please,leave us a message."></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit" class="mybtn mybtn-bg"><span>{{ __('Send Message') }}</span></button>
										</div>
									</div>
								</div>
							</form> <!-- End Contact From -->
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="google_map_wrapper ">
						{!! $setting->map !!}
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</div>
	<!-- Contact Us Area End -->