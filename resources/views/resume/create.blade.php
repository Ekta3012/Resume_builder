@extends('layouts.master')

@section('section')
	<div class="container col s12">
		<div class="flow-text">
			{{ $resume->name }}
		</div>
		<nav class="card-panel #ffffff white lighten-5" style="box-shadow: none;">
			<ul class="right">
				<li class="waves-effect waves-light btn" id="resume_submit">Save</li>
				<li class="waves-effect waves-light btn" style="margin-left: 20px;">Download</li>
			</ul>
		</nav>
		<div class="row">
			<div class="col-sm-4">
				<ul class="">
					<?php
						$i = 0;
						$check = array();
					?>
					@foreach($resume->sections as $section)
						
						<li class=" btn form_navigation" style="margin-bottom: 10px; width: 300px; color: #fff; background: repeating-linear-gradient( 45deg,
										      #000040,
										      #191953 2px,
										      #000040 2px,
										      #465298 2px);"
							onclick="show({{ $section->id }})"
							id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>

						
						<?php
							$check[$i] = $section->id;
							$i++;
						?>
				 	@endforeach
				</ul>
				<div class=" btn" style="color: #fff; background: repeating-linear-gradient( 45deg,
										      #000040,
										      #191953 2px,
										      #000040 2px,
										      #465298 2px);">
					Add New Section
				</div>
			</div>
			<div class="col-sm-8">
				{!! Form::open(['id' => 'resume','name' => 'resume']) !!}
					@foreach($resume->sections as $section)
						<div id={{ 'form_'.$section->id}}>
							@foreach($section->mapping_sections()->where('resume_id','=',$resume->id)->get() as $mapping_section)
								<div class="mapping_section">
									@foreach($mapping_section->subsections as $subsection)
										<div class="row">
											<?php $default = \App\Detail::where('mapping_subsection_id',
													'=',$subsection->pivot->id)->first();
												  $content = $default===null?null:$default->content;
											?><br>
											<div class="input-field col-sm-3">
												{!! Form::label($subsection->pivot->id,$subsection->subsection_name) !!}
												</div>
												<div class="col-sm-9"> 
												{!! Form::text($subsection->pivot->id,$content,['class' => 'validate']) !!}
												
											</div>
										</div>
									@endforeach
								</div>
							@endforeach
						</div>
					@endforeach

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop

@section('footer')
	<footer class="container-fluid panel-footer" style="margin-top: 50px;">
	<ul style="list-style: none; text-align: center;">
			<li style="display: inline;"><a href="www.facebook.com/softwareincubator"><img src="img/fb.png" class="f_img"></a></li>
			<li style="display: inline;"><img src="img/twitter.png"class="f_img"></li>
			<li style="display: inline;"><img src="img/google.png" class="f_img"></li>
		</ul>
		<div style="text-align: center;">ResumeBuilder-2016 &copy; @ Software Incubator.</div>
	</footer>
@stop

@section('script')
	<script>
		$(document).ready(function(){
			show(1);
			$('#resume_submit').click(function(){
				$('#resume').submit();
			});
		});

		function show(obj)
		{
			//console.log(obj);
			@foreach($resume->sections as $section)
                $("#form_{{ $section->id }}").hide();
			@endforeach
            $("#form_"+obj).show();
		}
	</script>
@stop

