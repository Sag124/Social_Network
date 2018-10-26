@if (Session::has('success'))
{{-- 
		<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
		</div> --}}
		<div class="row">
		<div class="col-md-8 col-md-offset-3">
			
	<div class="box-body">	
		<div class="box-body">
		 <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
		<strong>Success:</strong> {{ Session::get('success') }}
               
                {{-- Success alert preview. This alert is dismissable. --}}
         </div>
         </div>
         </div>
         </div>
         </div>
@endif

@if (count($errors) > 0)
	{{-- <div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>  --}}

	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			
	<div class="box-body">	
	 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
              </div>
              </div>

		</div>
	</div>					
@endif