<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\style.css">
    <title>Profile || Beni</title>
  </head>
  <body>
    <!-- greetings -->
    <div class="greetings">
      <h1 class="welcome-text">Hello Welcome to my page</h1>
    </div>
    <!-- end greetings -->
    <!-- Header -->
    <ul class="header">
        <li class="nav-icon desktop"><img src="assets\img\user.png" alt="user" width="50px" /></li>
        <li><a href="#about-me">About Me</a></li>
        <li><a href="#certificate">Certificate</a></li>
        <li><a href="#portofolio">My Portfolio</a></li>
        <li><a href="#contact-me">Contact Me</a></li>
    </ul>
    <!-- End Header -->
    {{-- content --}}
    <div class="content">
        {{-- about me --}}
        <div id="about-me">
            <div class="section-introduction">
                <img src="assets\img\beni.png" alt="beni" class="img-icon">
                <p style="font-size: 20pt">Benidictus Tri Wibowo</p>
                <p class="content-perkenalan">Beni adalah seorang web developer yang berfokuskan di front end developer dan membuat website yang modern dan responsive.</p>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-education">
                        <img src="assets\img\graduation-cap.png" alt="education" class="img-icon">
                        <p style="font-size: 20pt">EDUCATION</p>
                        <li><p class="content-perkenalan">Universitas Atma Jaya Yogyakarta (2019 - present)</p></li>
                        <li><p class="content-perkenalan">SMA Mardi Waluya Cibinong (2016 - 2019)</p></li>
                        <li><p class="content-perkenalan">SMP Mardi Waluya Cibinong (2013 - 2016)</p></li>
                        <li><p class="content-perkenalan">SD Mardi Waluya Cibinong (2007 - 2013)</p></li>
                    </div>
                </div>
                <div class="col">
                    <div class="section-skills">

                        <img src="assets\img\skills.png" alt="skills" class="img-icon">
                        <p style="font-size: 20pt">Skills</p>
                        <p>HTML</p>
                        <div class="skill-container">
                            <div class="skills html">80%</div>
                        </div>
                        <p>CSS</p>
                        <div class="skill-container">
                            <div class="skills css">75%</div>
                        </div>
                        <p>JAVASCRIPT</p>
                        <div class="skill-container">
                            <div class="skills js">65%</div>
                        </div>
                        <p>PHP</p>
                        <div class="skill-container">
                            <div class="skills php">65%</div>
                        </div>
                        <p>C</p>
                        <div class="skill-container">
                            <div class="skills c">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- certificate --}}
            <div id="certificate">
                <p style="font-size: 20pt">Certificate</p>
                @if(count($data_certificate))
                    @foreach ($data_certificate as $certificate)
                    <h5>{{ $certificate->title }}</h5>
                    <img src="assets\img\{{ $certificate->picture }}" alt="picture">   
                    @endforeach
                @endif
            </div>
            {{-- End of certificate --}}
            {{-- portfolio --}}
            <div id="portofolio">
                <p style="font-size: 20pt">My Portfolio</p>
                <a href="https://websiteutsweb.000webhostapp.com/index.php">MY WEBSITE</a><br>
                <iframe src="https://websiteutsweb.000webhostapp.com/index.php" frameborder="0" class="mywebsite"></iframe><br>
                <a href="http://uaspawatma.xyz">MY WEBSITE</a><br>
                <iframe src="http://uaspawatma.xyz" frameborder="0" class="mywebsite">my website</iframe>
            </div>
            {{-- End of portfolio --}}
            {{-- Contact Me --}}
            <div id="contact-me">
                <p style="font-size: 20pt">CONTACT ME</p>
                <div class="row">
                    <div class="col">
                        <h3>Email</h3>
                        <a href="mailto:someone@example.com" class="contact-icon-bundler" style="text-decoration: none">
                            <img src="assets/img/mail.png" alt="mail.png" class="contact-icon" width="100px">
                            <h2 class="contact-desktop">benidictustriwibowo@gmail.com</h2>
                        </a>
                        <a href="tel:+62 851-5522-1292" class="contact-icon-bundler">
                            <img src="assets/img/call.png" alt="phone.png" class="contact-icon" width="100px" style="text-decoration: none">
                            <h2 class="contact-desktop">+62 851-5522-1292</h2>
                        </a>
                    </div>
                    <div class="col">
                        <h3>Temukan saya di </h3>
                        <a href="https://www.instagram.com/benidictus_/" style="text-decoration: none"><ul><img src="assets/img/instagram.png" alt="IG" class="img-contact"> Instagram</ul></a>
                        <a href="https://www.facebook.com/slazr.blood" style="text-decoration: none"><ul><img src="assets/img/fb.png" alt="FB" class="img-contact"> Facebook</ul></a>
                        <a href="https://github.com/Crystallizee" style="text-decoration: none"><ul><img src="assets/img/github.png" alt="GH" class="img-contact"> Github</ul></a>
                        <a href="https://www.linkedin.com/in/benidictus-tri-wibowo-23712b220/" style="text-decoration: none"><ul><img src="assets/img/linkedin.png" alt="Linked in" class="img-contact"> Linked In</ul></a>

                    </div>
                </div>
            </div>
            {{-- End ofContact Me --}}
        </div>
        {{-- End about me --}}
    </div>
    {{-- End content --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>


</html>