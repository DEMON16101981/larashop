<!-- aside Widet -->
	<div class="aside">
		<h3 class="aside-title">Категории</h3>
		<div class="checkbox-filter">
			@foreach ($categories as $category)
				 	<div class="input-checkbox"> 
				{{-- <input type="checkbox" id="category-1"> --}}
				<label for="category-1">
					<span></span>
					<a href="{{ $category->code}}">{{ $category->name}}</a>
					<small>({{ $category->products->count()}})</small>
				</label>
			 </div> 
			@endforeach
		
		</div>
	</div>
	<!-- /aside Widget -->