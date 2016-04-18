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
						<th>Created At</th>
						<th>Options</th>
					</tr>
					@foreach($resumes as $resume)
						<tr>
							<td>{{ $resume->name }}</td>
							<td>{{ $resume->created_at }}</td>
							<td>
								<a class="btn-floating btn-large waves-green waves-light"
								href={{ route('resume.create',['id' => $resume->id]) }} >
									<span class="glyphicon glyphicon-edit"></span>
								</a>
								<a class="btn-floating btn-large waves-green waves-light red"
								   href={{ route('resume.delete',['id' => $resume->id]) }}>
									<span class="glyphicon glyphicon-remove-circle"></span>
								</a>
								<a class="btn-floating btn-large waves-green waves-light blue"
								   href={{ route('resume.show',['id' => $resume->id]) }}>
									Show
								</a>
							</td>
						</tr>
					@endforeach
				</table>
			@else
				<div class="row">
					<h5>No CV stored at present</h5>
				</div>
			@endif
		</div>
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content" style="padding: 50px;">
					{!! Form::open(['route' => 'resume.name']) !!}
					<div class="input-field">
						{!! Form::label('name','Resume Name') !!}
						{!! Form::text('name','',['class' => 'validate']) !!}
					</div>
			      <div class="modal-footer">
			      	<button type="submit" class="btn btn-info">Create</button>
					  {!! Form::close() !!}
			        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
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