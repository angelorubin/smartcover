<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>BuildCase</title>
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
	{{ HTML::style('assets/css/buildcase.css') }}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/buildcase.js') }}
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<img src="assets/images/logo.jpg" width="300" alt="logo" class="img-responsive">
  					<h4>Monte Sua Capa Personalizada</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Modelos de Celulares</strong></h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<a href="#" class="list-group-item active" id="iphone5s">
								<h4 class="list-group-item-heading">Iphone 5S</h4>
								<p class="list-group-item-text">Lorem ipsum dolor simet.</p>
							</a>
						
							<a href="#" class="list-group-item" id="iphone5c">
								<h4 class="list-group-item-heading">Iphone 5C</h4>
								<p class="list-group-item-text">Lorem ipsum dolor simet.</p>
							</a>
						
							<a href="#" class="list-group-item" id="iphone4s">
								<h4 class="list-group-item-heading">Iphone 4S</h4>
								<p class="list-group-item-text">Lorem ipsum dolor simet.</p>
							</a>
						</div>
					</div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Escolha as Fotos</strong></h3>
					</div>
					<div class="panel-body">
						<input type="file">
					</div>
				</div>

			</div>
			<div class="col-md-5">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Celular e Layout Escolhido</strong></h3>
					</div>
					<div class="panel-body">
						
							<div class="layout">
							<!--
								<div class="bloco-simples">A</div>
								<div class="bloco-simples">B</div>
								<div class="bloco-simples">C</div>
								<div class="bloco-duplo">D</div>
								<div class="bloco-simples">E</div>
								<div class="bloco-simples">F</div>
								<div class="bloco-simples">G</div>
								<div class="bloco-simples">H</div>
								<div class="bloco-simples">I</div>
								<div class="bloco-simples">J</div>
								<div class="bloco-simples">K</div>
								<div class="bloco-simples">L</div>
								<div class="bloco-simples">M</div>
								<div class="bloco-simples">N</div>
								<div class="bloco-simples">O</div>
							-->
							</div>

					    	<div class="celular center-block">
								<img class="img-responsive center-block" src="assets/images/celulares/iphone5s.jpg" alt="">
							</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Layouts</strong></h3>
					</div>
					<div class="panel-body">
						<div class="row">
					  		<div class="col-xs-6 col-md-3">
					    		<a href="#" class="thumbnail">
					      			<img src="assets/images/layouts/layout01.png" alt="layout01">
					    		</a>
					  		</div>
					  		<div class="col-xs-6 col-md-3">
					    		<a href="#" class="thumbnail">
					      			<img src="assets/images/layouts/layout02.png" alt="layout02">
					    		</a>
					  		</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-footer">
			<p class="text-center">Todos os direitos reservados a SmartCover - 2014</p>
		</div>
	</div>
</body>
</html>