@extends('frontend.master')

@section('mainContent')

<div class="w3ls-section agileits-gallery" id="gallery">
		<div class="container">
			<h3 class="agileits-title">MY work</h3>
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home-main" aria-expanded="true">Show all</a></li>
					<li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Web design</a></li>
					<li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Photography</a></li>
					<li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Illustration</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
						<div class="w3_tab_img">
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g1.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g1.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Consectetur</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g2.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g2.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Adipiscing </p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g3.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g3.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Ullamcorper </p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g4.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g4.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Tristique</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g5.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g5.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>accumsan</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g6.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g6.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Vulputate</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g7.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g7.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Sodales</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g8.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g8.jpg" alt=" " class="img-responsive" />
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Ornare </p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
						<div class="w3_tab_img">
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g2.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g2.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Eleifend</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g3.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g3.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Pulvinar</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
						<div class="w3_tab_img">
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g4.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g4.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Blandit</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g1.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g1.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Vivamus</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g2.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g3.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Eleifend</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g3.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g2.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Blandit</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
						<div class="w3_tab_img">
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g1.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g1.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Ornare </p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g2.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g2.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Pulvinar</p>
								</div>
							</div>
							<div class="col-sm-3 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{asset('public/frontend/images/')}}/g3.jpg">
										<figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('public/frontend/images/')}}/g3.jpg" alt=" " class="img-responsive">
										</figure>
									</a>
								</div>
								<div class="agile-gallery-info">
									<h5>My project</h5>
									<p>Vulputate</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('public/frontend/')}}/js/jquery.tools.min.js"></script>
		<script src="{{asset('public/frontend/')}}/js/jquery.mobile.custom.min.js"></script>
		<script src="{{asset('public/frontend/')}}/js/jquery.cm-overlay.js"></script>
		<script>
			$(document).ready(function () {
				$('.cm-overlay').cmOverlay();
			});
		</script>
	</div>

	@endsection