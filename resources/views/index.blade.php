@extends('layouts.header')
@section('content')

	<!--inform-link-->
	<div class="geek">GEEK</div>
	<div class="store">STORE</div>
	<div class="manga">Манга, комиксы, фигурки</div>

	<div class="inform-link">
		
		<div class="pos"><a href="all.html" class="inform-btn read">Посмотреть</a></div>
		<div class="kup"><a href="all.html" class="inform-btn shop">Купить сейчас</a></div>
		
	</div>




<!--Входи,корзина-->
<div class="personal-item">
		<div class="auth">
				<div class="login">
					<a href="#" class="auth-link"><i class="fas fa-user-circle"></i>Войти</a>
				</div>
				<div class="car">
					<a href="#" class="auth-link"><i class="fas fa-shopping-cart"></i>Корзина</a>
				</div>
		</div>
</div> 
@endsection
