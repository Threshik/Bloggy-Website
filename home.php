<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogger</title>
    <!----Custom css file------>
    <link rel="stylesheet" href="./css/style.css" />

    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
    <script src="./js/owl.carousel.min.js"></script>
    <!----Font awesome icon linking---->
    <link rel="stylesheet" href="./css/all.css" />
    <link rel="stylesheet" href="./css/aos.css" />
  </head>
  <body>
    <!------Navigation------>
    <nav class="navclass">
      <div class="nav-menu flex-row">
        <div class="brand">
          <a href="indexb.html" class="text">BLOGGY</a>
        </div>

        <div>
          <ul class="nav-items">
            <li class="nav-link"><a href="./indexb.html">Home</a></li>
            <li class="nav-link"><a href="./indexblog.html">New Blog</a></li>
            <li class="nav-link"><a href="./blog.html">Blogs</a></li>
            <li class="nav-link"><a href="./contact.html">Contact</a></li>
            <li class="nav-link"><a href="index.php">Login</a></li>
          </ul>
        </div>
        <div class="social text-gray">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
    </nav>
    <!---------Main section---------->
    <main>
      <!------Title---------->
      <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aso-delay="2500">
          <h1>Explore new perspectives</h1>
          <button class="btn">Explore</button>
        </div>
      </section>
      <!------Title-----x----->

      <section class="container" id="myHeader">
        <div class="site-content">
          <div class="post">
            <div class="post-content" data-aos="zoom-out" data-aso-delay="2000">
              <div class="post-image">
                <div>
                  <img src="./assests/Blog-post/blog1.png" alt="" class="img" />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                    &nbsp;&nbsp;</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;June 12,2023
                    &nbsp;&nbsp;</span
                  >
                  <span>12 Comments</span>
                </div>
              </div>
              <div class="post-tit">
                <a href="#"
                  ><h2>
                    Why should boys have all the fun? It's the women who are
                    making india an alcohol-loving country?
                  </h2></a
                >
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Libero commodi necessitatibus dolores unde aperiam eaque
                  maiores nostrum odio, officia voluptatem ea excepturi
                  assumenda numquam eius adipisci recusandae ad aut facere
                  tempora cupiditate perspiciatis magnam consequuntur fuga!
                  Illum ipsam assumenda distinctio quam itaque modi voluptates
                  eius? Sequi, adipisci. Iste, ex harum. Lorem, ipsum dolor sit
                  amet consectetur adipisicing elit. Libero commodi
                  necessitatibus dolores unde aperiam eaque maiores nostrum
                  odio, officia voluptatem ea excepturi assumenda numquam eius
                  adipisci recusandae ad aut facere tempora cupiditate
                  perspiciatis magnam consequuntur fuga! Illum ipsam assumenda
                  distinctio quam itaque modi voluptates eius? Sequi, adipisci.
                  Iste, ex harum.
                </p>
                <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="post-content" data-aos="zoom-out" data-aso-delay="2000">
              <div class="post-image">
                <div>
                  <img src="./assests/Blog-post/blog2.png" alt="" class="img" />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                    &nbsp;&nbsp;</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;July 19,2023
                    &nbsp;&nbsp;</span
                  >
                  <span>7 Comments</span>
                </div>
              </div>
              <div class="post-tit">
                <a href="#"
                  ><h2>Pet Industry Trends, Growth & Statistics in 2023</h2></a
                >
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Libero commodi necessitatibus dolores unde aperiam eaque
                  maiores nostrum odio, officia voluptatem ea excepturi
                  assumenda numquam eius adipisci recusandae ad aut facere
                  tempora cupiditate perspiciatis magnam consequuntur fuga!
                  Illum ipsam assumenda distinctio quam itaque modi voluptates
                  eius? Sequi, adipisci. Iste, ex harum. Lorem, ipsum dolor sit
                  amet consectetur adipisicing elit. Libero commodi
                  necessitatibus dolores unde aperiam eaque maiores nostrum
                  odio, officia voluptatem ea excepturi assumenda numquam eius
                  adipisci recusandae ad aut facere tempora cupiditate
                  perspiciatis magnam consequuntur fuga! Illum ipsam assumenda
                  distinctio quam itaque modi voluptates eius? Sequi, adipisci.
                  Iste, ex harum.
                </p>
                <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="post-content" data-aos="zoom-out" data-aso-delay="2000">
              <div class="post-image">
                <div>
                  <img src="./assests/Blog-post/blog3.png" alt="" class="img" />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                    &nbsp;&nbsp;</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;August
                    5,2023 &nbsp;&nbsp;</span
                  >
                  <span>2 Comments</span>
                </div>
              </div>
              <div class="post-tit">
                <a href="#"
                  ><h2>
                    North Carolina Park Grants Promote Accessibility Outdoors
                  </h2></a
                >
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Libero commodi necessitatibus dolores unde aperiam eaque
                  maiores nostrum odio, officia voluptatem ea excepturi
                  assumenda numquam eius adipisci recusandae ad aut facere
                  tempora cupiditate perspiciatis magnam consequuntur fuga!
                  Illum ipsam assumenda distinctio quam itaque modi voluptates
                  eius? Sequi, adipisci. Iste, ex harum. Lorem, ipsum dolor sit
                  amet consectetur adipisicing elit. Libero commodi
                  necessitatibus dolores unde aperiam eaque maiores nostrum
                  odio, officia voluptatem ea excepturi assumenda numquam eius
                  adipisci recusandae ad aut facere tempora cupiditate
                  perspiciatis magnam consequuntur fuga! Illum ipsam assumenda
                  distinctio quam itaque modi voluptates eius? Sequi, adipisci.
                  Iste, ex harum.
                </p>
                <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
          <aside class="sidebar">
            <div class="category">
              <h2>Category</h2>
              <ul class="category-list">
                <li class="list-items">
                  <a href="#">Food</a>
                  <span>(09)</span>
                </li>
                <li class="list-items">
                  <a href="#">Technology</a>
                  <span>(07)</span>
                </li>
                <li class="list-items">
                  <a href="#">Lifestyle</a>
                  <span>(03)</span>
                </li>
                <li class="list-items">
                  <a href="#">Shopping</a>
                  <span>(08)</span>
                </li>
                <li class="list-items">
                  <a href="#">Software</a>
                  <span>(05)</span>
                </li>
              </ul>
            </div>
            <div class="popular-posts">
              <h2>Popular Posts</h2>
              <div class="post-content">
                <div class="post-image">
                  <div>
                    <img
                      src="./assests/Blog-post/post5.jfif"
                      alt=""
                      class="img"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                      &nbsp;&nbsp;</span
                    >
                    <span
                      ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;July
                      22,2023 &nbsp;&nbsp;</span
                    >
                    <span>8 Comments</span>
                  </div>
                </div>
                <div class="post-tit">
                  <a href="#">True wisdom comes from experience</a>
                </div>
              </div>
              <div class="post-content">
                <div class="post-image">
                  <div>
                    <img
                      src="./assests/Blog-post/post8.jfif"
                      alt=""
                      class="img"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                      &nbsp;&nbsp;</span
                    >
                    <span
                      ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;June
                      17,2023 &nbsp;&nbsp;</span
                    >
                    <span>25 Comments</span>
                  </div>
                </div>
                <div class="post-tit">
                  <a href="#"
                    >Learning the Ukulele and other less common instruments</a
                  >
                </div>
              </div>
              <div class="post-content">
                <div class="post-image">
                  <div>
                    <img
                      src="./assests/Blog-post/post7.jfif"
                      alt=""
                      class="img"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                      &nbsp;&nbsp;</span
                    >
                    <span
                      ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;August
                      2,2023 &nbsp;&nbsp;</span
                    >
                    <span>123 Comments</span>
                  </div>
                </div>
                <div class="post-tit">
                  <a href="#"
                    >DIY projects, DIY business and selling homemade items</a
                  >
                </div>
              </div>
              <div class="post-content">
                <div class="post-image">
                  <div>
                    <img
                      src="./assests/Blog-post/post9.jfif"
                      alt=""
                      class="img"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                      &nbsp;&nbsp;</span
                    >
                    <span
                      ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;August
                      2,2023 &nbsp;&nbsp;</span
                    >
                    <span>123 Comments</span>
                  </div>
                </div>
                <div class="post-tit">
                  <a href="#"
                    >QR codes – innovative ways to use them in small business
                    marketing</a
                  >
                </div>
              </div>
              <div class="post-content">
                <div class="post-image">
                  <div>
                    <img
                      src="./assests/Blog-post/post6.jfif"
                      alt=""
                      class="img"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-user"></i>&nbsp;&nbsp;Admin
                      &nbsp;&nbsp;</span
                    >
                    <span
                      ><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;July
                      11,2023 &nbsp;&nbsp;</span
                    >
                    <span>112 Comments</span>
                  </div>
                </div>
                <div class="post-tit">
                  <a href="#"> Behavioral disorders in children</a>
                </div>
              </div>
            </div>
            <div class="newsletter">
              <h2>Newsletter</h2>
              <div class="form-element">
                <input
                  type="email"
                  name="email"
                  class="input-element"
                  placeholder="Email "
                  required
                />

                <button class="btn form-btn">Subscribe</button>
              </div>
            </div>

            <div class="popular-tags">
              <h2>Popular Tags</h2>
              <div class="tags flex-row">
                <span class="tag">Software</span>
                <span class="tag">Technology </span>
                <span class="tag">Food</span>
                <span class="tag">Lifestyle</span>
                <span class="tag">Nature</span>
                <span class="tag">Design</span>
                <span class="tag">Algorithms</span>
                <span class="tag">Love</span>
                <span class="tag">Projects</span>
              </div>
            </div>
          </aside>
        </div>
      </section>

      <!--------blog carosel------>
      <section id="blog">
        <h1>Glimpses</h1>
        <div class="blog-container">
          <div class="blog-box">
            <div class="blog-img">
              <img src="./assests/Blog-post/post3.jfif" alt="blog1" />
            </div>
            <div class="blog-text">
              <span>18 July 2023 / Web Design</span>
              <a href="#" class="blog-title"
                >What has happened to all web design?</a
              >
              <p>
                Every website has text, and where there is text there is either
                good or bad typography. So, as a website owner, you need to
                invest time into the typography of your own site. By focusing on
                the look and readability of your words, you ensure your readers
              </p>
              <a href="#">Read More</a>
            </div>
          </div>
          <div class="blog-box">
            <div class="blog-img">
              <img src="./assests/Blog-post/post2.jfif" alt="blog2" />
            </div>
            <div class="blog-text">
              <span>28 July 2023 / Pets</span>
              <a href="#" class="blog-title"
                >Pet Industry Trends, Growth & Statistics in 2023</a
              >
              <p>
                With pet ownership rates continuing to rise, the target market
                for the industry as a whole will expand, allowing new
                penetration points. Yes, the big-box pet stores are experiencing
                good fortune. But, to fear the competition is to miss the way
                forward.
              </p>
              <a href="#">Read More</a>
            </div>
          </div>
          <div class="blog-box">
            <div class="blog-img">
              <img src="./assests/Blog-post/post4.jfif" alt="blog3" />
            </div>
            <div class="blog-text">
              <span>1 August 2023 / Web Design</span>
              <a href="#" class="blog-title"
                >DiariesOf: Two Adventurous Minds!
              </a>
              <p>
                Their first attempt at traveling on a motorbike was a 10-day
                test ride in Iceland, where they faced torrents of rain, cold,
                and wind. Challenging conditions, but they managed. And Jorge
                was able to reassure Anabela: "After riding.
              </p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--------blog carosel---x--->

    <!---------Main section------x---->

    <!-------------footer------------->

    <footer class="footer">
      <div class="container">
        <div class="about-us">
          <h2 style="font-family: Abel">About Us</h2>
          <p style="text-align: justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quasi
            Ab rerum, in id reiciendis quisquam tempora, officiis eaque nihil
            voluptatum fugiat explicabo totam, repellendus recusandae possimus
            tempore distinctio ratione.
          </p>
        </div>
        <div class="newsletter">
          <h2 style="font-family: Abel">Newsletter</h2>
          <p>Stay with our updates and news!</p>
          <div class="form-element">
            <input
              type="email"
              name=""
              class="input-element"
              placeholder="Email"
              required
            /><span><i class="fas fa-chevron-right"></i></span>
          </div>
        </div>
        <div class="follow" id="Follow Us">
          <h2 style="font-family: Abel">Follow Us</h2>
          <p>Lets us socialize</p>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="rights flex-row">
        <h4>
          Copyright ©2023 All rights reserved | made by
          <a href="#">Threshika Vijayakumar</a>
        </h4>
      </div>

      <div class="move-up">
        <a href="#"> <i class="fas fa-arrow-circle-up fa-2x"></i></a>
      </div>

      <script>
        window.onscroll = function () {
          myFunction();
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
      </script>
    </footer>

    <!-------------footer------x------->

    <!---Custom js file------>

    <script src="./js/Jquery3.7.0.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>