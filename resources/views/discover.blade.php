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
				<h4>Discover</h4>
				<div class="grid">
					<figure class="effect-zoe">
						<img src="img/u345.jpg" alt="img25"/>
						<figcaption>
							<h5><strong><a href="{{route('album.detail')}}">City J</a></strong></h5>
							
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="img/u311.jpg" alt="img26"/>
						<figcaption>
							<h5><strong>Taifun</strong></h5>
							
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="img/u305.jpg" alt="img26"/>
						<figcaption>
							<h5><strong>Sebuah Nama</strong></h5>
							
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="img/u308.jpg" alt="img26"/>
						<figcaption>
							<h5><strong>Kolaborasoe</strong></h5>
							
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="img/Sinestesia.jpg" alt="img26"/>
						<figcaption>
							<h5><strong>Sinestesia</strong></h5>
							
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="img/u305.jpg" alt="img26"/>
						<figcaption>
							<h5><strong>Los Skut Leboys</strong></h5>
							
						</figcaption>			
					</figure>
				</div>
			</div>

			<div class="span3">
				<h4>Recent Release</h4>
				<div class="grid">
					<figure class="effect-zoe">
						<img src="img/u305.jpg" alt="img25"/>
						<figcaption>
							<h5><strong>City J</strong></h5>	
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="img/u311.jpg" alt="img26"/>
						<figcaption>
							<h5><strong>Sebuah Nama, Sebuah Cerita</strong></h5>
							
						</figcaption>			
					</figure>
				</div>
			</div>
			
			

		</div>
	</div>
</section>
		
@endsection

@section('footer')
    @include('base.footer')
@endsection