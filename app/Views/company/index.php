<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <!--navbar-->
      <div class="navbar-fixed nav">
        <nav class="grey darken-1">
          <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">Alifianto Narendra</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about">About Us</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#service">Services</a></li>
              <li><a href="#portofolio">Portofolio</a></li>
              <li><a href="#contact">Concatc Us</a></li>
            </ul>
          </div>
        </div>
        </nav>
      </div>

      <!--Sidenav-->
      <ul class="sidenav" id="mobile-demo">
        <li><a href="#about">About Us</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#portofolio">Portofolio</a></li>
        <li><a href="#contact">Concatc Us</a></li>
      </ul>


      <!--slider-->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1.png"> <!-- random image -->
            <div class="caption left-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/2.png"> <!-- random image -->
            <div class="caption right-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/3.png"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>




      <!--about-->
      <section id="about" class="about scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="center grey-text text-darken-1">About Us</h3>
              <div class="col m6">
                <h4>We Are Programer</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus optio iure odit ipsum vitae magni, consequuntur fugit quos libero nulla animi cumque! Dolorum porro qui consectetur quo laudantium, similique vitae placeat non quidem iusto cum libero enim aut nostrum?</p>
              </div>
              <div class="col m6">
                <br>
                <H6>WEB DEVELOPMENT</H6>
                <div class="progress">
                    <div class="determinate" style="width:  97%"></div>
                </div> 

                <br>
                <H6>MOBILE APP DEVELOPMENT</H6>
                <div class="progress">
                    <div class="determinate" style="width:  93%"></div>
                </div> 

                <br>
                <H6>GAME DEVELOPMENT</H6>
                <div class="progress">
                    <div class="determinate" style="width:  81%"></div>
                </div> 
              </div>
          </div>
        </div>
      </section>



      <!--clients-->
      <div id="clients" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/slider/4.png"></div>

        <div class="container clients ">
          <h3 class="center light white-text">Our Clients</h3>
            <div class="row">
              <div class="col m4 s12 center">
                <img src="img/clients/gojek.png">
              </div>
              <div class="col m4 s12 center">
                <img src="img/clients/tokopedia.png">
              </div>
              <div class="col m4 s12 center">
                <img src="img/clients/traveloka.png">
              </div>
            </div>
         </div>
         </div>





         <!--service-->
         <section id="service" class="sercive grey lighten-3 scrollspy">
           <div class="container">
             <div class="row">
               <h3 class="center grey-text text-darken-1">Our Services</h3>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <i class="material-icons medium">computer</i>
                    <h5>Web Development</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, maiores.</p>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <i class="material-icons medium">developer_mode</i>
                    <h5>Mobile App</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, maiores.</p>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <i class="material-icons medium">gamepad</i>
                    <h5>Game Development</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, maiores.</p>
                  </div>
                </div>
             </div>
           </div>
         </section>





         <!--portofolio-->
         <section id="portofolio" class="portofoio scrollspy">
           <div class="container">
             <h3 class="center grey-text text-darken-1">Portofolio</h3>
              <div class="row">
                <div class="col m3 s12">
                  <img src="img/portfolio/1.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="img/portfolio/2.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="img/portfolio/3.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="img/portfolio/4.png" class="responsive-img materialboxed">
                </div>
              </div>
              <div class="row">
                <div class="col m3 s12">
                  <img src="img/portfolio/3.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="img/portfolio/1.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="img/portfolio/6.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="img/portfolio/5.png" class="responsive-img materialboxed">
                </div>
              </div>
           </div>
         </section>





         <section id="contact" class="contact grey lighten-3">
           <div class="container">
             <h3 class="center grey-text text-darken-1">Contact Us</h3>
              <div class="row">
                <div class="col m5 s12">
                  <div class="card-panel grey darken-1 center white-text">
                    <i class="material-icons small">email</i>
                    <h5>Contact</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, enim?</p>
                  </div>
                  <ul class="collection with-header">
                    <li class="collection-header"><h4>Our Office</h4></li>
                    <li class="collection-item">Jl.KH AKHMAD DAHLAN</li>
                    <li class="collection-item">My Office</li>
                    <li class="collection-item">Jawa Timur</li>
                  </ul>            
                </div>

                <div class="col m7 s12">
                  <form>
                    <div class="card-panel">
                      <h5>Please fill out this form</h5>
                      <div class="input-field">
                        <input type="text" name="name" id="name" required class="validate">
                        <label for="name">Nama</label>
                      </div>
                      <div class="input-field">
                        <input type="email" name="phone" id="phone">
                        <label for="phone">Phone Number</label>
                      </div>
                      <div class="input-field">
                        <input type="email" name="email" id="email" class="validate">
                        <label for="email">E-mail address</label>
                      </div>
                      <div class="input-field">
                        <input type="password" name="password" id="password" required class="validate">
                        <label for="password">Password</label>
                      </div>
                      <button type="submit" class="btn grey darken-1">SUbmit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn grey darken-1">Reset</button>
                    </div>
                  </form>
                  
                </div>

              </div>
           </div>
         </section>




         <!--footer-->
         <footer class="grey darken-1 white-text center scrollspy">
           <p class="flow-text">@Copyright 2020</p>
         </footer>

         <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="/js/materialize.min.js"></script>
         <script>
        
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          height:500,
          indicators:true,
          transition:1000,
          interval:3000
        });
        

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);


        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);


        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrollOffset:50
        })

      </script>
    <?= $this->endSection(); ?>