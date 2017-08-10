<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc  row">
				<div class="yui-u first col-xs-9">
					@if(!empty($default_section[1][0]['Name'][0]))
	                    <h1>{{ $default_section[1][0]['Name'][0] }}</h1>
	                @endif
					
				</div>
				
				<div class="yui-u col-xs-3">
					<div class="contact-info">
						@if($default_section[1][0]['Email'] != null)
	                        @foreach($default_section[1][0]['Email'] as $email)
	                            @if(!empty($email))
	                           <h3><i class="fa fa-envelope"></i>{{ $email }}</a></h3>
	                            @endif
	                        @endforeach
	                    @endif
						@if($default_section[6][0]['Contact No.'] != null)
                            @foreach($default_section[6][0]['Contact No.'] as $phone)
                                @if(!empty($phone))
                                  <h3><i class="fa fa-phone"></i>{{ $phone }}</h3>
                                @endif
                            @endforeach                       
                    	@endif
                    	@if($default_section[1][0]['Websites'] != null)
	                            @foreach($default_section[1][0]['Websites'] as $website)
	                                @if(!empty($website))
	                                   <h3><i class="fa fa-globe"></i><{{ $website }}</h3>
	                                @endif
	                            @endforeach
	                    @endif
	                    @if(!empty($default_section[6][0]['Address'][0]))
	                        <h3><i class="glyphicon glyphicon-map-marker"></i>{{ $default_section[6][0]['Address'][0] }}</h3>
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
					

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2>Web Design</h2>
									<p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
								</div>

								<div class="talent">
									<h2>Interface Design</h2>
									<p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
								</div>

								<div class="talent">
									<h2>Project Direction</h2>
									<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
								</div>
						</div>
					</div><!--// .yui-gf -->


					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2>Facebook</h2>
								<h3>Senior Interface Designer</h3>
								<h4>2005-2007</h4>
								<p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
							</div>

							<div class="job">
								<h2>Apple Inc.</h2>
								<h3>Senior Interface Designer</h3>
								<h4>2005-2007</h4>
								<p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
							</div>

							<div class="job">
								<h2>Microsoft</h2>
								<h3>Principal and Creative Lead</h3>
								<h4>2004-2005</h4>
								<p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
							</div>


							<div class="job last">
								<h2>International Business Machines (IBM)</h2>
								<h3>Lead Web Designer</h3>
								<h4>2001-2004</h4>
								<p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>Indiana University - Bloomington, Indiana</h2>
							<h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<!-- <div id="ft">
			<p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
		</div> --><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->