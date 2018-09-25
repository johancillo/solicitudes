<!doctype html>
<html lang="es">

@include('layouts.partials._head')
<body>

	@include('layouts.partials._navigation')
	@include('layouts.partials._alerts')
	<div class="container-fluid">
		<div class="row">	
		
			
			@yield('content')
		</div>
	</div>

	@include('layouts.partials._scripts')
</body>

</html>