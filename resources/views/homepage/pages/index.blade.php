@extends('homepage.master')

@section('about')
	
	<section class="clearfix about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Welcome</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
					<br>standard dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make a
					<br> type specimen book. It has survived not only five centuries</p>
					<img src="{{ ('splash_assets/images/welcom_sign.png') }}" class="img-fluid" alt="welcom-img">
				</div>
			</div>
		</div>
	</section>
	
@endsection

@section('our_courses')
	
	<section class="our_courses">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Our Courses</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="courses_box mb-5">
						<div class="course-img-wrap">
							<img src="{{ ('splash_assets/images/courses_1.jpg') }}" class="img-fluid" alt="courses-img">
							<div class="courses_box-img">
								<div class="courses-link-wrap">
									<a href="course-detail.html" class="course-link"><span>course Details </span></a>
									<a href="admission-form.html" class="course-link"><span>Join today </span></a>
								</div>

							</div>
						</div>

						<div class="courses_icon">
							<img src="{{ ('splash_assets/images/plus-icon') }}.png" class="img-fluid close-icon" alt="plus-icon">
						</div>
						<a href="course-detail.html" class="course-box-content">
							<h3>Biochemistry</h3>
							<p>When an unknown printer took a galley...</p>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="courses_box mb-5">
						<div class="course-img-wrap">
							<img src="{{ ('splash_assets/images/courses_2.jpg') }}" class="img-fluid" alt="courses-img">
							<div class="courses_box-img">
								<div class="courses-link-wrap">
									<a href="course-detail.html" class="course-link"><span>course Details </span></a>
									<a href="admission-form.html" class="course-link"><span>Join today </span></a>
								</div>

							</div>
						</div>

						<div class="courses_icon">
							<img src="{{ ('splash_assets/images/plus-icon') }}.png" class="img-fluid close-icon" alt="plus-icon">
						</div>
						<a href="course-detail.html" class="course-box-content">
							<h3>History</h3>
							<p>When an unknown printer took a galley...</p>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="courses_box mb-5">
						<div class="course-img-wrap">
							<img src="{{ ('splash_assets/images/courses_3.jpg') }}" class="img-fluid" alt="courses-img">
							<div class="courses_box-img">
								<div class="courses-link-wrap">
									<a href="course-detail.html" class="course-link"><span>course Details </span></a>
									<a href="admission-form.html" class="course-link"><span>Join today </span></a>
								</div>

							</div>
						</div>

						<div class="courses_icon">
							<img src="{{ ('splash_assets/images/plus-icon') }}.png" class="img-fluid close-icon" alt="plus-icon">
						</div>
						<a href="course-detail.html" class="course-box-content">
							<h3>Human Sciences</h3>
							<p>When an unknown printer took a galley...</p>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="courses_box mb-5">
						<div class="course-img-wrap">
							<img src="{{ ('splash_assets/images/courses_4.jpg') }}" class="img-fluid" alt="courses-img">
							<div class="courses_box-img">
								<div class="courses-link-wrap">
									<a href="course-detail.html" class="course-link"><span>course Details </span></a>
									<a href="admission-form.html" class="course-link"><span>Join today </span></a>
								</div>

							</div>
						</div>

						<div class="courses_icon">
							<img src="{{ ('splash_assets/images/plus-icon') }}.png" class="img-fluid close-icon" alt="plus-icon">
						</div>
						<a href="course-detail.html" class="course-box-content">
							<h3>Earth Sciences</h3>
							<p>When an unknown printer took a galley...</p>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="btn btn-default btn-courses">View all courses</a>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('event')
	
	<section class="event">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2>Upcoming Events</h2>
					<div class="event-img">
						<span class="event-img_date">06-Nov-17</span>
						<img src="{{ ('splash_assets/images/upcoming-event-img.jpg') }}" class="img-fluid" alt="event-img">
						<div class="event-img_title">
							<h3>Event Heading</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ...</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<h2>Important Dates</h2>
					<div class="event-date-slide">
						<div class="row">
							<div class="col-md-12">
								<div class="event_date">
									<div class="event-date-wrap">
										<p>06</p>
										<span>Nov.17</span>
									</div>
								</div>
								<div class="date-description">
									<h3>Eestibulum sodales metus.</h3>
									<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
									<hr class="event_line">
								</div>
								<div class="event_date">
									<div class="event-date-wrap">
										<p>10</p>
										<span>Nov.17</span>
									</div>
								</div>
								<div class="date-description">
									<h3>Integer faucibus nulla a ligula.</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="event_date">
									<div class="event-date-wrap">
										<p>05</p>
										<span>Oct.17</span>
									</div>
								</div>
								<div class="date-description">
									<h3>Eestibulum sodales metus.</h3>
									<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
									<hr class="event_line">
								</div>
								<div class="event_date">
									<div class="event-date-wrap">
										<p>06</p>
										<span>Nov.17</span>
									</div>
								</div>
								<div class="date-description">
									<h3>Integer faucibus nulla a ligula.</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="event_date">
									<div class="event-date-wrap">
										<p>06</p>
										<span>Sep.18</span>
									</div>
								</div>
								<div class="date-description">
									<h3>Eestibulum sodales metus.</h3>
									<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
									<hr class="event_line">
								</div>
								<div class="event_date">
									<div class="event-date-wrap">
										<p>06</p>
										<span>Mar.17</span>
									</div>
								</div>
								<div class="date-description">
									<h3>Integer faucibus nulla a ligula.</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('detailed_chart')
	
	<section class="detailed_chart">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
					<div class="chart-img">
						<img src="{{ ('splash_assets/images/chart-icon_1') }}.png" class="img-fluid" alt="chart_icon">
					</div>
					<div class="chart-text">
						<p><span class="counter">39</span> Teachers
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
					<div class="chart-img">
						<img src="{{ ('splash_assets/images/chart-icon_2') }}.png" class="img-fluid" alt="chart_icon">
					</div>
					<div class="chart-text">
						<p><span class="counter">2600</span> Students
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 chart_top">
					<div class="chart-img">
						<img src="{{ ('splash_assets/images/chart-icon_3') }}.png" class="img-fluid" alt="chart_icon">
					</div>
					<div class="chart-text">
						<p><span class="counter">56</span> Courses
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="chart-img">
						<img src="{{ ('splash_assets/images/chart-icon_4') }}.png" class="img-fluid" alt="chart_icon">
					</div>
					<div class="chart-text">
						<p><span class="counter">13</span> Years Exp.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('blog')

	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Our Blog</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<a href="blog-post.html" class="home_blog_link">
						<div class="blog-img_box">
							<img src="{{ ('splash_assets/images/blog-img_1.jpg') }}" class="img-fluid blog_display" alt="blog-img">
							<div class="blogtitle">
								<h3>Eestibulum sodales</h3>
								<i class="icon-user fa-common" aria-hidden="true"></i>
								<p>by: admin</p>
								<i class="icon-speedometer fa-common" aria-hidden="true"></i>
								<p>9- Nov-2016</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="blog-post.html" class="home_blog_link">
						<div class="blog-img_box">
							<img src="{{ ('splash_assets/images/blog-img_2.jpg') }}" class="img-fluid blog_display" alt="blog-img">
							<div class="blogtitle">
								<h3>Variations of passages</h3>
								<i class="icon-user fa-common" aria-hidden="true"></i>
								<p>by: admin</p>
								<i class="icon-speedometer fa-common" aria-hidden="true"></i>
								<p>9- Nov-2016</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="blog-post.html" class="home_blog_link">
						<div class="blog-img_box">
							<img src="{{ ('splash_assets/images/blog-img_3.jpg') }}" class="img-fluid blog_display" alt="blog-img">
							<div class="blogtitle">
								<h3>Lorem Ipsum passage</h3>
								<i class="icon-user fa-common" aria-hidden="true"></i>
								<p>by: admin</p>
								<i class="icon-speedometer fa-common" aria-hidden="true"></i>
								<p>9- Nov-2016</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="blog-post.html" class="home_blog_link">
						<div class="blog_hide">
							<i class="icon-link" aria-hidden="true"></i>
							<p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been dummy...</p>
							<div class="blogtitle-link">
								<i class="icon-user fa-common" aria-hidden="true"></i>
								<p>by: admin</p>
								<i class="icon-speedometer fa-common" aria-hidden="true"></i>
								<p>9- Nov-2016</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="blog-post.html" class="home_blog_link">
						<div class="blog-img_box">
							<div class="blog-video">
								<div class="blog-play_btn"> <img src="{{ ('splash_assets/images/play-btn') }}.png" alt="play-btn"> </div>
								<img src="{{ ('splash_assets/images/blog-img_4.jpg') }}" class="img-fluid blog_display" alt="blog-img">
							</div>

							<div class="blogtitle">
								<h3>Nam libero tempore</h3>
								<i class="icon-user fa-common" aria-hidden="true"></i>
								<p>by: admin</p>
								<i class="icon-speedometer fa-common" aria-hidden="true"></i>
								<p>9- Nov-2016</p>
							</div>
						</div>
					</a>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="btn btn-default btn-courses">VIEW ALL BLOG</a>
				</div>
			</div>
		</div>
	</section>

@endsection