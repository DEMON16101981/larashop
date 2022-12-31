@extends('layouts.main')

@section('checkout')
    		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
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

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Данные покупателя</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Имя">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="surname" placeholder="Фамилия">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Город">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Номер телефона">
							</div>
							
						</div>
						<!-- /Billing Details -->


						<!-- Order notes -->
						<div class="order-notes">
							<textarea name="content" class="input" placeholder="Заметки по доставке"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Ваш заказ</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>ТОВАРЫ</strong></div>
								<div><strong>СУММА</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Доставка</div>
								<div><strong>БЕСПЛАТНАЯ</strong></div>
							</div>
							<div class="order-col">
								<div><strong>СУММА</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Предоплата
								</label>
								<div class="caption">
									<p>Оплата за товар сразу до отправления получателю</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Наложенный платёж
								</label>
								<div class="caption">
									<p>Это возможность оплатить товар при получении </p>
								</div>
							</div>
						
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								Я ознакомился и принимаю  <a href="#"> условия</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Оформить заказ</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection
