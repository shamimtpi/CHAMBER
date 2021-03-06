@extends('layouts.frontend')
@section('contents')

	<!--start main content -->
	<div class="main-content">
	  <div class="container">
	     <div class="row">
               <!-- left content -->
			   <div class="col-lg-3">
			     <div class="left-content">
			    @include('frontend.template.leftmenu')
				  @include('frontend.template.videolist')
				  
			   </div>
			   </div>
			   <!-- middle content -->
			   <div class="col-lg-9">
			      <div class="middle-content">
				     <div class="heading1">
						<h2>Welcome to Bangladesh Business Chamber of Canada (BBCC)</h2>
					 </div>
					 <div class="about-details"> 
					 	@if($aboutinfo->ban_status==1)
					      <img src="{{asset('assets/uploads/pages/'.$aboutinfo->about_ban)}}" alt="about.jpg" />
					     @endif
						  {!!$aboutinfo->about_des!!}
					</div>
						
			      </div>			
			   </div>			
          
	  </div>
	</div>
	</div>
	<!--End main content -->
	@endsection