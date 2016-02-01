@extends('layouts.app')

@section('htmlheader_title')
	Apartat2
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Lorem</strong> Alert body ...
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
