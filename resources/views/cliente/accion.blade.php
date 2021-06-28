@extends('layouts.categorias')
@section('categorias')
	
<h1>Accion para ti :)</h1>
<div class="main">
	<div class="shop_top">
	  <div class="container">
		  <div class="row shop_box-top">
				@foreach ($books as $book)
					<div class="col-md-3 shop_box"><a href="{{ url('/cliente/shop/book/' . $book->id) }}">
						<img src="{{ asset($book->image)}}" class="img-responsive" alt=""/>
						<span class="new-box">
							<span class="new-label">New</span>
						</span>
						<span class="sale-box">
							<span class="sale-label">Sale!</span>
						</span>
						<div class="shop_desc" >
							<h3><a href="#">{{ $book->title }}</a></h3>
							<!--<p>Lorem ipsum consectetuer adipiscing </p>-->
							<!--<span class="reducedfrom"></span>-->
							<span class="actual">S/. {{ $book->precio }}</span><br>
							<ul class="buttons">
								<li class="cart"><a href="#">Add To Cart</a></li>
								<li class="shop_btn"><a href="#">Read More</a></li>
								<div class="clear"> </div>
							</ul>
						</div>
					</a></div>
				@endforeach               
			</div>
	   </div>
	 </div>
	</div>
	  
</body>	
</html>

@endsection