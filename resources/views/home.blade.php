<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karreola</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <!-- CSS -->
        <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Title Icon -->
        <link rel="icon" type="image/gif" href="{{ URL::asset('images/manicon.png') }}" />
        <!-- JavaScript -->
        <script src="{{ URL::asset('js/myscripts.js') }}"></script>

    </head>
    <body style="background-color: #000066; color: white;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>

        <div class="navbar navbar-fixed-top navbar-default" style="background-color: #000066; border: none;">
            <div class="navbar-left">
                Karreola
            </div>
            <div class="navbar-right">
                <a onclick="scrollTo('aboutHead')">About</a>
                <a onclick="scrollTo('edcnHead')">Education</a>
                <a onclick="scrollTo('prjtHead')">Projects</a>
                <div class="navbar-hamburger">
                    <span class="glyphicon glyphicon-menu-hamburger" style="margin: 5px auto"></span>
                </div>    
            </div>
        </div>

        <div class="backdrop">
            <img src="{{ URL::asset('images/vancouver.jpg') }}" alt="Vancouver Image"/>
        </div>
        <div class="content">
            <div class="flex-row" id="aboutRow">
                <div class="flex-col" id="about">
                    <div class="category" id="aboutHead">
                        <div class="category-heading">About Me</div>
                        <div class="category-body" style="padding: 0% 20%; padding-top: 10px">
                            <div class="flex-row" id="aboutItemsRow">
                                <div class="flex-col">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <p><span class="glyphicon glyphicon-tag"></span>Karl Arreola</p>
                                            <p><span class="glyphicon glyphicon-map-marker"></span>Coquitlam, BC</p>
                                            <p><span class="glyphicon glyphicon-align-center"></span>Full Stack Developer</p>
                                            <p><span class="glyphicon glyphicon-phone"></span>Mobile Developer</p>
                                            <p><span class="glyphicon glyphicon-console"></span>Software Developer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-col" style="align-items: flex-end;" id="linksCol" >
                                    <a href="https://www.linkedin.com/in/karl-arreola-410183100/" target="_blank">
                                        <img src="{{ URL::asset('images/linkedin.png') }}" alt="LinkedIn Logo" height=50px/>
                                    </a>
                                    <a href="https://github.com/karl-arreola" target="_blank">
                                        <img src="{{ URL::asset('images/github.png') }}" alt="Github Logo" height=50px style="margin-top: 10px;"/>
                                    </a>
                                </div>
                            </div>            
                        </div><!-- category-body -->
                    </div><!-- category -->
                </div><!-- col -->
                
                <div class="flex-col" id="skills">
                    <div class="category">
                        <div class="category-heading">Skills</div>
                        <div class="category-body">
                            <div class="flex-row" id="skillsItemsRow">
                                <div class="flex-col">
                                    <p><strong>Technical Skills</strong></p>
                                    <p>Web Development and Design:</p>
                                    <p>&bull; ASP.NET, PHP and JavaScript</p>
                                    <p>Entry level programming in:</p>
                                    <p>&bull; Java, C#, C++, C and SQL</p>
                                </div>
                                <div class="flex-col">
                                    <p><strong>Interpersonal Skills</strong></p>
                                    <p>Enjoy working in a team.</p>
                                    <p>Persistent work ethic.</p> 
                                    <p>Ability to work under pressure.</p>
                                    <p>Attentive to detail and quality.</p>
                                </div>
                            </div>            
                        </div><!-- category-body -->
                    </div><!-- category -->
                </div><!-- col -->
            </div><!-- row -->

            <div class="category" id="edcnHead">
                <div class="category-heading">Education</div>
                <div class="category-body">
                    <div class="flex-row">
                        <div class="flex-col">
                            <p><strong>British Columbia Institute of Technology (2015-2017)</strong></p>
                            
                            <p>Main Achievements:</p>
                            <p>&bull; <ins><i>Computer Systems Technology Diploma (Web and Mobile)</ins></i></p>
                            <p>&bull; Created webpages in HTML and PHP using tools such as Bootstrap, CSS, JQuery, and AJAX</p>
                            <p>&bull; Developed and deployed websites with ASP.NET, CodeIgniter and Laravel framework</p>
                            <p>&bull; Designed and implemented object oriented solutions for complex projects in Java, and C++</p>
                            <p>&bull; Stored to, retrieved from and created databases with MySQL, PostgreSQL, and MongoDB</p>
                            <p>&bull; Managed project changes with version control tools such as Git, GitHub, and BitBucket</p>
                            
                            <div id="edcn" class="divClose">
                                <p>Classes:</p>
                                <p>&bull; Term 1: Java 1, Applied Mathematics, Communcations 1, Business Introduction, CST Fundamentals, 
                                Computing Essentials, and Web Development</p>
                                <p>&bull; Term 2: Java 2, Communcations 2, Discrete Mathematics, C Programming, Database, Computer 
                                Architecture, and Projects 1</p>
                                <p>&bull; Term 3: C++ Programming, Data Communcations, Algorithms, Object Oriented Analysis and Design, 
                                Android, PHP Web Scripting, and Projects 2</p>
                                <p>&bull; Term 4: ASP.NET, CodeIgniter/Software Development, Computer Graphics, iOS, Business Law, Operating 
                                Systems, Career Preparation, and Projects 3</p>

                                <p>Programming Languages:</p>
                                <p>&bull; PHP, JavaScript, HTML, CSS, XML, Java, C#, C++, C, SQL, and Swift</p>
                            </div>
                            
                            <div class="expdBtn" onclick="openClose('edcn', 'edcnBtn')">
                                <span class="glyphicon glyphicon-triangle-bottom" id="edcnBtn"></span>
                            </div>
                        </div>
                    </div>            
                </div><!-- category-body -->
            </div><!-- category -->

            <div class="category" id="prjtHead">
                <div class="category-heading">Projects</div>
                <div class="category-body">
                    <div class="flex-row">
                        <div class="flex-col">
                            <p><strong>PhysioCards (1 month)</strong></p>
                            <p>An exercise regimen web app where users can log in, view, and customize their exercise routine such as 
                            changing the sets, reps, duration, weights, and exercise schedule. New users can sign up, existing users can 
                            sign in, and account information is editable.</p>

                            <p>Main Achievements:</p>
                            <p>&bull; Practiced agile scrum methodology by making a web app with a team of four developers</p>
                            <p>&bull; Assigned tasks and provided documentation using JIRA and Confluence</p>
                            <p>&bull; Consumed and created a REST API for a client side app in AngularJS</p>

                            <div id="prjt" class="divClose">
                                <p>Technologies:</p> 
                                <p>&bull; Java, Payara Server, PostgreSQL, and AngularJS</p>

                                <p>Team:</p> 
                                <p>&bull; Lydia Kim, Tom Minwoo Nam, and Kevin Tieu</p><br/>
                                
                                <p><strong>Medimap (4 months)</strong></p>
                                <p>A clinic information mobile app where users can search clinics around an area, favourite clinics, and find 
                                more info about each clinic. Each clinic shows a current status; certain wait time, closed, or at capacity. 
                                Clinics also show their address, phone number and hours. Users can choose to get directions to a certain clinic
                                or call a clinic from the app.</p>

                                <p>Main Achievements:</p>
                                <p>&bull; Worked with a client to create a cross platform app using React Native framework</p>
                                <p>&bull; Consumed a REST API with several JSON objects which contained multiple data types, and categories</p>
                                <p>&bull; Integrated google maps for locating clinics on a map and giving direction to the clinic</p>

                                <p>Technologies:</p> 
                                <p>&bull; React Native, Node.JS, MySQL, Android and iOS</p>

                                <p>Team:</p> 
                                <p>&bull; Ntori Nyamekye, Amir Shayegh, and Ryan Sirot</p>
                            </div>   

                            <div class="expdBtn" onclick="openClose('prjt','prjtBtn')">
                                <span class="glyphicon glyphicon-triangle-bottom" id="prjtBtn"></span>
                            </div> 
                        </div>
                    </div>            
                </div><!-- category-body -->
            </div><!-- category -->          
        </div><!-- content -->

        <div class="footer">
            Powered by Laravel
        </div>
    </body>
</html>
