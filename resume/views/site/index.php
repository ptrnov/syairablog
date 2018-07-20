<?php
use resume\assets\AppAssetResume;
AppAssetResume::register($this); 

$this->registerCss('
.borderless {
  border:none;
 }
');

?>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
  <a class="navbar-brand js-scroll-trigger" href="#page-top">
    <span class="d-block d-lg-none">Piter Novian</span>
    <span class="d-none d-lg-block">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-1" src="http://resume.syaira.int/template/Resume/img/profile.jpg" alt="">
    </span>
  </a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#education">Education</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid p-0">
  <section class="resume-section p-3 p-lg-5" id="about">
    <div class="my-auto">
      <h1 class="mb-0">PITER
        <span class="text-primary">NOVIAN</span>
      </h1>
      <div class="subheading mb-5">
        <div class=" col-lg-12">
          <table class="">
              <tbody>
                <!-- <tr ><td><span class="fa fa-user"></span>   Piter Novian</td></tr>                 -->
                <tr ><td><span class="fa fa-phone" style="color:default"></span>  (021) 53132126</td></tr>
                <tr ><td><span class="fa fa-tablet fa-1x"></span> 085-883-319-929</td></tr>
                <tr ><td><span class="fa fa-envelope-o fa-1x"></span><a href="mailto:name@email.com"> ptr.nov@email.com</a></td></tr>
                <tr ><td><span class="fa fa-flag-o"></span>  Indonesia</td></tr>
                <tr ><td><span class="fa fa-home">  Perumahan Duta Bintaro Ubud 1 G32no 19, Kunciran Pinang Kota Tangerang.</td></tr>
              </tbody>
          </table>
          </div>
      </div>
      
      <div>
        <ul class="list-inline list-social-icons col-lg-12">
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-sm">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://github.com/ptrnov" target="_blank">
              <span class="fa-stack fa-sm">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
      
    <div class="subheading col-lg-12">
      <div class="row">      
        <br>
        <p style="text-align: justify;">
          My name is Piter Novian and I am 36 years old. I has graduated in February 2005  from Information Technology, bachelor degree of Teknik Informatika STIKI Malang. I am capable to develop software, server and network infrastructure.    
          I am a person who always wants to develop and upgrade my skills and experiences. I like to identify, predict, anticipate and solve problems. I am a responsible person, self motivated, dynamic, independent, high committed, good team player and have a positive and proactive mental attitude. I think with my competencies and strong motivation, I can make a valuable contribution to your company.</p>
        <p style="text-align: justify;">
          The enclosed resume will provide you with more details of my background. I would be very happy to have the opportunity to meet you to discuss how my background and qualifications could be of use to your company. Please feel free to contact me by phone (021- 53132126/085883319929) or at the address above. Thank you in advance for your time and consideration. 
        </p>
      </div>
    </div>     
    <div class="subheading mb-5">
      <div class=" col-lg-12">
          <br>
          <table>
              <tbody>
                <tr ><td>Sincerely yours,</td></tr>
              </tbody>
          </table>
          <br><br><br>
          <table>
              <tbody>
                <tr ><td><b>Piter Novian, S. Kom</b></td></tr>
              </tbody>
          </table>
      </div>
    </div>
      
  
  </div>
  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
    <div class="my-auto">
      <h2 class="mb-5">Skills</h2>

      <div class="subheading mb-3">Programming Languages &amp; Tools</div>
      <ul class="list-inline list-icons">
        <li class="list-inline-item">
          <i class="devicons devicon-php-plain"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-yii-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-laravel-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-ionic-original-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-typescript-plain"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-angularjs-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-html5-plain-wordmark"></i>
        </li>           
        <li class="list-inline-item">
          <i >Vb6</i>
        </li>           
        <li class="list-inline-item">
          <i >SqlServer</i>
        </li>           
        <li class="list-inline-item">
          <i class="devicons devicon-mysql-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-apache-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-photoshop-plain"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-android-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-github-plain-wordmark"></i>
        </li>     
        <li class="list-inline-item">
          <i class="devicons devicon-visualstudio-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-phpstorm-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-visualstudio-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-visualstudio-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-ubuntu-plain-wordmark"></i>
        </li>

      </ul>

      <div class="subheading mb-3">Workflow</div>
      <ul class="fa-ul mb-0">
        <li>
          <i class="fa-li fa fa-check"></i>
          Mobile-First, Responsive Design</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Cross Browser Testing &amp; Debugging</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Cross Functional Teams</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Agile Development &amp; Scrum</li>
      </ul>
    </div>
  </section>
  
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
    <div class="my-auto">
      <h2 class="mb-5">Experience</h2>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">IT Project Manager</h3>
          <div class="subheading mb-3">Application development, server and network infrastructure.</div>
          <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">March 2013 - Present</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Web Developer</h3>
          <div class="subheading mb-3">Intelitec Solutions</div>
          <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">December 2011 - March 2013</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Junior Web Designer</h3>
          <div class="subheading mb-3">Shout! Media Productions</div>
          <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">July 2010 - December 2011</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Web Design Intern</h3>
          <div class="subheading mb-3">Shout! Media Productions</div>
          <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">September 2008 - June 2010</span>
        </div>
      </div>

    </div>

  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
    <div class="my-auto">
      <h2 class="mb-5">Education</h2>
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">University of STIKI Malang</h3>
          <div class="subheading mb-3">Bachelor of Science</div>
          <p>GPA: 3.56</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">2000 - 2005</span>
        </div>
      </div>      
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Senior High School of SMK Nasional Malang</h3>
          <div class="subheading mb-3">Student Of Electrical Engineering</div>
          <p>GPA: 3.56</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">1997 - 2000</span>
        </div>
      </div>      
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Junior High School of Xaverius,Tanjung Sakti (Sum–Sel)</h3>
          <div class="subheading mb-3">Student</div>
          <p>GPA: 3.56</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">1994 - 1997</span>
        </div>
      </div>
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Elementary School of Xaverius,Tanjung Sakti (Sum–Sel)</h3>
          <div class="subheading mb-3">Student</div>
          <p>GPA: 3.56</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">1988 - 1994</span>
        </div>
      </div>

    </div>
  </section>

  

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
    <div class="my-auto">
      <h2 class="mb-5">Interests</h2>
      <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skiier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
      <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technolgy advancements in the front-end web development world.</p>
    </div>
  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
    <div class="my-auto">
      <h2 class="mb-5">Awards &amp; Certifications</h2>
      <ul class="fa-ul mb-0">
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          Google Analytics Certified Developer</li>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          Mobile Web Specialist - Google Certification</li>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          1<sup>st</sup>
          Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          1<sup>st</sup>
          Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          2<sup>nd</sup>
          Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
        <li>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          1<sup>st</sup>
          Place - James Buchanan High School - Hackathon 2006</li>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          3<sup>rd</sup>
          Place - James Buchanan High School - Hackathon 2005</li>
      </ul>
    </div>
  </section>

</div>


</body>