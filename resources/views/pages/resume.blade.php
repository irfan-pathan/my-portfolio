@extends('layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Resume</h1>
                        <p class="mb-0">Results-driven PHP Developer with over 3+ years of experience designing,
                            developing, and maintaining web applications
                            using Laravel, PHP, MySQL, and front-end technologies. Adept at building scalable backend
                            systems, developing
                            RESTful APIs, and delivering responsive user interfaces. Proven track record in full-stack
                            development, e-commerce
                            systems, and secure authentication systems.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Resume</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Sumary</h3>

                    <div class="resume-item pb-0">
                        <h4>Irfan Pathan</h4>
                        <p>An enthusiastic and skilled PHP Laravel Developer with 2 years of hands-on experience in
                            developing dynamic,
                            user-friendly web applications. Throughout my career, I have worked extensively with PHP,
                            particularly using the
                            Laravel Framework</p>
                        <ul>
                            <li>
                                Veer Tanaji Nagar , Section-39 Ulhasnagar-5 Bk-
                                1876
                            </li>
                            <li>7887762025</li>
                            <li>Irfanpathanppp@gmail.com</li>
                            <li>https://linkedin.com/in/irfan-pathan-06b2b7240</li>
                        </ul>
                    </div><!-- Edn Resume Item -->

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Bachelor of Information Technology</h4>
                        <h5>2019 - 2022</h5>
                        <p><em>mumbai university</em></p>
                        <p>Chandibai Himathmal Mansukhani College Ulhasnagar-3
                            Marks Obtained 80% In Bscit.</p>
                    </div><!-- Edn Resume Item -->

                    <div class="resume-item">
                        <h4>Collage</h4>
                        <h5>2017 - 2019</h5>
                        <p><em>mumbai university</em></p>
                        <p>New English High School & Jnr College Ulhasnagar
                            Marks Obtained In HSC - 69.70%</p>
                    </div><!-- Edn Resume Item -->

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Professional Experience</h3>

                    <div class="resume-item">
                        <h4>PHP Developer</h4>
                        <h5>May 2025 – Present</h5>
                        <p><em>Appdid Infotech LLP, Mumbai</em></p>
                        <ul>
                            <li>Leading the development of the <strong>Streamly project</strong> — a platform for managing
                                product shoots, event shoots, home shoots, and more.</li>
                            <li>Architecting and building scalable features using Laravel, ensuring high performance and
                                maintainability.</li>
                            <li>Integrated Easebuzz payment gateway and implemented a revenue-based advertisement model to
                                support monetization features within the application.</li>
                            <li>Mentoring junior developers and overseeing code quality, deployment cycles, and best
                                development practices.</li>
                        </ul>
                    </div>


                    <div class="resume-item">
                        <h4>Php developer</h4>
                        <h5>Mar-2024 - Apr-2025</h5>
                        <p><em>Nimap Infotech LLP, Mumbai</em></p>
                        <ul>
                            <li>Developing and maintaining high-performance Laravel-based applications.</li>
                            <li>Collaborating with cross-functional teams to implement new features and optimize
                                performance.</li>
                            <li>Wokerd with REST APIs Like Karza pan varification Api, Sms Api, Whatsapp Api </li>
                            <li>Used Functionality Like Redis, MongoDB, LoadBalancer</li>
                        </ul>
                    </div><!-- Edn Resume Item -->

                    <div class="resume-item">
                        <h4>PHP Developer
                        </h4>
                        <h5>Oct-2022 - Feb-2024</h5>
                        <p><em>Parasight Solutions, Kalyan</em></p>
                        <ul>
                            <li>Designed and implemented web applications using Laravel and Yii.</li>
                            <li>Collaborated in full lifecycle development of client projects.</li>
                            <li>Worked on database optimization and developed REST APIs.</li>
                            <li>Created Multiple ERP softwares</li>
                        </ul>
                    </div><!-- Edn Resume Item -->

                </div>

            </div>

        </div>

    </section><!-- /Resume Section -->
@endsection
