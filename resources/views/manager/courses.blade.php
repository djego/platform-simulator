@extends('layouts.platform')
@section('content')
<div class="right_col" role="main">

	<div class="row">
	@if($courses->count())
	@foreach($courses as $course)
		<a href="">
			<div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  <div class="tile-stats">
			    <div class="icon"><i class="fa fa-book"></i>
			    </div>
			    <div class="count">1515 students</div>
			    <h3>{{ $course->name  }}</h3>
			    <p>Click for more info..</p>
			  </div>
			</div>
		</a>
	@endforeach
	@endif
	</div>
</div>
@endsection