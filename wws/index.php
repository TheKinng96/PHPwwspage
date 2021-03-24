<?php 
  get_header(); 
  $uri = get_theme_file_uri();
?>

  <!-- main body -->

  <!-- hero -->
  <section class="hero-section container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner mx-auto">
          <div class="carousel-item active" data-interval="10000000">
            <img src="<?php echo $uri; ?>/assets/img/hero_1.jpg" class="d-block w-100" alt="...">
              <div class="hero-layer"></div>
            </img>
          </div>
          <div class="carousel-item" data-interval="10000000">
            <img src="<?php echo $uri; ?>/assets/img/hero_3.jpg" class="d-block w-100" alt="...">
            <div class="hero-layer"></div>
            </img>
          </div>
          <div class="carousel-item" data-interval="10000000">
            <img src="<?php echo $uri; ?>/assets/img/hero_4.jpg" class="d-block w-100" alt="...">
            <div class="hero-layer"></div>
            </img>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

  <main class="wrapper">
  
    <!-- company history -->
    <section class="company-description mx-auto" >
      <div class="company-description-images mx-auto my-auto">
        <div 
          class="gallery-item" 
          data-aos="fade-up" 
          data-aos-duration="2000" 
        >
          <div class="image">
            <img src="https://source.unsplash.com/1600x900/?love" alt="nature">
          </div>
        </div>

        <div 
          class="gallery-item" 
          data-aos="fade-up" 
          data-aos-duration="2500" 
        >
          <div class="image">
            <img src="https://source.unsplash.com/1600x900/?people" alt="nature">
          </div>
        </div>

        <div 
          class="gallery-item" 
          data-aos="fade-up" 
          data-aos-duration="2500" 
        >
          <div class="image">
            <img src="https://source.unsplash.com/1600x900/?family alt="nature">
          </div>
        </div>

        <div 
          class="gallery-item" 
          data-aos="fade-up" 
          data-aos-duration="2000" 
        >
          <div class="image">
            <img src="https://source.unsplash.com/1600x900/?money" alt="nature">
          </div>
        </div>
        
      </div>
      <div 
        class="jumbotron my-auto" 
        data-aos="fade-down-left" 
        data-aos-duration="1500"
      >
        <h2 class="display-4 is-blue">New to Insurance? <br class="is-sm-desktop-only-hidden">We are here to <span class="is-gold">HELP</span>.</h2>
        <p class="lead is-grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        <br>
        <br>
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <hr class="my-4">

        <a class="btn btn-primary btn-lg is-round" href="#" role="button">READ MORE</a>
      </div>
    </section>

    <!-- company summary -->
    <section class="company-summary">
      <div class="background"></div>
      <div class="card">
        <ul class="list">
          <li 
            class="list-item" 
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1500"
            data-aos-anchor-placement="top-center"
          >
            <span class="icon-container"><i class="fas fa-award"></i></span>
            <span class="list-item-number">90+</span>
            <span class="list-item-title">Award Winning</span>
          </li>
          <li 
            class="list-item" 
            data-aos="fade-up"
            data-aos-duration="2000"
            data-aos-anchor-placement="top-center"
          >
            <span class="icon-container"><i class="fas fa-user-tie"></i></span>
            <span class="list-item-number">19</span>
            <span class="list-item-title">Insurance Agents</span>
          </li>
          <li 
            class="list-item" 
            data-aos="fade-up"
            data-aos-duration="2500"
            data-aos-anchor-placement="top-center"
          >
            <span class="icon-container"><i class="fas fa-users"></i></span>
            <span class="list-item-number">99%</span>
            <span class="list-item-title">Happy Clients</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- monthly top agent -->
    <section class="top-agent">
      <div 
        class="profile-pic-container" 
        data-aos="zoom-out"
        data-aos-duration="2000"
        data-aos-anchor-placement="bottom-bottom"
      >
        <h2>Monthly Top Agent</h2>
        <div class="img-container">
          <img src="<?php echo $uri; ?>/assets/img/agent-pic.png" alt="top-agent">
        </div>
      </div>
      <div 
        class="profile-text-container"
        data-aos="fade-down-left"
        data-aos-duration="1500"
        data-aos-anchor-placement="bottom-bottom"
      >
        <div class="profile-top">
          <h4>New Member</h4>
          <h3>Henry Blahblahblah</h3>
        </div>
        <div class="profile-bottom">
          <p class="quote">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua."
          </p>
          <p class="cases">
            newly protected family
            <span>27</span>
          </p>
        </div>
      </div>
    </section>

    <!-- agent performance board -->
    <section class="performance-board">
      <div class="background"></div>
      <div class="board-content">
        <div class="board-left">
          <h2 
            data-aos="fade-right"
            data-aos-duration="1000"
            data-aos-anchor-placement="bottom-bottom"
            >
            Agents Performance Board
          </h2>
          <select class="form-select is-mobile" onchange="updateBoard()" aria-label="Default select example" id="boardSelect">
            <option selected value="weekly">Weekly</option>
            <option value="monthly">Monthly</option>
            <option value="quarterly">Quarterly</option>
            <option value="yearly">Yearly</option>
          </select>
          <div id="boardDescription" class="is-mobile">
            <p class="btn-description">Weekly aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
          </div>
          <div class="btn-container">
            <button 
              onclick="updateBoard('weekly')" 
              class="btn" 
              data-aos="fade-right"
              data-aos-duration="1000"
              data-aos-anchor-placement="bottom-bottom"
            >
              <div class="icon">
                <i class="bi bi-calendar-week"></i>
              </div>
              <div class="btn-text">
                <h3>Weekly</h3>
                <p class="btn-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
              </div>
            </button>
            <button 
              onclick="updateBoard('monthly')" 
              class="btn"
              data-aos="fade-right"
              data-aos-duration="1500"
              data-aos-anchor-placement="bottom-bottom"
            >
              <div class="icon">
                <i class="bi bi-calendar3"></i>
              </div>
              <div class="btn-text">
                <h3>Monthly</h3>
                <p class="btn-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
              </div>
            </button>
            <button 
              onclick="updateBoard('quarterly')" 
              class="btn"
              data-aos="fade-right"
              data-aos-duration="2000"
              data-aos-anchor-placement="bottom-bottom"
            >
              <div class="icon">
                <i class="bi bi-calendar2"></i>
              </div>
              <div class="btn-text">
                <h3>Quarterly</h3>
                <p class="btn-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
              </div>
            </button>
            <button 
              onclick="updateBoard('yearly')" 
              class="btn"
              data-aos="fade-right"
              data-aos-duration="2500"
              data-aos-anchor-placement="bottom-bottom"
            >
              <div class="icon">
                <i class="bi bi-calendar2-fill"></i>
              </div>
              <div class="btn-text">
                <h3>Yearly</h3>
                <p class="btn-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
              </div>
            </button>
          </div>
        </div>
        <div 
          class="board-right" 
          data-aos="flip-left" 
          data-aos-duration="1500"
          data-aos-anchor-placement="bottom-bottom"
        >
          <img src="<?php echo $uri; ?>/assets/img/weekly.jpg" alt="board contest" id="boardImage">
        </div>
      </div>
    </section>

    <!-- posts -->
    <section class="posts" id="posts">
      <h2>Latest News</h2>
      <div class="posts-container">
        <?php 
        
        if(have_posts()){
          while(have_posts()) {
            the_post();
            get_template_part('partials/post/post','excerpt');
          }
        }
        
        ?>
        
        <div class="post-image-container is-desktop">
          <img src="<?php echo $uri; ?>/assets/img/posts-a.png" alt="post-area-cover">
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>