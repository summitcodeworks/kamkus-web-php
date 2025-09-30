<?php
// Include configuration file
require_once 'src/includes/config.php';

// Set page-specific variables
$page_title = 'Kamkus College of Law - An ISO Certified Institution';
$page_description = 'Kamkus College of Law is a premier law institution in Delhi NCR offering comprehensive legal education with world-class facilities.';
$base_url = './';
// Array of recruiter logos updated to match the image
$recruiters = [
    ["src" => "https://www.cargill.co.in/image/1432080092113/cargill-color-logo.jpg?v=1732612277000", "alt" => "Cargill", "href" => "https://www.cargill.com/"],
    ["src" => "https://1000logos.net/wp-content/uploads/2017/12/GE-Logo-500x281.png", "alt" => "GE", "href" => "https://www.ge.com/"],
    ["src" => "https://images.seeklogo.com/logo-png/19/1/indian-oil-logo-png_seeklogo-198933.png", "alt" => "Indian Oil", "href" => "https://www.iocl.com/"],
    ["src" => "https://seekvectors.com/storage/images/Kotak%20Mahindra%20Bank.svg", "alt" => "Kotak", "href" => "https://www.kotak.com/"],
    ["src" => "https://logowik.com/content/uploads/images/pepsico4720.jpg", "alt" => "Pepsico", "href" => "https://www.pepsico.com/"],
    ["src" => "https://brandlogos.net/wp-content/uploads/2022/04/tata_consultancy_services-logo-brandlogos.net_.png", "alt" => "TCS", "href" => "https://www.tcs.com/"],
    ["src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Infosys_logo.svg/1280px-Infosys_logo.svg.png", "alt" => "Infosys", "href" => "https://www.infosys.com/"],
    ["src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Wipro_Primary_Logo_Color_RGB.svg/2560px-Wipro_Primary_Logo_Color_RGB.svg.png", "alt" => "Wipro", "href" => "https://www.wipro.com/"],
    ["src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/300px-IBM_logo.svg.png", "alt" => "IBM", "href" => "https://www.ibm.com/"],
    ["src" => "https://1000logos.net/wp-content/uploads/2021/12/Accenture-logo.jpg", "alt" => "Accenture", "href" => "https://www.accenture.com/"],
    ["src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png", "alt" => "Google", "href" => "https://www.google.com/"],
    ["src" => "https://msblogs.thesourcemediaassets.com/2012/08/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen.jpg", "alt" => "Microsoft", "href" => "https://www.microsoft.com/"],
    ["src" => "https://1000logos.net/wp-content/uploads/2016/10/Amazon-Logo-2000.png", "alt" => "Amazon", "href" => "https://www.amazon.com/"],
    ["src" => "https://brandlogos.net/wp-content/uploads/2020/11/flipkart-logo.png", "alt" => "Flipkart", "href" => "https://www.flipkart.com/"],
    ["src" => "https://logos-world.net/wp-content/uploads/2021/08/Deloitte-Logo.png", "alt" => "Deloitte", "href" => "https://www.deloitte.com/"],
];

