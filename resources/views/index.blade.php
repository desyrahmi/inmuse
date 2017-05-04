@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
	@include('base.navbar')
@endsection

@section('content')
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="span9">
					<h4>New Release</h4>
					<hr>
					<div style="margin-left: 10px" class="span3">
						<div class="home-post">
							<div class="post-image">
								<img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" width="280px" height="250px"/>
							</div>
							<div class="post-meta">
								<span class="date">June 19, 2013</span>
								<span class="tags"><a href="#">Efek Rumah Kaca</a></span>
							</div>
							<div class="entry-content">
								<h5><strong><a href={{route('album.detail')}}>Kamar Gelap</a></strong></h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
								</p>
							</div>
						</div>
					</div>
					<div style="margin-left: 10px" class="span3">
						<div class="home-post">
							<div class="post-image">
								<img class="max-img" src="{{URL::asset('img/sinestesia.jpg')}}" alt="" width="280px" height="250px"/>
							</div>
							<div class="post-meta">
								<span class="date">June 19, 2013</span>
								<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
							</div>
							<div class="entry-content">
								<h5><strong><a href="#">New design trends</a></strong></h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
								</p>
							</div>
						</div>
					</div>
					<div style="margin-left: 10px" class="span3">
						<div class="home-post">
							<div class="post-image">
								<img class="max-img" src="{{URL::asset('img/monokrom.jpg')}}" alt="" width="280px" height="250px"/>
							</div>
							<div class="post-meta">
								<span class="date">June 19, 2013</span>
								<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
							</div>
							<div class="entry-content">
								<h5><strong><a href="#">New design trends</a></strong></h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
								</p>
							</div>
						</div>
					</div>
				</div>
				<div style="margin-left: 10px" class="span3">
					<h4>Top Rated</h4>
					<hr>
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="{{URL::asset('img/scaller.jpg')}}" alt="" width="280px" height="250px"/>
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 19, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">New design trends</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div style="margin-left: 10px" class="span9">
					<h4>Album</h4>
					<hr>
					<div style="margin-left: 10px" class="span3">
						<div class="home-post">
							<div class="post-image">
								<img class="max-img" src="{{URL::asset('img/sinestesia.jpg')}}" alt="" width="280px" height="250px"/>
							</div>
							<div class="post-meta">
								<span class="date">June 19, 2013</span>
								<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
							</div>
							<div class="entry-content">
								<h5><strong><a href="#">New design trends</a></strong></h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
								</p>
							</div>
						</div>
					</div>
					<div  style="margin-left: 10px" class="span3">
						<div class="home-post">
							<div class="post-image">
								<img class="max-img" src="{{URL::asset('img/dunia-batas.jpg')}}" alt="" width="280px" height="250px"/>
							</div>
							<div class="post-meta">
								<span class="date">June 19, 2013</span>
								<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
							</div>
							<div class="entry-content">
								<h5><strong><a href="#">New design trends</a></strong></h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
								</p>
							</div>
						</div>
					</div>
					<div style="margin-left: 10px" class="span3">
						<div class="home-post">
							<div class="post-image">
								<img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" width="280px" height="250px"/>
							</div>
							<div class="post-meta">
								<span class="date">June 19, 2013</span>
								<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
							</div>
							<div class="entry-content">
								<h5><strong><a href="#">New design trends</a></strong></h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="span3">
					<h4>Album of the Week</h4>
					<hr>
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="{{URL::asset('img/kamargelap.jpg')}}" alt="" width="280px" height="250px"/>
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 19, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">New design trends</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('footer')
	@include('base.footer')
@endsection