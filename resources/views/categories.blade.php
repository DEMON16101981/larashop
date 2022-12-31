@extends('layouts.main')

@section('content')
	 

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Главная</a></li>
							<li><a href="#">Категории</a></li>
							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">

							@include('saidbar.category')

						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">

							@include('saidbar.brand')

						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">

							@include('saidbar.popular')

						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							@foreach ($categories as $category)
								 <div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ asset('assets/img/product01.png')}}" alt="">
										
									</div>
									<div class="product-body">
								
										<h3 class="product-name">
											<a href="{{$category->code}}">{{ $category->name}}	
													({{$category->products->count()}})
											</a>
									</h3>
									</div>
									
								</div>
							</div>
							@endforeach

							<div class="clearfix visible-sm visible-xs"></div>
					
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@endsection
