<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <body id="page-top">
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">
                        <span class="d-block d-lg-none">Konrad Max</span>
                        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="https://i.ibb.co/QjD26FL/Projekt-bez-tytu-u.png" alt="..." /></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('portfolio') }}">Portfolio</a></li>

                        </ul>
                    </div>
                </nav>
                <!-- Page Content-->
                <div class="container-fluid p-0">
                    <!-- About-->
                    <section class="resume-section" id="about">
                        <div class="resume-section-content">
                            <h1 class="mb-0">
                                Konrad
                                <span class="text-primary">Max</span>
                            </h1>
                            <div class="subheading mb-5">
                                Poleska 7, 59-300 Lubin · (+48) 535 998 616 ·
                                <a href="mailto:konradmax91@gmail.com">konradmax91@gmail.com</a>
                            </div>
                            <p class="lead mb-4">Self-driven Commercial Director with over 7 years of experience in
                                international trade. Expertise in procurement, sales, marketing,
                                negotiations and contracts. Possess excellent communication skills
                                regardless of the audience type. Strong team player and a great leader
                                with outstanding multitasking, analytical and problem-solving abilities.</p>
                                <p class="lead mb-5">Passionate about Web Development and learning new technologies.</p>
                            <div class="social-icons">
                                <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </section>
                    <hr class="m-0" />
                    <!-- Experience-->
                    <section class="resume-section" id="experience">
                        <div class="resume-section-content">
                            <h2 class="mb-5">Experience</h2>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">Commercial Director</h3>
                                    <div class="subheading mb-3">Colucci Polska Sp. z o.o.
                                        </div>
                                    <p>- Prepared, processed, and reviewed purchase orders, collected and
                                        analyzed purchasing data, and coordinated all deliveries.</br>
                                        - Built and maintained professional relationships with suppliers,
                                        researched various products, and negotiated prices and deals.</br>
                                        - Maintained and managed purchasing records, drafted agreements, and
                                        assisted in annual budget development and management.</br>
                                        - Collected and analyzed sales data, completed detailed sales and
                                        inventory forecasts, and produced monthly reports.</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">January 2019 - Present</span></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">Web Developer</h3>
                                    <div class="subheading mb-3">Intelitec Solutions</div>
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">Junior Web Designer</h3>
                                    <div class="subheading mb-3">Shout! Media Productions</div>
                                    <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">Web Design Intern</h3>
                                    <div class="subheading mb-3">Shout! Media Productions</div>
                                    <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                            </div>
                        </div>
                    </section>
                    <hr class="m-0" />
                    <!-- Education-->
                    <section class="resume-section" id="education">
                        <div class="resume-section-content">
                            <h2 class="mb-5">Education</h2>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">University of Colorado Boulder</h3>
                                    <div class="subheading mb-3">Bachelor of Science</div>
                                    <div>Computer Science - Web Development Track</div>
                                    <p>GPA: 3.23</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <div class="flex-grow-1">
                                    <h3 class="mb-0">James Buchanan High School</h3>
                                    <div class="subheading mb-3">Technology Magnet Program</div>
                                    <p>GPA: 3.56</p>
                                </div>
                                <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                            </div>
                        </div>
                    </section>
                    <hr class="m-0" />
                    <!-- Skills-->
                    <section class="resume-section" id="skills">
                        <div class="resume-section-content">
                            <h2 class="mb-5">Skills</h2>
                            <div class="subheading mb-3">Programming Languages & Tools</div>
                            <ul class="list-inline dev-icons">
                                <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                                <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                                <li class="list-inline-item"><i class="fa-brands fa-php"></i></li>
                                <li class="list-inline-item"><i class="fa-brands fa-laravel"></i></li>
                                <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                                <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                                <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                                <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                                <li class="list-inline-item"><i class="fa-brands fa-github"></i></li>
                                <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                            </ul>
                            <div class="subheading mb-3">Workflow</div>
                            <ul class="fa-ul mb-0">
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Mobile-First, Responsive Design
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Cross Browser Testing & Debugging
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Cross Functional Teams
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-check"></i></span>
                                    Agile Development & Scrum
                                </li>
                            </ul>
                        </div>
                    </section>
                    <hr class="m-0" />
                    <!-- Interests-->
                    <section class="resume-section" id="interests">
                        <div class="resume-section-content">
                            <h2 class="mb-5">Interests</h2>
                            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
                        </div>
                    </section>

                </div>
                </body>


                </div>
            </div>
        </div>
    </body>
</html>
