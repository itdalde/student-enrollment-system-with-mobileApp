@extends('template.default')

@section('styles')
<style type="text/css">
	.jumbotron{
		margin-bottom: 10px;
		border-radius: 0px !important;
	}
	.well{
		border-radius: 0px !important;
	}
	i {
		color: #e5bf37;
		font-size: 25px;
	}
</style>
@endsection

@section('contents')
	<div class="container">
		<div class="jumbotron">
			<h1 class="text-center">Student Enrollment System</h1>
		</div>
		<div>
			<div class="col-lg-3 well">
				<ul class="nav nav-pills nav-stacked row">
				  <li role="presentation" class="active"><a href="#"><i class="glyphicon glyphicon-home pull-right"></i>Dashboard</a></li>
				  
				  <li role="presentation"><a href="#"><i class="glyphicon glyphicon-book pull-right"></i>Enroll</a></li>
				  <li role="presentation"><a href="{{route('encoder_logout')}}"><i class="glyphicon glyphicon-retweet pull-right"></i>Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-9 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Encoder Dashboard</h2>
					</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection