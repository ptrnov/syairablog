<?php
use yii\helpers\Url;
use resume\assets\AppAssetResume;
AppAssetResume::register($this); 
use resume\assets\AppAssetPortpolio;
AppAssetPortpolio::register($this); 

$this->title = 'ptr.nov';
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
      <img class="img-fluid img-profile rounded-circle mx-auto mb-1" src="<?php echo Url::base(true);?>./template/Resume/img/profile.jpg" alt="">
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
        <a class="nav-link js-scroll-trigger" href="#portpolio">Portpolio</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
      </li> -->
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
                <tr ><td>
                  <span class="fa fa-envelope-o fa-1x">
                   <a href="mailto:name@email.com" style="text-transform: lowercase"> ptr.nov@email.com</a>
                  </span>
                </td></tr>
                <tr ><td><span class="fa fa-flag-o" style="text-transform: capitalize"> Indonesia</span></td></tr>
                <tr ><td><span class="fa fa-home" style="text-transform: capitalize">  Perumahan Duta Bintaro Ubud 1 G32no 19, Kunciran Pinang Kota Tangerang.</td></tr>
              </tbody>
          </table>
          </div>
      </div>
      
      <div>
        <ul class="list-inline list-social-icons col-lg-12">
          <li class="list-inline-item">
            <a href="https://www.linkedin.com/in/ptrnov" target="_blank" data-toggle="tooltip" title="Linkedin">
              <span class="fa-stack fa-sm">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
              </span>
            </a>Linkedin
          </li>
          <li class="list-inline-item">
            <a href="https://github.com/ptrnov" target="_blank" data-toggle="tooltip" title="Github Development Source">
              <span class="fa-stack fa-sm">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>Github
          </li>
         <li class="list-inline-item">
            <a href="#portpolio" data-toggle="tooltip" title="Development Demo">
              <span class="fa-stack fa-sm">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
              </span>
            </a>Portfolio
          </li>
        </ul>
      </div>
    </div>
      
    <div class="col-lg-12">
      <div class="row">      
        <br>
        <p style="text-align: justify;">
          My name is Piter Novian and I am 36 years old. I has graduated in February 2005  from Information Technology, bachelor degree of Teknik Informatika STIKI Malang. I am capable to develop software, server and network infrastructure.    
          I am a person who always wants to develop and upgrade my skills and experiences. I like to identify, predict, anticipate and solve problems. I am a responsible person, self motivated, dynamic, independent, high committed, good team player and have a positive and proactive mental attitude. I think with my competencies and strong motivation, I can make a valuable contribution to your company.</p>
        <!-- <p style="text-align: justify;text-transform: capitalize;"> -->
        <p style="text-align: justify;">
          The enclosed resume will provide you with more details of my background. I would be very happy to have the opportunity to meet you to discuss how my background and qualifications could be of use to your company. Please feel free to contact me by phone (021- 53132126/085883319929) or at the address above. Thank you in advance for your time and consideration. 
        </p>
      </div>
    </div>     
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
          <i class="devicons devicon-codeigniter-plain-wordmark"></i>
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
          <i class="devicons devicon-express-original-wordmark"></i>
        </li>                
		<li class="list-inline-item">
          <i class="devicons devicon-javascript-plain"></i>
        </li>
        <li class="list-inline-item">
          <h3 style="color:#999999;text-transform: capitalize"><i >Vb.6</i></h3>
        </li>                            
        <li class="list-inline-item">
          <i class="devicons devicon-mysql-plain-wordmark"></i>
        </li>
		<li class="list-inline-item">
		   <h3 style="color:#999999;text-transform: capitalize"><i>Sql-Server</i></h3>
        </li> 		
        <li class="list-inline-item">
          <i class="devicons devicon-apache-plain-wordmark"></i>
        </li>
		<li class="list-inline-item">
          <i class="devicons devicon-ubuntu-plain-wordmark"></i>
        </li>
		<li class="list-inline-item">
		   <h3 style="color:#999999;text-transform: capitalize"><i>Zimbra-Mail</i></h3>
        </li> 
		<li class="list-inline-item">
          <i class="devicons devicon-bootstrap-plain-wordmark"></i>
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
          <i class="devicons devicon-nodejs-plain-wordmark"></i>
        </li>  
        <li class="list-inline-item">
          <i class="devicons devicon-npm-original-wordmark"></i>
        </li>  
        <li class="list-inline-item">
          <i class="devicons devicon-phpstorm-plain-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-ssh-original-wordmark"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicon-visualstudio-plain-wordmark"></i>
        </li>


      </ul>

      <div class="subheading mb-3">Workflow</div>
      <ul class="fa-ul mb-0">
		<li>
          <i class="fa-li fa fa-check"></i>
			Agile &amp; Scrum development methodology.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
			Web Portal, Development using CodeIgniter,Yii2,Laravel.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
			API, Development using Yii2-Rasfull, ExpressJs.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
			Mobile (Android/IOS), Development using Ionic, AngularJs, TypesCript, SCSS and  XCode.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
			Responsive Template Design using Bootstrap.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
			Dasboard-Chart using fusioncharts.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
			Database using Mysql,SqlServer and Firebase.
		</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Cross Browser Testing &amp; Debugging.
		</li>        
        <li>
          <i class="fa-li fa fa-check"></i>
			Network &amp; Scurity Infrastucture development using Cisco Router,Cisco Catalyst, Mikrotik, Forinet and Juniper.
		</li>
      </ul>
    </div>
  </section>
  
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
    <div class="my-auto">
      <h2 class="mb-5">Experience</h2>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">PT. Kogam Artha Sejahtera</h3>
          <div class="subheading mb-3">IT Project Manager.</div>
          <p style="text-align: justify;">
             Company is involved in information technology services with Financial Technology products (FinTech). I as a project manager do the task of building from scratch, server infrastructure, network and scurity, also do the making of the application. For overview Infrastructure in general, using public network (ISP didicated) and server using API and Web-Portal, while for clients using web portal and mobile (Android and IOS).
          </p>
          <p style="text-align: justify;">
            For Server/network and security infrastructure, we are upgrading with powerful devices in the market such as (IBM/HP Server,Cisco Router, Cisco Catalyst, Microtik, Fortigate Firewall), some of which we use opensource applications (linux Ubuntu, Samba, VMware, Apache2, Mysql, Php, NodeJs, Npm, ExpressJs API, Rest API YII2).
          </p>
          <p style="text-align: justify;">
            For web portal application development we use Yii2/ Laravel/ CodeIgniter framework and for API using ExpressJs/ Restfull YII2 framework and our mobile (IOS/Android) clients use Ionic, AngularJs, TypeScript, SCSS. And for Tools with Visual Studio Code, Xcode, Notepad++, PhpStorm etc, As for Database using Mysql (DDL/DML,PL/SQL,Partition,Clustring).
          </p>
          <p style="text-align: justify;">
            From all of that, our main focus is "Business Flow". Since it all starts here we can start collecting data, map out approaches, build databases, and set targets to achieve. There are too many technical or conceptual compositions in this case, and I'm not enough place to explain them all, that's the picture I can explain here.
          </p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">Feb 2018 – Juli 2018</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">PT. Sarana Sinar Surya</h3>
          <div class="subheading mb-3">IT MANAGER.</div>
          <p style="text-align: justify;">
            The company is engaged in food/beverage and retail. To support the enterprise level between the branch, field operations / sales and headquarters, IT departments become one of the main business, transaction processing data, data mining for the needs of department Accounting, sales, HRD to obtain detailed data, including sales data, purchases, schadule, data of employee, payroll and operational data. Furthermore, we call ERP (Enterprise Resource Planning).
          </p>
          <p style="text-align: justify;">
            Our main task is to automatically generate reports and submit to all interested parties and build application solutions for surface support, GUI user interface, and deployment.
          </p>
          <p style="text-align: justify;">
            For cashier we use visual basic 6 program with sqlserver 2000 database support. As for ERP application between depertment we use Framework YII2. and for salesforce between sales in making visits using Android phones built from the Ionic Framework and Restful API.
          </p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">April 2014 – Jan 2018</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">PT. Eurogate Indonesia</h3>
          <div class="subheading mb-3">Chief IT.</div>
          <p style="text-align: justify;">
            The company is engaged in manufacrute garment. Where the head office is located in Cibinong Bogor, and its branches are located in Sukabumi and Myanmar country. The program we have developed is the supplychain program, starting from orders, master plans, product design, cost centers, material purchases, production schedules, warehause import exports.
          </p>
          <p style="text-align: justify;">
            Our infrastructure builds and develops data communications between branches very simply, using VPN (EOIP, PPTP). While the program we build with Visual Basic 6, also with SQLServer2000 database. And there are some internal applications that we build with Framework CodeIgniter such as HRD, GA departments, and transport schedules.
          </p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">Dec 2010 - March 2014</span>
        </div>
      </div>     

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">PT. Metro Batavia (Airline)</h3>
          <div>
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3">IT Server/Network Admin.</div>
                <p style="text-align: justify;">
                In infrastructure development there are several devices that we use such as Cisco Routers, Cisco Catalyst, Mikrotik, Juniper and Fortinet Firewalls, while for servers using (IBM, HP and UPS Redundant, Centos, Oracle) for DRC data centers in the Cybre building..
                </p>
              </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">November  2007 - march 2010</span>
            </div>
          </div>
          
          <div style="margin-top:-3em">
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3">IT Programing.</div>
                <p style="text-align: justify;">
                  In this department, we are assigned to create and build also to test the "Online Ticket" application or for internal "checkIn" at every airport in Indonesia. This program is built with PHP Native and with Oracle database.
                </p>
              </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">April 2007 - October 2007</span>
            </div>
          </div>

          <div style="margin-top:-3em">
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3">IT Helpdesk.</div>
                <p style="text-align: justify;">
                  In this department, we do the work by helping the client (Travel Agent) in the use of the application, installing the application, troubleshoot applications that both occur due to Permission Application, network problems or application errors. And very often we have to make a schedule to visit our clent throughout Indonesia to repair and install the application.
                </p>
              </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">September 2006 - march 2007</span>
            </div>
          </div>

          <div style="margin-top:-3em">
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3">IT Support Maintenance.</div>
                <p style="text-align: justify;">
                  To this company, a small part of "IT SUPPORT", we are building a network of several regional branch offices and airport branches, where the network is connected to an ISP (Internet Service Provider) with a VPN, VSAT service. In the past it still used "blangko tiket", for this reason it required maintenance of PCs, Printers and inter-branch network monitoring..
                </p>
              </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">May 2006 - Agustus 2006</span>
            </div>
          </div>

        </div>      
      </div>    
      
    </div>
  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
    <div class="my-auto">
      <h2 class="mb-5">Education</h2>
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">University</h3>
          <div class="subheading mb-3">Sekolah Tinggi Informatika dan Komputer Indonesia (STIKI) - Malang</div>
          <p>Bachelor of Science</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">2000 - 2005</span>
        </div>
      </div>      
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Senior High School </h3>
          <div class="subheading mb-3">SMK Nasional - Malang</div>
          <p>Student Of Electrical Engineering</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">1997 - 2000</span>
        </div>
      </div>      
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Junior High School</h3>
          <div class="subheading mb-3">Xaverius Tanjung Sakti - (Sumatra–Selatan)</div>
          <p>Student</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">1994 - 1997</span>
        </div>
      </div>
      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">Elementary School</h3>
          <div class="subheading mb-3">Xaverius Tanjung Sakti - (Sumatra–Selatan)</div>
          <p>Student</p>
        </div>
        <div class="resume-da te text-md-right">
          <span class="text-primary">1988 - 1994</span>
        </div>
      </div>

    </div>
  </section>

  

 <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portpolio">
    <div class="my-auto">
      <h2 class="mb-5">Portpolio</h2>
		<div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="http://doc1.syaira.net/" target="_blank"><img class="card-img-top" src="<?php echo Url::base(true);?>./apidoc.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="http://doc1.syaira.net/" target="_blank">API Documentation</a>
              </h4>
              <p class="card-text" style="text-align: justify;">
				Integrated is an API history, with that various API version levels can be compared.
				So it can be retraced what changed in the API since the last version.
			  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="http://cassalunapropertymandiri.com/portal/" target="_blank"><img class="card-img-top" src="<?php echo Url::base(true);?>./property.jpg"" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="http://cassalunapropertymandiri.com/portal/" target="_blank">Backend Web Portal</a>
              </h4>
              <p class="card-text" style="text-align: justify;">
				The web portal of "Property Bookings" is developed using the Laravel framework.
				<div style="font-size:10px;">
					<b>&#10173 Test demo admin </b>
					</br>
					&#9830 username : sonifirdaus34@gmail.com<br>
					&#9830 password : asdfgh
					</br>	
					<b>&#10173 Test demo user</b>
					</br>
					&#9830 Username : salman@gmail.com<br>
					&#9830 password : asdfgh
				</div>
			  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="http://93.188.164.106/pos/index.php/login/index" target="_blank"><img class="card-img-top" src="<?php echo Url::base(true);?>./distributor.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="http://93.188.164.106/pos/index.php/login/index" target="_blank">Poin Of Sales</a>
              </h4>
              <p class="card-text" style="text-align: justify;">
				The web portal of " Poin of Sales" is developed using the CodeIgniter.
				<div style="font-size:10px;">
					<a href="http://93.188.164.106/pos/index.php/admin" target="_blank"><b>&#10173 Test demo login sebagai distributor</b></a>
					</br>
					&#9830 username : administrator <br>
					&#9830 password : nb011015
					</br>	
					<a href="http://93.188.164.106/pos/index.php/admin" target="_blank"><b>&#10173 Test demo login sebagai reseller/ outlet</b></a>
					</br>
					&#9830 Username : 0110 <br>
					&#9830 password : asdfgh
				</div>
			  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

  <!-- <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
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
  </section> -->

</div>


</body>