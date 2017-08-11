<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc  row">
				<div class="yui-u first col-xs-6">
					@if(!empty($default_section[1][0]['Name'][0]))
	                    <h1>{{ $default_section[1][0]['Name'][0] }}</h1>
	                @endif					
				</div>
				
				<div class="yui-u col-xs-6">
					<div class="contact-info">
						@if($default_section[1][0]['Email'] != null)
	                        @foreach($default_section[1][0]['Email'] as $email)
	                            @if(!empty($email))
	                           <h4><i class="fa fa-envelope"></i>&nbsp; &nbsp;{{ $email }}</a></h4>
	                            @endif
	                        @endforeach
	                    @endif
						@if($default_section[6][0]['Contact No.'] != null)
                            @foreach($default_section[6][0]['Contact No.'] as $phone)
                                @if(!empty($phone))
                                  <h4><i class="fa fa-phone"></i>&nbsp; &nbsp;{{ $phone }}</h4>
                                @endif
                            @endforeach                       
                    	@endif
                    	@if($default_section[1][0]['Websites'] != null)
                            @foreach($default_section[1][0]['Websites'] as $website)
                                @if(!empty($website))
                                   <h4><i class="fa fa-globe"></i>&nbsp; &nbsp;<{{ $website }}</h4>
                                @endif
                            @endforeach
	                    @endif
	                    @if(!empty($default_section[6][0]['Address'][0]))
	                        <h4><i class="glyphicon glyphicon-map-marker"></i>&nbsp; &nbsp;{{ $default_section[6][0]['Address'][0] }}</h4>
	                    @endif						
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">
						@if($default_section[5] != null)
	                    <div class="yui-gf">
							<div class="yui-u first">
								<h2>Objective</h2>
							</div>
							<div class="yui-u">
								<p class="enlarge">
									{{ $default_section[5][0]['Objective'][0] }}
								</p>
							</div>
						</div><!--// .yui-gf -->
	                @endif			
					@if($default_section[4] != null)
		                @if(!empty($section['Skill'][0]))
		                    <div class="yui-gf">
								<div class="yui-u first">
									<h2>Skills</h2>
								</div>
								<div class="yui-u">
									@foreach($default_section[4][0]['Skill'] as $skill)
			                            <div class="talent">
											<h2>{{ $skill }}</h2>									
										</div>
			                        @endforeach
								</div>
							</div><!--// .yui-gf -->
		                @endif                
		             @endif
		             
					@if($default_section[7] != null)
                    	<div class="yui-gf">	
							<div class="yui-u first">
								<h2>Experience</h2>
							</div><!--// .yui-u -->

							<div class="yui-u">
								 @foreach($default_section[7] as $section)
		                            @if($section != null)
		                                <div class="job">
											@if(!empty($section['Company'][0]))
				                               <h2>{{ $section['Company'][0] }}</h2>
				                            @endif   
											@if(!empty($section['Job Title'][0]))
				                                <h3>{{ $section['Job Title'][0] }}</h3>
				                            @endif   
											 @if(!empty($section['Start Date'][0]) or $section['End Date'][0])
				                                <h4>{{ $section['Start Date'][0] }} &#45;{{ $section['End Date'][0] }}</h4>
				                            @endif 
											@if(!empty($section))                                    
				                                <p>{{ $section['Other Information'][0] }}</p>              
				                            @endif  								
										</div>
		                            @endif
		                        @endforeach
							</div><!--// .yui-u -->
						</div><!--// .yui-gf -->
                	@endif
                	 @if($default_section[3] != null)
		                <div class="yui-gf" >
		                    <div class="yui-u first"><h2>Projects</h2></div>
		                    <div class="yui-u">
		                    @foreach($default_section[3] as $section)
		                            @if($section != null)
		                                <div class="project">
		                                    <h2>{{ $section['Project Name'][0] }}</h2>
		                                   <h3>{{ $section['Project Description'][0] }}
		                                    </h3>                    
		                                </div><!--//item-->
		                            @endif
		                        @endforeach
		                        </div>
		                </div><!--//section-->
		            @endif
                	@if($default_section[2] != null)
		                 <div class="yui-gf last">
							<div class="yui-u first">
								<h2>Education</h2>
							</div>
							@foreach($default_section[2] as $section)
			                            @if($section != null)
			                               <div class="yui-u">
												 @if(!empty($section['Institution'][0]))
					                                <h2>{{ $section['Institution'][0] }}</h2>
					                            @endif
												
												@if(!empty($section['Course Name'][0]))
					                                <h2>{{ $section['Course Name'][0] }}</h2>
					                            @endif
												<h3>
													@if(!empty($section['Passing Year'][0]))
				                                        {{ $section['Passing Year'][0] }}
				                                    @endif ,
				                                    <strong>
				                                    @if(!empty($section['Marks'][0]))
				                                        {{ $section['Marks'][0] }}
				                                    @endif </strong> </h3>
											</div>                           
			                            @endif
			                        @endforeach
						</div><!--// .yui-gf -->
		            @endif

					


					


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<!-- <div id="ft">
			<p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
		</div> --><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->