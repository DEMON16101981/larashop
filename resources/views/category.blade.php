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
							<li><a href="{{ route('categories')}}">Категории</a></li>
							<li><a href="#"></a></li>
							{{-- <li class="active">Headphones (227,490 Results)</li> --}}
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
							
							@include('saidbar.filter')

						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							@include('card')
					
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
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
