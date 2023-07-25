<?php require('resources/views/partials/header.php') ?>

<?php require('resources/views/partials/nav.php') ?>

<!-- ABOUT US START-->
<section class="about-lexa" id="about-lexa">
  <div class="about-img">
    <img src="/publics/img/LEXA 1.jpg" alt="LEXA logo" class="img1" />
  </div>
  <div class="content">
    <h1>LEXA INSTITUTE</h1>
    <p>
      Welcome to Lexa Institute, where innovation and education converge to
      shape a limitless future. As a dynamic institution, we lead the way in
      AI, Data Science, and Web/App Development, equipping our students with
      the skills necessary to excel in these cutting-edge fields. Our
      mission is to empower students and provide them with the tools they
      need to succeed.
    </p>
    <br />
    <p>
      At Lexa Institute, we cultivate a vibrant learning environment under
      the guidance of experienced faculty who are industry experts. Through
      engaging hands-on projects, our graduates emerge as trailblazers,
      securing highly sought-after positions as AI Engineers, Data
      Scientists, and Web/App Developers.
    </p>
  </div>
</section>
<!-- ABOUT US END-->

<!-- VISI MISI -->
<section class="visi-misi" id="visi-misi">
  <div class="visi">
    <h1>VISION</h1>
    <p>
      To be the leading educational institution globally in producing
      high-quality and innovative professionals in the field of AI
      Engineering, Data Science, and Web and App Development. We are
      committed to providing an inspirational learning environment,
      supporting the development of creativity, and preparing our students
      to face the challenges of the future.
    </p>
  </div>
  <div class="misi">
    <h1>MISSION</h1>
    <ol>
      <li>Providing comprehensive and up-to-date curriculum</li>
      <li>Fostering collaboration and innovation</li>
      <li>Offering academic and professional mentoring</li>
      <li>Developing industry partnerships</li>
      <li>Promoting character development and social responsibility</li>
    </ol>
  </div>
</section>
<!-- END VISI MISI-->

<!-- MATA KULIAH START-->
<section class="courses" id="courses">
  <div class="courses-card">
    <img src="/publics/img/AICourse.png" alt="Artificial 
        Intelligence" srcset="" />
    <h2>Artificial Intelligence</h2>
    <p>
      Learn the principles and applications of AI, including machine
      learning, computer vision, and robotics. Develop skills to create
      intelligent systems and solutions for various industries.
    </p>
  </div>
  <div class="courses-card">
    <img src="/publics/img/dataScienceCourse.png" alt="Data Science" srcset="" />
    <h2>Data Scientist</h2>
    <p>
      Master techniques to extract insights from data, build predictive
      models, and communicate findings. Apply data science skills across
      industries such as finance, marketing, and healthcare.
    </p>
  </div>
  <div class="courses-card">
    <img src="/publics/img/NLPCourse.png" alt="NLP" srcset="" />
    <h2>Natural Language Processing</h2>
    <p>
      Explore how computers understand and generate human language. Gain
      expertise in text analysis, sentiment analysis, and language
      generation for applications like chatbots and virtual assistants.
    </p>
  </div>
</section>
<!-- MATA KULIAH END-->

<!-- ACHIEVEMENT START -->
<section class="achievement" id="achievement">
  <h1 class="achievement-title">OUR ACHIEVEMENT</h1>
  <div class="achievement-container">
    <div class="achievement-IEE">
      <h2 class="mt-3 mb-3">IEE Medal of Honor</h2>
      <p>
        Through partnerships with industry leaders and academic
        institutions, Lexa Institute drives innovation by bridging the gap
        between theory and practice, nurturing a new generation of
        technological pioneers. By receiving the IEEE Medal of Honor,
        solidifies its status as a beacon of technological excellence.
      </p>
    </div>
    <div class="achievement-Innovation">
      <h2 class="mt-3 mb-3">Technology Innovation in Education</h2>
      <p>
        Embrace innovation in technology education at Harvard. Our
        award-winning institute leads in AI engineering, data science, and
        web & app development, equipping you with cutting-edge skills. Join
        us to shape your future in the evolving digital landscape.
      </p>
    </div>
  </div>
</section>
<!-- ACHIEVEMENT END -->

<!-- PROGRAM START -->
<section class="program" id="program">
  <div class="slide-container">
    <div class="content-slide">
      <div class="imgslide fade">
        <div class="numberslide">1 / 3</div>
        <img src="/publics/img/foto 1 .jpg" alt="" />
        <div class="text">
          <p style="font-weight: bold">INTERSHIP PROGRAMS</p>
        </div>
      </div>

      <div class="imgslide fade">
        <div class="numberslide">2 / 3</div>
        <img src="/publics/img/foto 2.jpg" alt="" />
        <div class="text">
          <p style="font-weight: bold">TEACHING ABOARD</p>
        </div>
      </div>

      <div class="imgslide fade">
        <div class="numberslide">3 / 3</div>
        <img src="/publics/img/foto 3.jpg" alt="" />
        <div class="text">
          <p style="font-weight: bold">STUDENTS EXCHANGE</p>
        </div>
      </div>

      <a class="prev" onClick="nextslide(-1)">&#10094;</a>
      <a class="next" onClick="nextslide(1)">&#10095;</a>
    </div>

    <div class="page">
      <span class="dot" onClick="dotslide(1)"></span>
      <span class="dot" onClick="dotslide(2)"></span>
      <span class="dot" onClick="dotslide(3)"></span>
    </div>
  </div>
</section>
<!-- PROGRAM END -->

<?php require('resources/views/partials/footer.php') ?>