    <div class="wrapper">        
        <div class="main-wrapper col-xs-9">
                  @if($default_section[5] != null)
                    <section class="section summary-section">
                        <h2 class="section-title"><i class="fa fa-user"></i>Objective</h2>
                        <div class="summary">
                            <p>{{ $default_section[5][0]['Objective'][0] }}</p>
                        </div><!--//summary-->
                    </section><!--//section-->
                @endif
               @if($default_section[7] != null)
                    <section class="section experiences-section">
                        <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                        @foreach($default_section[7] as $section)
                            @if($section != null)
                                <div class="item">
                                    <div class="meta">
                                        <div class="upper-row">
                                            @if(!empty($section['Job Title'][0]))
                                                <h3 class="job-title">{{ $section['Job Title'][0] }}</h3>
                                            @endif                                
                                            @if(!empty($section['Start Date'][0]) or $section['End Date'][0])
                                                <div class="time">{{ $section['Start Date'][0] }} &#45;{{ $section['End Date'][0] }}</div>
                                            @endif                               
                                        </div><!--//upper-row-->
                                        @if(!empty($section['Company'][0]))
                                           <div class="company">{{ $section['Company'][0] }}</div>
                                        @endif                            
                                    </div><!--//meta-->
                                    @if(!empty($section))
                                        <div class="details">
                                            <p>{{ $section['Other Information'][0] }}</p>
                                        </div><!--//details-->
                                    @endif                        
                                </div><!--//item-->
                            @endif
                        @endforeach
                    </section><!--//section-->
                @endif
            
            @if($default_section[3] != null)
                <section class="section projects-section">
                    <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                    @foreach($default_section[3] as $section)
                            @if($section != null)
                                <div class="item">
                                    <span class="project-title"><a href="#hook">{{ $section['Project Name'][0] }}</a></span> - <span class="project-tagline">{{ $section['Project Description'][0] }}
                                    </span>                    
                                </div><!--//item-->
                            @endif
                        @endforeach
                </section><!--//section-->
            @endif

            @if($default_section[4] != null)
                @if(!empty($section['Skill'][0]))
                    <section class="skills-section section">
                    <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                    <div class="skillset">        
                        @foreach($default_section[4][0]['Skill'] as $skill)
                            <div class="item">
                                <h3 class="level-title">{{ $skill }}</h3>                                                              
                            </div><!--//item-->
                        @endforeach
                    </div>  
                </section><!--//skills-section-->
                @endif                
             @endif
           
            
        </div><!--//main-body-->
        <div class="sidebar-wrapper col-xs-3">
            <div class="profile-container">
               <!--  <img class="profile" src="assets/images/profile.png" alt="" /> -->
                @if(!empty($default_section[1][0]['Name'][0]))
                    <h1 class="name">{{ $default_section[1][0]['Name'][0] }}</h1>
                @endif
                <!-- <h3 class="tagline">Full Stack Developer</h3> -->
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    @if($default_section[1][0]['Email'] != null)
                        @foreach($default_section[1][0]['Email'] as $email)
                            @if(!empty($email))
                           <li class="email"><i class="fa fa-envelope"></i>{{ $email }}</li>
                            @endif
                        @endforeach
                    @endif
                   @if($default_section[6][0]['Contact No.'] != null)
                            @foreach($default_section[6][0]['Contact No.'] as $phone)
                                @if(!empty($phone))
                                  <li class="phone"><i class="fa fa-phone"></i><a href="#">{{ $phone }}</a></li>
                                @endif
                            @endforeach
                       
                    @endif
                    
                    @if($default_section[1][0]['Websites'] != null)
                            @foreach($default_section[1][0]['Websites'] as $website)
                                @if(!empty($website))
                                    <li class="website"><i class="fa fa-globe"></i><a href="#" target="_blank">{{ $website }}</a></li>
                                @endif
                            @endforeach
                    @endif
                    @if(!empty($default_section[6][0]['Address'][0]))
                        <li class="address"><i class="glyphicon glyphicon-map-marker"></i>{{ $default_section[6][0]['Address'][0] }}</li>
                    @endif
                    <!-- <li class="linkedin"><i class="fa fa-linkedin"></i><a href="#" target="_blank">linkedin.com/in/alandoe</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank">github.com/username</a></li> -->                    
                </ul>
            </div><!--//contact-container-->
            @if($default_section[2] != null)
                 <div class="education-container container-block">
                    <h2 class="container-block-title">Education</h2>
                    @foreach($default_section[2] as $section)
                            @if($section != null)
                                <div class="item">
                                    @if(!empty($section['Course Name'][0]))
                                        <h4 class="degree">{{ $section['Course Name'][0] }}</h4>
                                    @endif
                                    @if(!empty($section['Institution'][0]))
                                        <h5 class="meta">{{ $section['Institution'][0] }}</h5>
                                    @endif
                                    @if(!empty($section['Passing Year'][0]))
                                        <div class="time">{{ $section['Passing Year'][0] }}</div>
                                    @endif
                                    <!-- @if(!empty($section['Marks'][0]))
                                        <td class="percent">{{ $section['Marks'][0] }}</td>
                                    @endif -->
                                </div><!--//item-->                           
                            @endif
                        @endforeach
                </div><!--//education-container-->
            @endif
            @if(!empty($new_section))
                @foreach($new_section as $section_id => $section)
                    @if($section != null)
                        <div class="interests-container container-block">
                            <h2 class="container-block-title">{{ App\Section::find($section_id)->section_name }}</h2>
                            <ul class="list-unstyled interests-list">
                                @foreach($section[0][App\Section::find($section_id)->subsections->first()->subsection_name] as $subsection)
                                    @if(!empty($subsection))
                                        <li>
                                            {{ $subsection }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div><!--//interests-->   
                    @endif
                @endforeach
            @endif
                     
        </div><!--//sidebar-wrapper-->
    </div>