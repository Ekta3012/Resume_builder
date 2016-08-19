@extends('layouts.master')

@section('section')
		<div class="container" style="margin-top: 100px;">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Create new resume</button>
			<div class="divider"></div><br><br>
			<div class="lead" style="">Your Resume's</div>
			@if($resumes->count())
				<table class="table table-hover" style="margin-top:40px; border: 1px solid grey; border-collapse: collapse; ">
					<tr>
						<th>Name</th>
						<th> <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; &nbsp; Created At </th>
						<th>Options</th>
					</tr>
					@foreach($resumes as $resume)
						<tr>
							<td>{{ $resume->name }}</td>
							<td><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; &nbsp;{{ $resume->created_at }}</td>
							<td>
								<a class="btn-floating btn-large waves-green waves-light"
								href={{ route('resume.create',['id' => $resume->id]) }} >
									<span class="glyphicon glyphicon-edit"></span>
								</a>
								<a class="btn-floating btn-large waves-green waves-light red"
								   href='{{ route('resume.delete',['id' => $resume->id]) }}' data-method="delete"
								   data-token="{{csrf_token()}}" data-confirm="Are you sure?">
									<span class="glyphicon glyphicon-remove-circle"></span>
								</a>
								<a class="btn-floating btn-large waves-green waves-light blue" data-toggle="modal" data-target="#previewModal">
									Show
								</a>
								<a class="btn-floating btn-large waves-green waves-light blue" data-toggle="modal" data-target="#downloadModal">
									<span class="glyphicon glyphicon-download-alt"></span>
								</a>
							</td>
						</tr>
					@endforeach
				</table>
			@else
				<div class="row">
					<h5>No Resumes at present</h5>
				</div>
			@endif
		</div>
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">	
		    <!-- Modal content-->
		    <div class="modal-content" style="padding: 50px;">
		    		<button type="button" class="close" data-dismiss="modal">&times;</button>
					{!! Form::open(['route' => 'resume.name'],'class', 'form-control') !!}
					<div class="input-field">
						{!! Form::label('name','Resume Name') !!}
						{!! Form::text('name','',['class' => 'validate']) !!}
					</div>
			      <div class="modal-footer" style="border-top: none;">
			      	<button type="submit" class="btn btn-info">Create</button>
					  {!! Form::close() !!}
			      </div>
			    </div>
		    </div>
		</div>
@stop


@section('script')
	<script>
		$(document).ready(function(){
			//the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			$('.modal-trigger').leanModal();
		});
	</script>
@stop