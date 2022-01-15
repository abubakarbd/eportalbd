@if(Session('msg'))
	<div class="alert bg-primary fade in">
	    <a href="#" class="close" data-dismiss="alert">×</a>
	    <strong>{{Session('msg')}}</strong> 
	</div>
@endif

@if(Session('umsg'))
	<div class="alert alert-danger fade in">
	    <a href="#" class="close" data-dismiss="alert">×</a>
	   <strong>{{Session('umsg')}}</strong> 
	</div>
@endif

@if($errors->any())
	@foreach($errors->all() as $error)
	<div class="alert btn-danger text-white fade in">
	    <a href="#" class="close" data-dismiss="alert">×</a>
	    {{$error}}
	</div>
	@endforeach
@endif
