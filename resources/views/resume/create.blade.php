@extends('layouts.master')

@section('section')

	<div class="container-fluid resumeform">

		<div class="row" style="">
			<div class="col-lg-3 col-xs-2 section_form">
				<ul class="">
					<?php
						$i = 0;
						$check = [];
					?>
					@foreach($resume->sections as $section)
						@if(!in_array($section->id,$check))
							<li class=" btn form_navigation" onclick="show({{ $section->id }})"
								id={{ 'form_navigation_'.$section->id }}>{{ $section->section_name }}</li>
						<?php
							$check[$i] = $section->id;
							$i++;
						?>
						@endif
				 	@endforeach
					<li class="btn" data-toggle="modal" data-target="#addSectionModal">
						<span class="glyphicon glyphicon-plus" style="margin-left: 20px;"></span>
					</li>
				</ul>
			</div>
			<div class="col-lg-7 col-xs-10" style="background-color: #ededed; padding-top:1%; padding-left: 0px; padding-right:0px;">
				<div class="row" style="border-bottom: 1px solid #dcdcdc; padding:15px; background-color: #fff;">
					<div class="col-lg-4">
						<span class="fa fa-television" style="border: 2px solid #0288D1; border-radius: 80px; padding :10px;"></span> &nbsp; &nbsp;<a href={{ route('user.dashboard') }}>Dashboard</a>
					</div>
					<div class="col-lg-8">
						<ul style="list-style: none;">
							<li style="display: inline;">
								<a id="resume_download" data-toggle="modal" data-target="#downloadModal" class="btn ">Download</a>
								<a id="resume_preview" data-toggle="modal" data-target="#previewModal" class="btn">Preview</a>
							</li>
						</ul>
					</div>
					
					
				</div>
				<div  style="padding-top: 3%; padding-left:3%; padding-right:3%;">
					<div class="row" style="margin-bottom: 5%;">
						<div class="col-sm-4">
							<span style="font-size: 13px; color: #696969;">Resume name : </span> &nbsp; &nbsp;{{ $resume->name }}
						</div>
						<div class="col-sm-4">
							
						</div>
					</div>
					{!! Form::open(['id' => 'resume_form','name' => 'resume']) !!}
						<?php
						$i = 0;
						$check = array();
						?>
						<input type="hidden" name="resume_id" id="resume_id" value={{ $resume->id }}>
						@foreach($resume->sections as $section)
							@if(!in_array($section->id,$check))
							<div class="section" id={{ 'form_'.$section->id}} >
								<?php $l = 1; ?>
								@foreach($section->mapping_sections()->where('resume_id',$resume->id)->get() as $mapping_section)
									<div class="mapping_section">
	                                    <?php
	                                    $j = 0;
	                                    $c = array();
	                                    ?>
										@foreach($mapping_section->subsections as $subsection)
											@if(!in_array($subsection->id,$c))
												<div class="row">
													<div class=" col-lg-12">
														{{ Form::label('detail'.$subsection->pivot->id,$subsection->subsection_name)}}
													</div>
													<?php $k = 1; ?>
													@foreach($subsection->mapping_subsections()->where('mapping_section_id',$mapping_section->id)->get()
	                                                as $mapping_subsection)
														<?php
														$content = $mapping_subsection->detail==null?null:$mapping_subsection->detail->content;
														?>
														@if($subsection->validation != 6)
														<div class="col-lg-8">
															{!! Form::text('detail'.$mapping_subsection->id,$content,['class' => 'form-control detail_resume']) !!}<br>
														</div>
														@else
														<div class="col-lg-8">
															<textarea name="{{ 'detail'.$mapping_subsection->id }}"
															class="form-control detail_resume" rows="5">{{ $content }}</textarea><br>
														</div>
														@endif
														@if($subsection->flag != 0 and $k > 1)
															<div class="col-sm-3">
																<button class="btn section_subsection"  show_id='{{ $section->id }}' token='{{ csrf_token() }}'
																link={{ route('resume.deleteSubsection',['mapping_subsection_id' => $mapping_subsection->id,'resume_id' => $resume->id]) }}>
																	<span class="fa fa-minus-circle"></span>
																</button>
															</div>
														@endif
														<?php $k++; ?>
													@endforeach
													@if($subsection->flag != 0)
														<div class="row">
															<button class="btn section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
															link='{{ route('resume.addSubsection',['mapping_section_id' => $mapping_section->id,'subsection_id' => $subsection->id]) }}'>
																<span class="fa fa-plus-circle"></span>
															</button>
														</div>
													@endif
												</div>
												<?php
												$c[$j] = $subsection->id;
												$j++;
												?>
											@endif
										@endforeach
									</div>
									@if($section->flag == 1 and $l > 1)
										<br>
										<div class="row">
											<button class="btn input-field col-sm-2 section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
											   link={{ route('resume.deleteSection',['mapping_section_id' => $mapping_section->id,'resume_id' => $resume->id]) }}>
												<span class="fa fa-minus-circle"></span>
											</button>
										</div>
									@endif
									<?php $l++; ?>
								@endforeach<br>
								@if($section->id == 3)
									<div id="github_button">
										<a class="btn btn-info"
										   href={{ url('auth/github') }}>
											Fetch from GitHub
										</a>
									</div>
								@endif
								@if($section->flag == 1)
									<br>
									<div class="row">
										<button class="btn input-field col-sm-2 section_subsection" show_id='{{ $section->id }}' token='{{ csrf_token() }}'
												link={{ route('resume.addSection',['section_id' => $section->id,'resume_id' => $resume->id]) }}>
											<span class="fa fa-plus-circle"></span>
										</button>
									</div>
								@endif
							</div>
							<?php
							$check[$i] = $section->id;
							$i++;
							?>
							@endif
						@endforeach
					{!! Form::close() !!}
				</div>
			</div>
			<div class="col-lg-2">
				<p class="select_template">Select Template</p>
				<ul style="list-style:none; padding:0px;">
					
						<li class="thumbnail" value="1"><img src="/img/template1.JPG" class="img-responsive"></li>
						<li class="thumbnail" value="2"><img src="/img/template2.JPG" class="img-responsive"></li>
					
					<!--<li class="thumbnail"><img src="/img/template3.png" class="img-responsive"></li>
					<li class="thumbnail"><img src="/img/template4 .png" class="img-responsive"></li>-->
				</ul>
				
			</div>
		</div>		
	</div>	
		
		<div id="addSectionModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content" style="padding: 50px;">
				{!! Form::open(['route' => ['resume.addNewSection',$resume->id]]) !!}
				<div>
					{!! Form::label('section_name','Section Name') !!}
					{!! Form::text('section_name','',['class' => 'form-control']) !!}
				</div>
				<div >
					{!! Form::label('subsection_name','Subsection Name') !!}
					{!! Form::text('subsection_name','',['class' => 'form-control']) !!}
				</div><br>
				<div>
					<button type="submit" class="btn btn-info">Add</button>
				</div>				
				{!! Form::close() !!}<br>
				<div class="modal-footer">
			        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				</div>
			</div>
		  </div>
		</div>
		
@stop

@section('script')
	<script type="application/javascript" src={{ asset('js/resume_create.js') }}></script>
	<script>
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

