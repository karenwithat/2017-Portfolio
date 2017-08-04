<!DOCTYPE html>
<html>

<!--
TODO:
  - Finish hooking up contact form
  - Put in images for the portfolio
  - Customize Stylesheet further
  - Testimonial Quotes
  - Add animation functionality
  - Attach sticky header
  - Mess with footer
-->
  <head>
    <meta charset="utf-8">
    <title>Tearyne Glover | Dallas Frontend Developer</title>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <link rel="stylesheet" href="css\style.css">

  </head>
  <body>
    <div class="container">
      <div id="intro" class="row justify-content-center section-row">
          <h1 class="content__name col-lg-12">Tearyne Glover</h1>
          <span class="text-center text-uppercase content__subtitle">
            Frontend Web Developer - UI/UX Designer</span>
          <br>
          <div class="row justify-content-around col-lg-12 ">
            <a href="#about" class="btn btn-outline-primary col-lg-3" role="button" data-aos="fade-right">Learn More About Tearyne</a>
            <a href="t-glover-developer-resume.pdf" class="btn btn-outline-primary col-lg-3" data-aos="fade-left"   role="button">Download Resume</a>
          </div>
      </div>

      <div id="about" class="row section-row" data-aos="fade-up-right">
        <h2 class="page-name col-md-4 col-sm-12 div__page-title">About Tearyne</h2>
        <div class="col-md-8 col-sm-12 div__page-content">
          <p>Tearyne is a frontend web developer and UX/UI Designer living in
            Dallas, TX. She is passionate about solving functional design
            problems. Tearyne is a graduate
            of UT Arlington in Arlington, TX, and currently works as a frontend
            web developer for the Employees' Retirement Fund of the City of Dallas,
            Texas.</p>
            <p>Tearyne currently serves as the Telecommuincations Chair for <thead>
                National Society of Black Engineers Dallas/Fort Worth Chapter, of which
               she is a member.
            </p>
            <p>(Tearyne is pronounced like Karen, with a T.)</p>
          </div>
        <h3 class="col-md-4 col-sm-12 text-right">Tearyne's Current Skills</h3>
        <div class="col-md-8 col-sm-12 div__page-content">
          <ul>
            <li>User Experience Research</li>
            <li>Usability Testing</li>
            <li>HTML5/CSS3/SCSS for responsive web development</li>
            <li>Adobe Creative Suite Applications (Illustrator, Photoshop, XD)</li>
            <li>PHP</li>
            <li>Drupal</li>
            <li>Javascript</li>
            <li>Git</li>
          </ul>
        </div>
        <h3 class="col-md-4 col-sm-12 text-right">Skills Tearyne is Growing</h3>
        <div class="col-md-8 col-sm-12 div__page-content">
          <ul>
            <li>Angular</li>
            <li>React</li>
            <li>Google Analytics</li>
          </ul>
        </div>
      </div>

      <div id="portfolio" class="row section-row" data-aos="fade-up-left">
        <h2 class="col-md-12 text-center portfolio-header">Portfolio</h2>
        <div class="row">
          <img class="portfolio-image rounded mx-auto" src="imgs\better-together-poster-tearyne-2-sm.png" alt="Poster graphic for the Better Together Campaign">
          <br>
          <h2 class="col-lg-12 text-center">Style Tiles</h3>
            <br>
          <img class="portfolio-image img-fluid rounded mx-auto" src="imgs\ecclectic-style.png" />
          <br>
          <img class="portfolio-image img-fluid rounded mx-auto" src="imgs\electric-style.png"  />
          <br>
          <img class="portfolio-image img-fluid rounded mx-auto" src="imgs\vibrant-style.png">
          <br>
          <p></p>
        </div>
      </div>

      <div id="articles" class="row section-row">
        <h2 class="page-name col-md-4 col-sm-12 div__page-title">Things Tearyne Has Written</h2>
        <div class="div__page-content">
          <ul>
            <li><a class="unclassed-link" href="https://medium.com/@ninelivesblackcat/people-data-and-me-9dc698a33285">People, Data, and Me</a></li>
            <li>The Importance of User Testing (August 2017)</li>

          </ul>
      </div>
      </div>

      <!--<div id="contact" class="row section-row">
        <h2 class="page-name col-md-4 col-sm-12 div__page-title">Contact Tearyne</h2>
        <div class="col-md-5 div__page-content">
          <div class="form-area">
              <form role="form">
              <br style="clear:both">
          				<div class="form-group">
      						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  	<?php echo "<p class='text-danger'>$errName</p>";?>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
      					</div>
                          <div class="form-group">
                          <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>

                          </div>

              <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
              </form>
          </div>
    </div>

      <footer>
        <nav>
          <ul class="nav nav__main-site justify-content-center">
            <li class="nav-item"> <a>Top</a></li>
            <li class="nav-item"> <a href="#about">About</a></li>
            <li class="nav-item"> <a href="#articles">Writings</a></li>
            <li class="nav-item"> <a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </footer>
    </div> -->
  </body>
<script>
 AOS.init();

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>

</html>
