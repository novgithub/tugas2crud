@extends('webprofile')

@section('content')
<!-- Banner -->
<section id="banner">
				<div class="inner">
					<header>
						<h1>Hi  Everyone</h1>
						<p>Welcome to my blog</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="" class="link"><img src="images/akuu.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Get to know me!</h3>
										<p>Hello everyone i'm nova and i'm still in 12th grade. I have a little sister and we were always fight. I really like music and also fashion. My dream since i was little was to become a fashion designer, yes even though i know i'm not good at drawing, but i really like mix and match outfit. Even when i was in middle school, i took extracurricular skills, which are making handicrafts and clothing from recycling rubbish. Hehehe segitu aja ya kenalan sama ku.</p>
									</div>
								</div>
						</div>
                    </section>
            </div>

            <div id="share">
				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Sharing with me</h2>
								<p>Oke sekarang aku bakal sharing ke kalian ootd</p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p1.jpg" alt="" />
									</div>
									<p>Summer Looks </p>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p2.jpg" alt="" />
									</div>
									<p>Summer Looks</p>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p3.jpg" alt="" />
									</div>
									<p>Summer Looks</p>
                                </div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p4.jpg" alt="" />
									</div>
									<p>Casual Looks</p>
                                </div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p5.jpg" alt="" />
									</div>
									<p>Casual Looks</p>
                                </div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p6.jpg" alt="" />
									</div>
									<p>Casual Looks</p>
                                </div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p7.jpg" alt="" />
									</div>
									<p>Hijab Looks</p>
                                </div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p8.jpg" alt="" />
									</div>
									<p>Hijab Looks</p>
                                </div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/p9.jpg" alt="" />
									</div>
									<p>Hijab Looks</p>
                                </div>
                               
							</div>
						</div>
					</section>
			</div>

<div id="model">
<section class="wrapper style1">
<div class="inner">
	<header class="align-center">
		<h2>Model List</h2>
		<p>Berikut top list of fashion blogger</p>

		<a href="/layouts/create" class="tombol" style="background:#09bde6">Add New</a>
		
		@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif
	</header>

	<table class="table table-dark">
	<thead>
	<tr>
		<th scope="col">#</th>
		<th scope="col">Name</th>
		<th scope="col">Sosmed</th>
		<th scope="col">Information</th>
		<th scope="col">Action</th>	
	</tr>
	</thead>
	<tbody>
	@foreach( $model as $ml)
	<tr>
		<th scope="row">{{ $loop->iteration }}</th>
		<td>{{ $ml->name }}</td>
		<td>{{ $ml->sosmed }}</td>
		<td>{{ $ml->information }}</td>
		<td>

				<a href="{{ $ml->id }}/edit" class="tombol" style="background:#02db38">edit</a>
			<hr>
			<!--<form action="{{ $ml->id }}" class="d-inline">
					-->
				<a href="/destroy/{{ $ml->id }}" class="tombol" style="background:#eb4034">del</a>
				@csrf
		<!--	</form>-->
		<!--	<a href="badge badge-success">edit</a>
			<a href="badge badge-danger">delete</a>-->
		</td>
	</tr>
	@endforeach
	</tbody>
	
	
	
	</table>

</div>
</section>
</div>

@stop