// Include header
include 'src/includes/header.php';
?>

    <div class="news-ticker">
        <div class="container">
            <div class="ticker-content">
                <div class="ticker-item">
                    <span style="color: white"><a href="online">Click Here to Submit your Fee Online</a></span>
                    <span style="color: white"><a href="assets/pdf/aibe.pdf">Click Here to Practice For AIBE Exam</a></span>
                    <span style="color: white"><a href="https://kamkus.org/onlinetestmgt/index.html">Click Here to Practice For Judiciary Exam</a></span>
                    <span style="color: white"><a href="https://www.youtube.com/channel/UCD7n6MPZrC6WW0J5kiy-CRw/videos">Kamkus Official Youtube Channel</a></span>
                </div>
                <div class="ticker-item">
                    <span style="color: white"><a href="online">Click Here to Submit your Fee Online</a></span>
                    <span style="color: white"><a href="assets/pdf/aibe.pdf">Click Here to Practice For AIBE Exam</a></span>
                    <span style="color: white"><a href="https://kamkus.org/onlinetestmgt/index.html">Click Here to Practice For Judiciary Exam</a></span>
                    <span style="color: white"><a href="https://www.youtube.com/channel/UCD7n6MPZrC6WW0J5kiy-CRw/videos">Kamkus Official Youtube Channel</a></span>
                </div>
            </div>
        </div>
    </div>
    <section class="hero-slider">
        <div class="slider-container">
            <!-- Campus Images -->
            <div class="slide active">
                <img src="src/assets/public/carousel/IMG_0337.JPG" alt="Campus Image 1">
                <div class="slide-content">
                    <h2>Nurturing<br><span>Legal Excellence</span></h2>
                    <p>We provide a supportive environment for students to develop their legal expertise.</p>
                    <a href="#" class="btn">Explore Programs</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_0379.JPG" alt="Campus Image 2">
                <div class="slide-content">
                    <h2>Shaping<br><span>Future Leaders</span></h2>
                    <p>Join one of Delhi NCR's premier law institutions and embark on a journey towards excellence in
                        legal education.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_0384.JPG" alt="Campus Image 3">
                <div class="slide-content">
                    <h2>Fostering<br><span>Legal Expertise</span></h2>
                    <p>Our comprehensive academic programs prepare students for successful careers in various legal
                        domains.</p>
                    <a href="#" class="btn">Our Programs</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_0398.JPG" alt="Campus Image 4">
                <div class="slide-content">
                    <h2>Building<br><span>Legal Careers</span></h2>
                    <p>Practical learning through our world-class moot court facilities and experienced faculty.</p>
                    <a href="#" class="btn">Discover More</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_0982 (2).JPG" alt="Campus Image 5">
                <div class="slide-content">
                    <h2>Developing<br><span>Legal Minds</span></h2>
                    <p>Our supportive environment enables students to grow into skilled legal professionals ready for
                        the challenges ahead.</p>
                    <a href="#" class="btn">Join Us</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_0987.JPG" alt="Campus Image 6">
                <div class="slide-content">
                    <h2>Excellence in<br><span>Legal Education</span></h2>
                    <p>Modern infrastructure and state-of-the-art facilities for comprehensive legal training.</p>
                    <a href="#" class="btn">Campus Tour</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_0998 (2).JPG" alt="Campus Image 7">
                <div class="slide-content">
                    <h2>Inspiring<br><span>Legal Scholars</span></h2>
                    <p>Creating tomorrow's legal professionals through innovative teaching and practical experience.</p>
                    <a href="#" class="btn">Admissions</a>
                </div>
            </div>

            <!-- College Event Images -->
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_1471.JPG" alt="College Event">
                <div class="slide-content">
                    <h2>Vibrant<br><span>Campus Life</span></h2>
                    <p>Engaging student activities and events that enhance the academic experience.</p>
                    <a href="#" class="btn">Student Life</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2057.JPG"
                     alt="Academic Excellence">
                <div class="slide-content">
                    <h2>Academic<br><span>Excellence</span></h2>
                    <p>Commitment to providing quality education and fostering intellectual growth.</p>
                    <a href="#" class="btn">Academics</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2069.JPG"
                     alt="Student Activities">
                <div class="slide-content">
                    <h2>Student<br><span>Achievements</span></h2>
                    <p>Celebrating our students' success in various legal competitions and activities.</p>
                    <a href="#" class="btn">Achievements</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2071.JPG" alt="Legal Events">
                <div class="slide-content">
                    <h2>Legal<br><span>Workshops</span></h2>
                    <p>Regular workshops and seminars by industry experts and legal practitioners.</p>
                    <a href="#" class="btn">Events</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2082.JPG" alt="Campus Events">
                <div class="slide-content">
                    <h2>Cultural<br><span>Programs</span></h2>
                    <p>Rich cultural heritage and traditions that make our campus community special.</p>
                    <a href="#" class="btn">Culture</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2222.JPG"
                     alt="Student Engagement">
                <div class="slide-content">
                    <h2>Student<br><span>Engagement</span></h2>
                    <p>Active participation in moot courts, debates, and legal discussions.</p>
                    <a href="#" class="btn">Participate</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2225.JPG"
                     alt="College Celebrations">
                <div class="slide-content">
                    <h2>College<br><span>Celebrations</span></h2>
                    <p>Memorable moments and celebrations that bring our community together.</p>
                    <a href="#" class="btn">Community</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2257.JPG" alt="Academic Programs">
                <div class="slide-content">
                    <h2>Academic<br><span>Programs</span></h2>
                    <p>Comprehensive curriculum designed to meet modern legal industry requirements.</p>
                    <a href="#" class="btn">Programs</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2786.JPG"
                     alt="Learning Environment">
                <div class="slide-content">
                    <h2>Learning<br><span>Environment</span></h2>
                    <p>Conducive atmosphere for academic growth and professional development.</p>
                    <a href="#" class="btn">Facilities</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2796.JPG"
                     alt="College Activities">
                <div class="slide-content">
                    <h2>College<br><span>Activities</span></h2>
                    <p>Diverse extracurricular activities that complement academic learning.</p>
                    <a href="#" class="btn">Activities</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2797.jpg" alt="Student Community">
                <div class="slide-content">
                    <h2>Student<br><span>Community</span></h2>
                    <p>Building strong relationships and networks within our student community.</p>
                    <a href="#" class="btn">Connect</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2798.JPG" alt="Campus Events">
                <div class="slide-content">
                    <h2>Campus<br><span>Events</span></h2>
                    <p>Regular events and activities that enrich the student experience.</p>
                    <a href="#" class="btn">Events</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_2799.jpg" alt="Legal Education">
                <div class="slide-content">
                    <h2>Legal<br><span>Education</span></h2>
                    <p>Comprehensive legal education that prepares students for successful careers.</p>
                    <a href="#" class="btn">Education</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_3234.JPG"
                     alt="Academic Excellence">
                <div class="slide-content">
                    <h2>Academic<br><span>Excellence</span></h2>
                    <p>Maintaining high standards of education and academic achievement.</p>
                    <a href="#" class="btn">Excellence</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4162.JPG" alt="Student Success">
                <div class="slide-content">
                    <h2>Student<br><span>Success</span></h2>
                    <p>Supporting every student's journey towards academic and professional success.</p>
                    <a href="#" class="btn">Success</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4342.JPG" alt="Legal Training">
                <div class="slide-content">
                    <h2>Legal<br><span>Training</span></h2>
                    <p>Practical legal training that bridges the gap between theory and practice.</p>
                    <a href="#" class="btn">Training</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4345.JPG" alt="Campus Life">
                <div class="slide-content">
                    <h2>Campus<br><span>Life</span></h2>
                    <p>Experience the vibrant and dynamic campus environment that fosters learning and growth.</p>
                    <a href="#" class="btn">Experience</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4383.JPG" alt="Student Activities">
                <div class="slide-content">
                    <h2>Student<br><span>Activities</span></h2>
                    <p>Engaging activities and programs that enhance the overall student experience.</p>
                    <a href="#" class="btn">Activities</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4396.JPG" alt="Academic Excellence">
                <div class="slide-content">
                    <h2>Academic<br><span>Excellence</span></h2>
                    <p>Dedicated to maintaining the highest standards of academic excellence and achievement.</p>
                    <a href="#" class="btn">Excellence</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4397.JPG" alt="Learning Environment">
                <div class="slide-content">
                    <h2>Learning<br><span>Environment</span></h2>
                    <p>Creating an optimal learning environment that supports student success and growth.</p>
                    <a href="#" class="btn">Environment</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_4398.JPG" alt="Student Success">
                <div class="slide-content">
                    <h2>Student<br><span>Success</span></h2>
                    <p>Committed to supporting every student's journey towards academic and professional success.</p>
                    <a href="#" class="btn">Success</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_9095.JPG" alt="Legal Education">
                <div class="slide-content">
                    <h2>Legal<br><span>Education</span></h2>
                    <p>Comprehensive legal education that prepares students for successful careers in law.</p>
                    <a href="#" class="btn">Education</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_9358.JPG" alt="Campus Community">
                <div class="slide-content">
                    <h2>Campus<br><span>Community</span></h2>
                    <p>Building a strong and supportive community that fosters learning and personal growth.</p>
                    <a href="#" class="btn">Community</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_9410.JPG" alt="Academic Programs">
                <div class="slide-content">
                    <h2>Academic<br><span>Programs</span></h2>
                    <p>Diverse academic programs designed to meet the evolving needs of the legal profession.</p>
                    <a href="#" class="btn">Programs</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_9528.JPG" alt="Student Development">
                <div class="slide-content">
                    <h2>Student<br><span>Development</span></h2>
                    <p>Comprehensive development programs that prepare students for successful legal careers.</p>
                    <a href="#" class="btn">Development</a>
                </div>
            </div>
            <div class="slide">
                <img src="src/assets/public/carousel/IMG_9702.JPG" alt="Legal Excellence">
                <div class="slide-content">
                    <h2>Legal<br><span>Excellence</span></h2>
                    <p>Striving for excellence in legal education and professional development.</p>
                    <a href="#" class="btn">Excellence</a>
                </div>
            </div>

            <!-- Navigation buttons -->
            <button class="slider-nav prev"><</button>
            <button class="slider-nav next">></button>

            <!-- Indicators -->
            <div class="slider-indicators">
                <span class="indicator active" data-index="0"></span>
                <span class="indicator" data-index="1"></span>
                <span class="indicator" data-index="2"></span>
                <span class="indicator" data-index="3"></span>
                <span class="indicator" data-index="4"></span>
                <span class="indicator" data-index="5"></span>
                <span class="indicator" data-index="6"></span>
                <span class="indicator" data-index="7"></span>
                <span class="indicator" data-index="8"></span>
                <span class="indicator" data-index="9"></span>
                <span class="indicator" data-index="10"></span>
                <span class="indicator" data-index="11"></span>
                <span class="indicator" data-index="12"></span>
                <span class="indicator" data-index="13"></span>
                <span class="indicator" data-index="14"></span>
                <span class="indicator" data-index="15"></span>
                <span class="indicator" data-index="16"></span>
                <span class="indicator" data-index="17"></span>
                <span class="indicator" data-index="18"></span>
                <span class="indicator" data-index="19"></span>
                <span class="indicator" data-index="20"></span>
                <span class="indicator" data-index="21"></span>
                <span class="indicator" data-index="22"></span>
                <span class="indicator" data-index="23"></span>
                <span class="indicator" data-index="24"></span>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="about-container">
            <div class="about-header">
                <h2 class="about-title">About College</h2>
                <div class="about-divider"></div>
            </div>

            <div class="about-content">
                <div class="about-image-wrapper">
                    <div class="about-image-border-tl"></div>
                    <div class="about-image-border-br"></div>
                    <div class="about-image-container">
                        <img
                                src="src/assets/public/carousel/kam_cal_2.JPG"
                                alt="Kamkus College of Law Campus"
                                class="about-image"
                                style="display: block; margin: 0 auto;"
                        >
                    </div>
                </div>

                <div class="about-text">
                    <h3 class="about-heading">
                        Kamkus College of Law
                    </h3>

                    <p class="about-description" style="text-align: justify;">
                        The primary objective of the College is to evolve and impart comprehensive and interdisciplinary
                        legal education that is socially relevant.
                    </p>

                    <div class="about-quote">
                        <p class="about-description" style="text-align: justify;">
                            Through this education, we aim to promote legal and ethical values and foster the rule of
                            law and the objectives enshrined in the Constitution of India. Furthermore, the College
                            works toward dissemination of legal knowledge and its role in national development, so that
                            the ability to analyse and present contemporary issues of public concern and their legal
                            implications for the benefit of the public is improved.
                        </p>
                    </div>

                    <div class="about-buttons">
                        <a href="src/pages/about/college.php" class="about-btn about-btn-primary">
                            <span>Read More</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mentor-message">
        <div class="container">
            <h2 class="section-title">Chief Mentor's Message</h2>
            <div class="message-flex">
                <div class="message-image">
                    <img src="src/assets/public/main_heads/karunakar_shukla.jpg" alt="Mr. Karunakar Shukla - Chief Mentor"
                         style="display: block; margin: 0 auto;">
                    <div class="signature">
                        <p class="name">Mr. Karunakar Shukla</p>
                        <p class="designation">Chief Mentor</p>
                        <p class="college">Kamkus College of Law</p>
                    </div>
                </div>
                <div class="message-content">
                    <div class="message-heading">
                        <h3>Kamkus College of Law</h3>
                    </div>
                    <p style="text-align: justify;">Kamkus College of Law (KCL) takes immense pride in achieving
                        exceptional educational standards
                        within a remarkable seventeen years. We have flourished into one of the largest and most
                        comprehensive legal education centers, consistently securing top results within Chaudhary Charan
                        Singh University. This remarkable accomplishment is a direct testament to the unwavering
                        dedication and extensive experience of our faculty.</p>
                    <p style="text-align: justify;">KCL boasts a truly impressive infrastructure, including a
                        world-class moot court and a
                        meticulously curated library housing over 9,000 titles. We remain deeply humbled by these
                        achievements, recognizing the invaluable contributions of our distinguished alumni, exceptional
                        faculty, and the entire KCL community. We are firmly committed to upholding the ideal of
                        providing quality education at an accessible cost, retaining the distinction of offering the
                        most affordable fees among self-financing law colleges in the Delhi-NCR region.</p>
                    <p style="text-align: justify;">As Chief Mentor, I harbor a cherished vision for Kamkus College of
                        Law (KCL) to evolve into an
                        unparalleled center of legal education, accessible to students from all forms of life. I
                        wholeheartedly encourage every KCL student to embrace the role of a societal changemaker. We aim
                        to foster well-rounded individuals who are not only altruistic but also acutely aware of the
                        world around them.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="principal-message">
        <div class="container">
            <h2 class="section-title">Principal's Message</h2>
            <div class="message-flex">
                <div class="message-content">
                    <div class="message-heading">
                        <h3>Vision for Legal Education</h3>
                    </div>
                    <p style="text-align: justify;">In a populous nation like India, education stands as the paramount
                        driver of robust economic
                        growth and swift technological advancement. A well-educated citizen forms the bedrock of a
                        prosperous society. India's concept of a welfare state, emphasizing social justice and equality
                        for all, has naturally led to a stronger administrative apparatus. This is precisely why the
                        Constitution enshrines the pursuit of social, economic, and political justice, alongside the
                        fundamental rights of liberty and equality, as its core objectives.</p>
                    <p style="text-align: justify;">Within a democratic system, law serves a crucial function as an
                        instrument of social engineering.
                        Both law and education act as powerful mechanisms for social control and positive change,
                        particularly in developing societies. While the law's influence can be profound, its impact may
                        not be readily apparent to the casual observer.</p>
                    <p style="text-align: justify;">The Indian Constitution itself exemplifies this by making various
                        provisions to regulate
                        education. These include mandating compulsory education, ensuring educational facilities for
                        minorities, promoting linguistic diversity, prohibiting discrimination, and clearly defining the
                        educational jurisdiction of both the central and state governments. Notably, administrative law
                        continues to experience significant growth in developing societies.</p>
                    <p style="text-align: justify;">Kamkus College of Law cultivates a thriving environment that fosters
                        a strong teacher-student
                        relationship. Our well-equipped moot courtroom provides a dynamic platform for students to hone
                        their legal skills through practical application. Participation in moot court activities offers
                        invaluable experience, instilling confidence and igniting a passion for the law within our
                        students.</p>
                </div>
                <div class="message-image">
                    <img src="src/assets/public/main_heads/ambuj_sharma.jpg" alt="Principal Ambuj Sharma"
                         style="display: block; margin: 0 auto;">
                    <div class="signature">
                        <p class="name">Dr. Ambuj Sharma</p>
                        <p class="designation">Principal</p>
                        <p class="college">Kamkus College of Law</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <h2 class="gallery-title">Campus Gallery</h2>

            <!-- Gallery Carousel -->
            <div class="gallery-carousel-wrapper">
                <!-- Previous/Next Controls -->
                <button class="gallery-nav gallery-prev" onclick="changeGallerySlide(-1)" aria-label="Previous image">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <button class="gallery-nav gallery-next" onclick="changeGallerySlide(1)" aria-label="Next image">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>

                <div class="gallery-carousel" id="gallery-carousel">
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/yoga day.jpg" alt="Yoga Day Celebration" loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2023-06-27 at 3.40.48 PM (1).jpeg"
                             alt="Campus Event 2023" loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2022-08-16 at 1.05.51 PM.jpeg"
                             alt="Independence Day 2022" loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2022-08-16 at 1.05.50 PM (1).jpeg"
                             alt="Student Activity" loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2022-08-16 at 1.05.36 PM.jpeg" alt="Cultural Program"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2022-08-16 at 1.05.48 PM.jpeg" alt="Legal Workshop"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2022-06-02 at 3.03.42 PM (1).jpeg" alt="Seminar Session"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery-slide">
                        <img src="src/assets/public/gallery/WhatsApp Image 2022-05-27 at 11.58.04 AM(1).jpeg"
                             alt="Academic Conference" loading="lazy">
                        <div class="gallery-overlay">
                            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Dot Indicators -->
                <div class="gallery-indicators">
                    <button class="gallery-dot active" onclick="goToGallerySlide(0)"
                            aria-label="Go to slide 1"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(1)" aria-label="Go to slide 2"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(2)" aria-label="Go to slide 3"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(3)" aria-label="Go to slide 4"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(4)" aria-label="Go to slide 5"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(5)" aria-label="Go to slide 6"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(6)" aria-label="Go to slide 7"></button>
                    <button class="gallery-dot" onclick="goToGallerySlide(7)" aria-label="Go to slide 8"></button>
                </div>
            </div>

            <!-- Gallery Link Button -->
            <div class="gallery-button-wrapper">
                <a href="<?php echo $base_url; ?>student-corner/gallery.php" class="gallery-button">VIEW FULL
                    GALLERY</a>
            </div>
        </div>
    </section>

    <section class="news-events-section">
        <div class="container">
            <div class="news-events-grid">
                <div class="news-box">
                    <h3 class="section-box-title">Important News</h3>
                    <div class="news-content">
                        <div class="news-item">
                            <h4>URGENT PASSWORD CHANGE</h4>
                            <p>Pls Call for urgent password...</p>
                        </div>
                        <div class="news-item">
                            <h4>Testing News 2</h4>
                            <p>Testing News Testing News...</p>
                        </div>
                        <div class="news-item">
                            <h4>Testing</h4>
                            <p>Testing</p>
                        </div>
                        <div class="news-item">
                            <p>...</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="#" class="view-more">VIEW MORE</a>
                    </div>
                </div>

                <div class="news-box">
                    <h3 class="section-box-title">Important Information</h3>
                    <div class="news-content">
                        <div class="news-item">
                            <h4>Annual Day And Constitutional Day Celebration 'Tarang 23'</h4>
                            <p class="date">Date: 27th November, 2023</p>
                        </div>
                        <div class="news-item">
                            <h4>National Seminar on Legal Education</h4>
                            <p class="date">Date: 15th December, 2023</p>
                        </div>
                        <div class="news-item">
                            <h4>Moot Court Competition</h4>
                            <p class="date">Date: 20th January, 2024</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="#" class="view-more">VIEW MORE</a>
                    </div>
                </div>

                <div class="news-box whats-new">
                    <h3 class="section-box-title">What's New</h3>
                    <div class="new-items">
                        <a href="#">Click here to practice for judiciary Exam
                            <span class="news-date">14 2025</span>
                        </a>

                        <a href="#">Click here to practice for AIBE Exam
                            <span class="news-date">15 2025</span>
                            19 2024</span>
                        </a>

                        <a href="#">Kamkus Official Youtube Channel
                            <span class="news-date">15 2025</span>
                        </a>

                        <a href="#">Click here to submit your fee online
                            <span class="news-date">15 2025</span>
                        </a>
                        <a href="#">(Report on One-Day Workshop on 'VOTERS AWARENESS WORKSHOP' 19th APRIL: April 19,
                            2024
                            <span class="news-date">19 2024</span>
                        </a>
                        <a href="#">NATIONAL SEMINAR REPORT (B.N.S) 30 March, 2024
                            <span class="news-date">30 2024</span>
                        </a>
                        <a href="#">Yoga Day 05.06.2024
                            <span class="news-date">05.06.2024</span>
                        </a>
                        <a href="#">Samanya Gyan Pratiogita 23-08-2024 1-6
                            <span class="news-date">23.08.2024</span>
                        </a>
                        <a href="#">Bharat Vibhajan Vibhishika smriti Diwas-1-6
                            <span class="news-date">20.10.2018</span>
                        </a>
                        <a href="#">Empowering Youth as Peacebuilders 18.04.2024
                            <span class="news-date">18.04.2024</span>
                        </a>
                    </div>
                    <div class="box-footer">
                        <a href="#" class="view-more">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="flex">
                <div class="grid">
                    <!-- Courses -->
                    <a href="<?php echo $base_url; ?>academics/academics.php" class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 19.5C4 18.837 4.26339 18.2011 4.73223 17.7322C5.20107 17.2634 5.83696 17 6.5 17H20"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M6.5 2H20V22H6.5C5.83696 22 5.20107 21.7366 4.73223 21.2678C4.26339 20.7989 4 20.163 4 19.5V4.5-C4 3.83696 4.26339 3.20107 4.73223 2.73223C5.20107 2.26339 5.83696 2 6.5 2Z"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="title">Courses</h3>
                    </a>

                    <!-- Faculty -->
                    <a href="<?php echo $base_url; ?>about/college.php" class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="title">Faculty</h3>
                    </a>

                    <!-- Library -->
                    <a href="<?php echo $base_url; ?>infrastructure/library.php" class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6.042C10.3516 4.56536 8.2144 3.74882 6 3.75C4.948 3.75 3.938 3.93 3 4.262V18.512C3.96362 18.172 4.97816 17.9989 6 18C8.305 18 10.408 18.867 12 20.292M12 6.042C13.6483 4.56533 15.7856 3.74879 18 3.75C19.052 3.75 20.062 3.93 21 4.262V18.512C20.0364 18.172 19.0218 17.9989 18 18C15.7856 17.9988 13.6484 18.8154 12 20.292M12 6.042V20.292"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="title">Library</h3>
                    </a>

                    <!-- Publications -->
                    <a href="<?php echo $base_url; ?>academics/research.php" class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 19.5C4 18.837 4.26339 18.2011 4.73223 17.7322C5.20107 17.2634 5.83696 17 6.5 17H20"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M6.5 2H20V22H6.5C5.83696 22 5.20107 21.7366 4.73223 21.2678C4.26339 20.7989 4 20.163 4 19.5V4.5C4 3.83696 4.26339 3.20107 4.73223 2.73223C5.20107 2.26339 5.83696 2 6.5 2Z"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <line x1="8" y1="6" x2="16" y2="6" stroke="currentColor" strokeWidth="2"
                                      strokeLinecap="round"/>
                                <line x1="8" y1="10" x2="16" y2="10" stroke="currentColor" strokeWidth="2"
                                      strokeLinecap="round"/>
                                <line x1="8" y1="14" x2="16" y2="14" stroke="currentColor" strokeWidth="2"
                                      strokeLinecap="round"/>
                            </svg>
                        </div>
                        <h3 class="title">Publications</h3>
                    </a>

                    <!-- Jurist Speaks -->
                    <a href="#" class="card">
                        <div class="icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M16 21.5L12 17.5L8 21.5" stroke="currentColor" strokeWidth="2"
                                      strokeLinecap="round" strokeLinejoin="round"/>
                                <path d="M12 17.5V13.5" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M19 6C19.5304 6 20.0391 6.21071 20.4142 6.58579C20.7893 6.96086 21 7.46957 21 8C21 8.53043 20.7893 9.03914 20.4142 9.41421C20.0391 9.78929 19.5304 10 19 10"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                                <path d="M5 10C4.46957 10 3.96086 9.78929 3.58579 9.41421C3.21071 9.03914 3 8.53043 3 8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6"
                                      stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                      strokeLinejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="title">Jurist Speaks</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recruiters" aria-label="Our Recruiters">
        <div class="container">
            <h2>Our Recruiters</h2>
            <p class="subtitle">PARTNERING WITH LEADING ORGANIZATIONS</p>

            <div class="recruiters-carousel-wrapper">
                <div class="recruiters-carousel" id="recruiters-carousel">
                    <!-- First row -->
                    <div class="recruiter-row">
                        <?php
                        $firstRowRecruiters = array_slice($recruiters, 0, 8);
                        foreach ($firstRowRecruiters as $recruiter):
                            ?>
                            <div class="recruiter-item">
                                <a href="<?php echo $recruiter['href']; ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo $recruiter['src']; ?>" alt="<?php echo $recruiter['alt']; ?>"
                                         loading="lazy">
                                </a>
                            </div>
                        <?php endforeach; ?>

                        <!-- Duplicate for seamless scroll -->
                        <?php foreach ($firstRowRecruiters as $recruiter): ?>
                            <div class="recruiter-item">
                                <a href="<?php echo $recruiter['href']; ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo $recruiter['src']; ?>" alt="<?php echo $recruiter['alt']; ?>"
                                         loading="lazy">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Second row -->
                    <div class="recruiter-row reverse">
                        <?php
                        $secondRowRecruiters = array_slice($recruiters, 8);
                        foreach ($secondRowRecruiters as $recruiter):
                            ?>
                            <div class="recruiter-item">
                                <a href="<?php echo $recruiter['href']; ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo $recruiter['src']; ?>" alt="<?php echo $recruiter['alt']; ?>"
                                         loading="lazy">
                                </a>
                            </div>
                        <?php endforeach; ?>

                        <!-- Duplicate for seamless scroll -->
                        <?php foreach ($secondRowRecruiters as $recruiter): ?>
                            <div class="recruiter-item">
                                <a href="<?php echo $recruiter['href']; ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo $recruiter['src']; ?>" alt="<?php echo $recruiter['alt']; ?>"
                                         loading="lazy">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews-header">
                <h2>Featured Reviews</h2>
                <p class="reviews-subtitle">WE HAVE YEARS OF EXCELLENCE IN MAKING SUCCESSFUL LAW CAREER</p>
            </div>
            <div class="reviews-content">
                <div class="overall-rating">
                    <span>4.6</span>
                    <div class="stars">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p>Overall Rating</p>
                </div>
                <div class="review-grid">
                    <div class="review-item">
                        <div class="profile-initial">N</div>
                        <div class="review-content">
                            <div class="review-header">
                                <h4>Neha Sharma</h4>
                                <div class="stars">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
                            <p>College give us opportunity to attend the conference. Very nice experience at NATIONAL
                                CONFERENCE ON ENVIRONMENT</p>
                            <span class="timestamp">a month ago</span>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="profile-initial">A</div>
                        <div class="review-content">
                            <div class="review-header">
                                <h4>Abhiksha Singh Choudhary</h4>
                                <div class="stars">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
                            <p>It's my second day here and so far I am enjoying the environment of this place! Will
                                write a detailed review after few weeks.</p>
                            <span class="timestamp">9 months ago</span>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="profile-initial">A</div>
                        <div class="review-content">
                            <div class="review-header">
                                <h4>Akansha Jaiswal</h4>
                                <div class="stars">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
                            <p>Clg provide us sample copy of all the subjects which are very helpful for our exams.
                                Sample copy is based on previous year questions. I really liked it.</p>
                            <span class="timestamp">2 weeks ago</span>
                        </div>
                    </div>
                </div>
                <div class="view-all-reviews">
                    <a href="https://www.google.com/search?q=KAMKUS+COLLEGE+OF+LAW&rlz=1C5CHFA_enIN1061IN1061&sourceid=chrome&ie=UTF-8#lrd=0x390cf174f2b24a31:0x6f970d277e0b03b9,1,,,"
                       target="_blank" rel="noopener noreferrer" class="view-all-btn">
                        VIEW ALL REVIEWS ↗
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Dialog -->
    <div id="admission-dialog" class="dialog">
        <div class="dialog-content">
            <!-- Banner Section -->
            <div class="banner">
                <!-- Gradient Background -->
                <div class="gradient-bg">
                    <!-- Decorative Elements -->
                    <div class="decorative-elements">
                        <div class="circle-top-left"></div>
                        <div class="circle-top-right"></div>
                        <div class="circle-bottom-left"></div>
                    </div>
                </div>

                <!-- Content -->
                <div class="banner-content">
                    <h2>
                        Admissions Open
                        <span>2025-26!</span>
                    </h2>
                    <p>Join one of Delhi NCR's premier law institutions</p>
                </div>

                <!-- Close button -->
                <button id="close-dialog" class="close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="content">
                <p class="limited-seats">
                    🎯 Limited seats available!
                </p>

                <!-- Course List -->
                <div class="course-list">
                    <div class="course-item">
                        <div class="icon">📚</div>
                        <div>
                            <span>BA.LLB (5 Years Integrated Course)</span>
                            <span>Integrated program combining Bachelor's and Law degrees</span>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="icon">⚖️</div>
                        <div>
                            <span>LLB (3 Years Course)</span>
                            <span>Professional law degree program</span>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="icon">🎓</div>
                        <div>
                            <span>LLM (2 Years Course)</span>
                            <span>Master's program in specialized legal studies</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <a href="src/pages/academics/academics.php" class="apply-btn">
                        Apply Now →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Chatzy Widget Integration -->
    <link
            rel="stylesheet"
            href="https://chatzy-kb-store.s3.amazonaws.com/icons/5ab07987-b5db-477c-82ff-1287e0883acb"
    />

    <script
            src="https://chatzy-kb-store.s3.amazonaws.com/icons/56706cc4-b3ba-4eba-9610-f2fb07008a5c"
            id="9f087f95-c72a-404e-8541-9d2b4be74de6"
            class="chatzy_widget_script"
            defer
    ></script>

    <style>
        /* Existing styles remain unchanged */
        .dialog {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 50;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.2s ease, visibility 0.2s ease;
        }

        .dialog.open {
            opacity: 1;
            visibility: visible;
        }

        .dialog-content {
            background-color: white;
            border-radius: 0.75rem;
            max-width: 600px;
            width: 90%;
            overflow: hidden;
            transform: scale(0.95);
            transition: transform 0.2s ease;
        }

        .dialog.open .dialog-content {
            transform: scale(1);
        }

        .banner {
            position: relative;
            height: 200px;
            width: 100%;
            overflow: hidden;
        }

        .gradient-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, #293B45, #1a365d, #D4AF37);
        }

        .decorative-elements {
            position: absolute;
            inset: 0;
            opacity: 0.2;
        }

        .circle-top-left {
            position: absolute;
            top: 0;
            left: 0;
            width: 160px;
            height: 160px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .circle-top-right {
            position: absolute;
            top: 50%;
            right: 0;
            width: 128px;
            height: 128px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(50%, -50%);
        }

        .circle-bottom-left {
            position: absolute;
            bottom: 0;
            left: 33.333%;
            width: 96px;
            height: 96px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translateY(50%);
        }

        .banner-content {
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem;
            color: white;
        }

        .banner-content h2 {
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .banner-content h2 span {
            display: block;
            color: #D4AF37;
            margin-top: 0.25rem;
            font-family: 'Cambria', 'Cambria Math', serif;
        }

        .banner-content p {
            font-size: 1.125rem;
            max-width: 28rem;
            opacity: 0.9;
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s ease;
            background: none;
            border: none;
            cursor: pointer;
        }

        .close-btn:hover {
            color: white;
        }

        .content {
            padding: 2rem;
        }

        .limited-seats {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
        }

        .limited-seats svg {
            color: #D4AF37;
            fill: currentColor;
            flex-shrink: 0;
        }

        .course-list {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .course-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1rem;
            background-color: #f7f7f7;
            border-radius: 0.75rem;
            transition: background-color 0.3s ease;
        }

        .course-item:hover {
            background-color: #f0f0f0;
        }

        .course-item .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #D4AF37;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: white;
            flex-shrink: 0;
            font-size: 28px;
        }

        .course-item .icon svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
            stroke: currentColor;
        }

        .course-item:hover .icon {
            transform: scale(1.1);
            background: #E4B840;
        }

        .course-item span:first-child {
            color: #333;
            font-weight: 500;
            display: block;
        }

        .course-item span:last-child {
            color: #666;
            font-size: 0.875rem;
        }

        .action-buttons {
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        /* Mobile Responsive Styles for Dialog */
        @media (max-width: 768px) {
            .dialog {
                padding: 10px;
                align-items: flex-start;
                padding-top: 20px;
            }
            
            .dialog-content {
                max-width: none;
                width: 100%;
                margin: 0;
                max-height: calc(100vh - 40px);
                overflow-y: auto;
                border-radius: 8px;
            }
            
            .banner {
                height: 150px;
            }
            
            .banner-content {
                padding: 1rem;
            }
            
            .banner-content h2 {
                font-size: 1.5rem;
                margin-bottom: 0.25rem;
            }
            
            .banner-content p {
                font-size: 0.9rem;
                max-width: none;
            }
            
            .close-btn {
                top: 0.5rem;
                right: 0.5rem;
                width: 32px;
                height: 32px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(0, 0, 0, 0.5);
                border-radius: 50%;
                z-index: 51;
            }
            
            .close-btn svg {
                width: 20px;
                height: 20px;
            }
            
            .content {
                padding: 1rem;
            }
            
            .limited-seats {
                font-size: 1.1rem;
                text-align: center;
                margin-bottom: 1rem;
            }
            
            .course-item {
                padding: 0.75rem;
                gap: 0.75rem;
            }
            
            .course-item .icon {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }
            
            .course-item span:first-child {
                font-size: 0.9rem;
            }
            
            .course-item span:last-child {
                font-size: 0.8rem;
            }
            
            .action-buttons {
                margin-top: 1rem;
            }
            
            .apply-btn {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
                text-align: center;
            }
            
            /* Decorative elements adjustment for mobile */
            .circle-top-left {
                width: 100px;
                height: 100px;
            }
            
            .circle-top-right {
                width: 80px;
                height: 80px;
            }
            
            .circle-bottom-left {
                width: 60px;
                height: 60px;
            }
        }
        
        @media (max-width: 480px) {
            .dialog {
                padding: 5px;
                padding-top: 10px;
            }
            
            .dialog-content {
                border-radius: 6px;
                max-height: calc(100vh - 20px);
            }
            
            .banner {
                height: 120px;
            }
            
            .banner-content {
                padding: 0.75rem;
            }
            
            .banner-content h2 {
                font-size: 1.25rem;
                line-height: 1.2;
            }
            
            .banner-content p {
                font-size: 0.8rem;
            }
            
            .close-btn {
                top: 0.25rem;
                right: 0.25rem;
                width: 28px;
                height: 28px;
            }
            
            .close-btn svg {
                width: 16px;
                height: 16px;
            }
            
            .content {
                padding: 0.75rem;
            }
            
            .limited-seats {
                font-size: 1rem;
            }
            
            .course-item {
                padding: 0.5rem;
                gap: 0.5rem;
                flex-direction: column;
                text-align: center;
            }
            
            .course-item .icon {
                width: 40px;
                height: 40px;
                font-size: 20px;
                margin: 0 auto;
            }
            
            .course-item span:first-child {
                font-size: 0.85rem;
            }
            
            .course-item span:last-child {
                font-size: 0.75rem;
            }
            
            .apply-btn {
                padding: 0.65rem 0.75rem;
                font-size: 0.85rem;
            }
        }
        
        @media (max-width: 360px) {
            .banner-content h2 {
                font-size: 1.1rem;
            }
            
            .banner-content p {
                font-size: 0.75rem;
            }
            
            .limited-seats {
                font-size: 0.9rem;
            }
            
            .course-item span:first-child {
                font-size: 0.8rem;
            }
            
            .course-item span:last-child {
                font-size: 0.7rem;
            }
        }
        
        /* Ensure dialog is scrollable on very small screens */
        @media (max-height: 600px) {
            .dialog {
                align-items: flex-start;
                padding-top: 10px;
            }
            
            .dialog-content {
                max-height: calc(100vh - 20px);
                overflow-y: auto;
                /* Smooth scrolling on mobile */
                -webkit-overflow-scrolling: touch;
            }
            
            .banner {
                height: 100px;
            }
            
            .banner-content h2 {
                font-size: 1.2rem;
            }
            
            .banner-content p {
                font-size: 0.8rem;
            }
        }
        
        /* Additional mobile enhancements */
        @media (max-width: 768px) {
            /* Ensure touch-friendly interactions */
            .close-btn {
                -webkit-tap-highlight-color: transparent;
                user-select: none;
            }
            
            /* Smooth scrolling for dialog content */
            .dialog-content {
                -webkit-overflow-scrolling: touch;
                scroll-behavior: smooth;
            }
            
            /* Prevent zoom on double tap for dialog content */
            .dialog-content * {
                touch-action: manipulation;
            }
        }

        @media (min-width: 640px) {
            .action-buttons {
                flex-direction: row;
            }
        }

        .apply-btn {
            flex: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            background: linear-gradient(to right, #007bff, #28a745);
            color: white;
            padding: 0.875rem 1.5rem;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .apply-btn:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }

        .section {
            padding: 4rem 0;
            background-color: #293B45; /* Adjust to your primary color */
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1rem;
            color: #293B45;
        }

        .flex {
            display: flex;
            justify-content: center;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 0.125rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: box-shadow 0.3s;
            text-decoration: none;
            color: #293B45;
        }

        .card:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .icon {
            color: #293B45; /* Adjust to your primary color */
            margin-bottom: 1rem;
        }

        .icon svg {
            width: 48px;
            height: 48px;
        }

        .title {
            text-align: center;
            font-weight: 500;
            color: #293B45; /* Adjust to your primary color */
        }

        /* Recruiters Section */
        .recruiters {
            padding: 5rem 0;
            background-color: #ffffff !important;
            text-align: center;
            overflow: hidden;
        }

        .recruiters .container {
            max-width: 90%;
            margin: 0 auto;
            padding: 0 2.5rem;
        }

        .recruiters h2 {
            font-size: 2.25rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 1rem;
        }

        .recruiters .subtitle {
            font-size: 1.125rem;
            color: #6b7280;
            max-width: 32rem;
            margin: 0 auto 3rem;
        }

        .recruiters-carousel-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 2rem 0;
        }

        .recruiters-carousel {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .recruiter-row {
            display: flex;
            animation: scroll-left 30s linear infinite;
            gap: 2rem;
            min-width: fit-content;
        }

        .recruiter-row.reverse {
            animation: scroll-right 25s linear infinite;
        }

        .recruiter-item {
            flex: 0 0 auto;
            width: 200px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            padding: 1rem;
        }

        .recruiter-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .recruiter-item a {
            display: block;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .recruiter-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
            filter: grayscale(0.2);
            display: block;
            margin: 0 auto;
        }

        .recruiter-item:hover img {
            transform: scale(1.05);
            filter: grayscale(0);
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes scroll-right {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(0);
            }
        }

        /* Pause animation on hover */
        .recruiters-carousel-wrapper:hover .recruiter-row {
            animation-play-state: paused;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .recruiter-item {
                width: 180px;
                height: 90px;
            }
        }

        @media (max-width: 768px) {
            .recruiters {
                padding: 3rem 0;
            }

            .recruiters h2 {
                font-size: 1.875rem;
            }

            .recruiter-item {
                width: 150px;
                height: 80px;
                padding: 0.75rem;
            }

            .recruiter-row {
                gap: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .recruiter-item {
                width: 120px;
                height: 70px;
                padding: 0.5rem;
            }

            .recruiter-row {
                gap: 1rem;
            }
        }

        .reviews {
            padding: 5rem 0;
            background-color: #f9fafb;
        }

        .reviews .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 2.5rem;
            background-color: #1e2937;
            border-radius: 0.75rem;
            pointer-events: none;
        }

        .reviews-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .reviews h2 {
            color: #ffffff;
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .reviews-subtitle {
            color: #6B7280;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .reviews-content {
            pointer-events: auto; /* Re-enable pointer events for the content */
        }

        .overall-rating {
            text-align: center;
            margin-bottom: 2rem;
        }

        .overall-rating span {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
        }

        .overall-rating .stars {
            display: inline-flex;
            color: #D4AF37;
            font-size: 1.5rem;
            margin: 0.5rem 0;
        }

        .overall-rating p {
            font-size: 1rem;
            color: #ffffff;
            opacity: 0.8;
        }

        .review-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
            margin-bottom: 2rem;
        }

        .review-item {
            display: flex;
            gap: 1rem;
            color: #ffffff;
        }

        .profile-initial {
            width: 40px;
            height: 40px;
            background-color: #4a5568;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .review-content {
            flex: 1;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .review-header h4 {
            font-size: 1rem;
            font-weight: 600;
            color: #ffffff;
        }

        .stars {
            display: inline-flex;
            color: #D4AF37;
            font-size: 1rem;
        }

        .review-header .stars {
            display: flex;
            color: #D4AF37;
            font-size: 1rem;
        }

        .review-content p {
            color: #d1d5db;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            line-height: 1.5;
            text-align: justify;
        }

        .timestamp {
            color: #9ca3af;
            font-size: 0.75rem;
            font-style: italic;
        }

        .view-all-reviews {
            text-align: center;
            margin-top: 2rem;
        }

        .view-all-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: #D4AF37;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            pointer-events: auto; /* Ensure the button remains clickable */
        }

        .view-all-btn:hover {
            background-color: #c4a030;
        }

        @media (max-width: 1024px) {
            .review-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .review-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Consolidated styles for mentor-message and principal-message */
        .mentor-message, .principal-message {
            padding: 4rem 0;
        }

        .mentor-message .container, .principal-message .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .mentor-message .section-title, .principal-message .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .mentor-message .message-flex, .principal-message .message-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            align-items: flex-start;
        }

        .mentor-message .message-content, .principal-message .message-content {
            flex: 1;
            min-width: 300px;
        }

        .mentor-message .message-heading h3, .principal-message .message-heading h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .mentor-message .message-content p, .principal-message .message-content p {
            margin-bottom: 1rem;
            line-height: 1.6;
            text-align: justify;
        }

        .mentor-message .message-image, .principal-message .message-image {
            flex: 0 0 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .mentor-message .message-image img, .principal-message .message-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        .mentor-message .signature, .principal-message .signature {
            text-align: left;
            margin-top: 1rem;
        }

        .mentor-message .signature p, .principal-message .signature p {
            margin: 0.2rem 0;
            line-height: 1.4;
        }

        .mentor-message .signature .name, .principal-message .signature .name {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .mentor-message .signature .designation, .principal-message .signature .designation {
            font-style: italic;
            font-size: 1rem;
        }

        .mentor-message .signature .college, .principal-message .signature .college {
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .mentor-message .message-flex, .principal-message .message-flex {
                flex-direction: column;
                align-items: center;
            }

            .mentor-message .message-image, .principal-message .message-image {
                flex: 0 0 auto;
                max-width: 100%;
            }

            .mentor-message .signature, .principal-message .signature {
                text-align: center;
            }
        }

        /* Chatzy widget styles */
        .chatzy-chatbot-wrapper {
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 1000;
        }

        @media (max-width: 768px) {
            .chatzy-chatbot-wrapper {
                bottom: 80px;
            }
        }

        button[aria-label="Scroll to top"] {
            z-index: 99999 !important;
            visibility: visible !important;
            opacity: 1 !important;
        }

        /* Global Image Alignment */
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        /* Gallery Section Styles */
        .gallery-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, #293B45 0%, #1e2937 100%);
            position: relative;
        }

        .gallery-section .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .gallery-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="0.5" fill="%23ffffff" opacity="0.03"/><circle cx="80" cy="80" r="0.3" fill="%23ffffff" opacity="0.02"/><circle cx="40" cy="60" r="0.4" fill="%23ffffff" opacity="0.025"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }

        .gallery-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 3rem;
            position: relative;
            z-index: 1;
        }

        .gallery-carousel-wrapper {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 0.75rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .gallery-carousel {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            height: 400px;
            margin: 0;
            padding: 0;
        }

        .gallery-slide {
            min-width: 100%;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            margin: 0;
            padding: 0;
            flex-shrink: 0;
        }

        .gallery-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
            display: block;
            margin: 0 auto;
        }

        .gallery-slide:hover img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-slide:hover .gallery-overlay {
            opacity: 1;
        }

        .expand-icon {
            width: 48px;
            height: 48px;
            color: white;
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        .gallery-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .gallery-nav:hover {
            background: rgba(0, 0, 0, 0.8);
            opacity: 1;
            transform: translateY(-50%) scale(1.1);
        }

        .gallery-prev {
            left: 1rem;
        }

        .gallery-next {
            right: 1rem;
        }

        .gallery-indicators {
            position: absolute;
            bottom: 1rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.5rem;
            z-index: 10;
        }

        .gallery-dot {
            width: 12px;
            height: 12px;
            border: none;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-dot.active {
            background: #D4AF37;
            width: 24px;
            border-radius: 12px;
        }

        .gallery-dot:hover {
            transform: scale(1.2);
        }

        .gallery-button-wrapper {
            text-align: center;
            margin-top: 3rem;
            position: relative;
            z-index: 1;
        }

        .gallery-button {
            display: inline-block;
            background: #D4AF37;
            color: white;
            padding: 12px 32px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .gallery-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .gallery-button:hover::before {
            left: 100%;
        }

        .gallery-button:hover {
            background: #E4B840;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.3);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .gallery-section {
                padding: 2rem 0;
            }

            .gallery-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }

            .gallery-carousel {
                height: 280px;
            }

            .gallery-nav {
                width: 40px;
                height: 40px;
            }

            .gallery-prev {
                left: 0.5rem;
            }

            .gallery-next {
                right: 0.5rem;
            }

            .expand-icon {
                width: 32px;
                height: 32px;
            }
        }

        @media (max-width: 480px) {
            .gallery-carousel {
                height: 240px;
            }

            .gallery-button {
                padding: 10px 24px;
                font-size: 0.8rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dialog = document.getElementById('admission-dialog');
            const closeBtn = document.getElementById('close-dialog');

            // Show dialog on page load
            dialog.classList.add('open');
            // Prevent body scroll when dialog is open
            document.body.style.overflow = 'hidden';

            function closeDialog() {
                dialog.classList.remove('open');
                // Restore body scroll
                document.body.style.overflow = '';
            }

            // Close dialog when close button is clicked
            closeBtn.addEventListener('click', function (event) {
                console.log('Close button clicked');
                event.preventDefault();
                event.stopPropagation();
                closeDialog();
            });

            // Close dialog when clicking outside
            dialog.addEventListener('click', function (event) {
                if (event.target === dialog) {
                    closeDialog();
                }
            });

            // Close dialog on Escape key press
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeDialog();
                }
            });

            // Prevent dialog content from closing when clicked
            const dialogContent = document.querySelector('.dialog-content');
            if (dialogContent) {
                dialogContent.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
            }

            // Review slider functionality (unchanged)
            const reviews = document.querySelectorAll('.review-item');
            let currentReview = 0;

            function showReview(index) {
                reviews.forEach((review, i) => {
                    review.classList.toggle('active', i === index);
                });
            }

            function nextReview() {
                currentReview = (currentReview + 1) % reviews.length;
                showReview(currentReview);
            }

            setInterval(nextReview, 5000);
            showReview(currentReview);

            // Gallery carousel functionality
            let currentGallerySlide = 0;
            const totalGallerySlides = document.querySelectorAll('.gallery-slide').length;
            const galleryCarousel = document.getElementById('gallery-carousel');
            const galleryDots = document.querySelectorAll('.gallery-dot');

            function updateGalleryCarousel() {
                const translateX = -currentGallerySlide * 100;
                galleryCarousel.style.transform = `translateX(${translateX}%)`;

                // Update dots
                galleryDots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentGallerySlide);
                });
            }

            function changeGallerySlide(direction) {
                currentGallerySlide = (currentGallerySlide + direction + totalGallerySlides) % totalGallerySlides;
                updateGalleryCarousel();
            }

            function goToGallerySlide(slideIndex) {
                currentGallerySlide = slideIndex;
                updateGalleryCarousel();
            }

            // Auto-advance gallery every 5 seconds
            setInterval(function () {
                changeGallerySlide(1);
            }, 5000);

            // Touch/swipe support for mobile
            let galleryStartX = 0;
            let galleryEndX = 0;

            galleryCarousel.addEventListener('touchstart', function (e) {
                galleryStartX = e.touches[0].clientX;
            });

            galleryCarousel.addEventListener('touchend', function (e) {
                galleryEndX = e.changedTouches[0].clientX;
                handleGallerySwipe();
            });

            function handleGallerySwipe() {
                const swipeThreshold = 50;
                const difference = galleryStartX - galleryEndX;

                if (Math.abs(difference) > swipeThreshold) {
                    if (difference > 0) {
                        // Swipe left - next slide
                        changeGallerySlide(1);
                    } else {
                        // Swipe right - previous slide
                        changeGallerySlide(-1);
                    }
                }
            }

            // Keyboard navigation
            document.addEventListener('keydown', function (e) {
                if (e.key === 'ArrowLeft') {
                    changeGallerySlide(-1);
                } else if (e.key === 'ArrowRight') {
                    changeGallerySlide(1);
                }
            });

            // Make functions global for onclick handlers
            window.changeGallerySlide = changeGallerySlide;
            window.goToGallerySlide = goToGallerySlide;
        });
    </script>

<?php
// Include footer
include 'src/includes/footer.php';
?>