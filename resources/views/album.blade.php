@extends('base.base')

@section('title', 'InMuSe')

@section('navbar')
	@include('base.navbar')
@endsection

@section('content')
	<section class="section">
		<div class="container">
			<div class="row">

				<div class="span4">
					<div class="aligncenter album">
						<img src="{{URL::asset('img/kamargelap.jpg')}}" alt="lala" width="250px" height="250px"/>
					</div>
				</div>
				<div class="span8">
					<h4>Kamar Gelap</h4>
					<h3>Efek Rumah Kaca</h3>
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab"> Overview</a></li>
							<li><a href="#two" data-toggle="tab">User Review</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">
								<p>
									<strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
								</p>
								<p>
									No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
								</p>
								<p>
									Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
								</p>
							</div>
							<div class="tab-pane" id="two">
								<p>
									Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
								</p>
								<p>
									Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<hr>
				<div class="span4">
					<h4>Song List</h4>
					<table class="table table-user-information">
						<thead>
						<tr>
							<th>No.</th>
							<th>Title</th>
							<th>Duration</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1.</td>
							<td>Tubuhmu Membiru... Tragis</td>
							<td></td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Kau dan Aku Menuju Ruang Hampa</td>
							<td></td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Mosi Tidak Percaya</td>
							<td></td>
						</tr>
						<tr>
							<td>4.</td>
							<td>Lagu Kesepian</td>
							<td></td>
						</tr>
						<tr>
							<td>5.</td>
							<td>Hujan Jangan Marah</td>
							<td></td>
						</tr>
						<tr>
							<td>6.</td>
							<td>Kenakalan Remaja di Era Informatika</td>
							<td></td>
						</tr>
						<tr>
							<td>7.</td>
							<td>Menjadi Indonesia</td>
							<td></td>
						</tr>
						<tr>
							<td>8.</td>
							<td>Kamar Gelap</td>
							<td></td>
						</tr>
						</tbody>
					</table>

				</div>

				<div class="span8">
					<h4>Review</h4>

					<div class="row pb-cmnt-container" style="margin-top: 0px;">
						<div class="span7">
							<div class="panel panel-info">
								<div class="panel-body">
									<textarea style="width: 100%;" placeholder="Write your review here!" class="pb-cmnt-textarea"></textarea>
									<form class="form-inline">
										<button class="btn btn-primary pull-right" type="button">Share</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-white post panel-shadow">
						<div class="post-heading">
							<div class="pull-left image">
								<img src="{{URL::asset('img/kamargelap.jpg')}}" class="img-circle avatar" alt="user profile image" height="250px" width="250px">
							</div>
							<div class="pull-left meta">
								<div class="title h5">
									<b>Ryan Haywood</b>
									made a post.
								</div>
								<h6 class="text-muted time">1 minute ago</h6>
							</div>
						</div>
						<div class="post-description">
							<p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
						</div>
					</div>
					<div class="panel panel-white post panel-shadow">
						<div class="post-heading">
							<div class="pull-left image">
								<img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
							</div>
							<div class="pull-left meta">
								<div class="title h5">
									<b>Ryan Haywood</b>
									made a post.
								</div>
								<h6 class="text-muted time">1 minute ago</h6>
							</div>
						</div>
						<div class="post-description">
							<p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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