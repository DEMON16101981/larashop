	<div class="col-md-4 col-xs-6">
		<div class="product">
			<div class="product-img">
				<img src="{{ asset('assets/img/product01.png')}}" alt="">
				<div class="product-label">
					<span class="sale">-30%</span>
					<span class="new">NEW</span>
				</div>
			</div>
			<div class="product-body">
				<p class="product-category">
					{{ $product->category->name}}
				</p>
				<h3 class="product-name"><a href="{{ route('product', [$product->category->code, $product->code])}}">{{ $product->name}}</a></h3>
				<h4 class="product-price">{{ $product->price}} грн.</h4>
				<div class="product-rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="product-btns">
					{{-- <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button> --}}
					{{-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> --}}
					 {{-- <button class="quick-view"></i><span class="tooltipp">Показать товар</span></button>  --}}
				</div>
			</div>
			<div class="add-to-cart">
				<form action="{{ route('basket_add', $product)}}" method="POST">
					@csrf
				<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Добавить в корзину</button>
				</form>

			</div>
		</div>
	</div>