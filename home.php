<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/home.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <!-- These two are for the counters in the stat container -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        
        <script src="scripts/jquery.js "></script>
        <!-- <script src="scripts/intersection_observer.js "></script> -->
        <script type = "text/javascript" src="scripts/functions.js"></script>  
        <script type = "text/javascript" src="scripts/modal.js"></script>  
        <script type = "text/javascript" src="scripts/form_submission.js"></script>  

    </head>

    <body>

    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").style.top = "0";
        } else {
            document.getElementById("header").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
        }
    </script>

        <header id="header" style="position:fixed; z-index:1; width:100%; transition: top 0.3s;"></header>

        <div class="main-image">
            <div class="image-text-container">
                <p style="font-weight:bold; font-size: 35px;">Find What Are You Looking For</p>
                <p style="font-size: 20px; margin: 3vw;">Over 90,000 Latest Bikes in Databank</p>
                <div class="image-inputs-container">
                    <select class="image-inputs-select" name="" id="">
                        <option value="" selected disabled>Select your option</option>
                        <option value="hurr">hurr</option>
                    </select>
                    <input type="text" class="image-inputs-text" style="font-family: FontAwesome;" placeholder="Eg Honda Civic, Audi, Ford...         &#xf002">
                    <button class="image-inputs-button">SEARCH <i class="fa fa-search"></i></button>
                </div>                
            </div>     
        </div>


        <div class="latest-text">
            <h1>Latest <span>Featured</span> Bikes</h1>
            <hr class="big-line"><hr class="small-line">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos illo, totam autem numquam, ullam, voluptas dolor cum suscipit molestiae repellendus assumenda?</p>
        </div>


        <div class="two-columns">
            <div class="left column">
                <p class="italics-text">Want To Buy A Bike?</p>
                <p class="green-text">Are you looking for a Bike?</p>
                <p class="small-para">Search your car in our oinventory and request a quote on the vehicle of your choosing soon.</p>
            </div>
            <div class="right column">
                <p class="italics-text">Want To Sell Your Bike?</p>
                <p class="green-text">Do you want to sell your Bike?</p>
                <p class="small-para">Request search a car in our inventory and a quote on the vehicle of your choosing.</p>
            </div>
        </div>


        <div class="latest-text">
            <h1>Latest <span>Trending</span> Ads</h1>
            <hr class="big-line"><hr class="small-line">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos illo, totam autem numquam, ullam, voluptas dolor cum suscipit molestiae repellendus assumenda?</p>
        </div>


        <div class="ads-container">
            <div class="ad">
                <div class="ad-image">
                    <img src="images/bike-ad-4.jpeg" alt="Bike Image">
                    <i class="fa fa-user icon-absolute-padding-border" aria-hidden="true"></i>
                    <i class="fa fa-play icon-absolute-padding-border" aria-hidden="true"></i>
                    <p class="number-of-photos">3 photos</p>
                </div>

                <div class="ad-info">
                    <p class="bike-name">Honda Cbr 600</p>
                    <p class="bike-location inline-block">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Bloomfield, New Jersey, United States
                    </p>
                    <p class="bike-time inline-block"><i class="fa fa-clock-o" aria-hidden="true"></i>July 28, 2017</p>
                    <p class="bike-description">On The Wheel was established in 2006 and has grown fast to become one of top south's motorcycle shops. Our state ...</p>
                    <p class="bike-distance inline-block"><i class="fa fa-tachometer" aria-hidden="true"></i>8,000 km</p>
                    <p class="bike-cc inline-block">1500 cc</p>
                    <p class="bike-repair inline-block"><i class="fa fa-wrench" aria-hidden="true"></i>SxS & UTV</p>
                    <p class="bike-gear inline-block"><i class="fa fa-cog" aria-hidden="true"></i>Bronze</p>
                </div>

                <div class="ad-price">
                    <p class="bike-type" style="margin-top: 0px;"><span>Ad Type : </span> Sell</p>
                    <p class="bike-condition"><span>Condition : </span> New</p>
                    <p class="bike-visits"><span>Visits : </span>2080</p>
                    <p class="bike-price">
                        <span style="color: rgb(70, 168, 119); font-size: 22px;">$ 3,343</span>
                        (fixed)
                    </p>
                    <button class="green-button"><i class="fa fa-eye" style="margin-right: 10px;" aria-hidden="true"></i>VIEW AD</button>
                </div>
            </div>

            <div class="ad">
                <div class="ad-image">
                    <img src="images/bike-ad-3.jpeg" alt="Bike Image">
                    <i class="fa fa-user icon-absolute-padding-border" aria-hidden="true"></i>
                    <i class="fa fa-play icon-absolute-padding-border" aria-hidden="true"></i>
                    <p class="number-of-photos">3 photos</p>
                </div>

                <div class="ad-info">
                    <p class="bike-name">Kawasaki Ninja Bike</p>
                    <p class="bike-location inline-block">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Belleveu, Washington, United States
                    </p>
                    <p class="bike-time inline-block"><i class="fa fa-clock-o" aria-hidden="true"></i>July 28, 2017</p>
                    <p class="bike-description">On The Wheel was established in 2006 and has grown fast to become one of top south's motorcycle shops. Our state ...</p>
                    <p class="bike-distance inline-block"><i class="fa fa-tachometer" aria-hidden="true"></i>8,000 km</p>
                    <p class="bike-cc inline-block">1250 cc</p>
                    <p class="bike-repair inline-block"><i class="fa fa-wrench" aria-hidden="true"></i>Road Bikes</p>
                    <p class="bike-gear inline-block"><i class="fa fa-cog" aria-hidden="true"></i>Green</p>
                </div>

                <div class="ad-price">
                    <p class="bike-type" style="margin-top: 0px;"><span>Ad Type : </span> Sell</p>
                    <p class="bike-condition"><span>Condition : </span> New</p>
                    <p class="bike-visits"><span>Visits : </span>2169</p>
                    <p class="bike-price">
                        <span style="color: rgb(70, 168, 119); font-size: 22px;">$ 3,343</span>
                        (Negotiable)
                    </p>
                    <button class="green-button"><i class="fa fa-eye" style="margin-right: 10px;" aria-hidden="true"></i>VIEW AD</button>
                </div>
            </div>
        </div>


        <div class="stats">
            <div class="stat-container">
                <i class="fa fa-motorcycle" aria-hidden="true"></i>
                <p class="stat-number">1238</p>
                <p class="stat-label">Total <span>Bikes</span></p>
            </div>
            <div class="stat-container">
                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                <p class="stat-number">820</p>
                <p class="stat-label">Verified <span>Dealers</span></p>
            </div>
            <div class="stat-container">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <p class="stat-number">1024</p>
                <p class="stat-label">Active <span>Users</span></p>
            </div>
            <div class="stat-container">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <p class="stat-number">75</p>
                <p class="stat-label">Featured <span>Ads</span></p>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $('.stat-number').counterUp({
                delay: 8,
                time: 1000
                });
            });
        </script>


        <div class="latest-text">
            <h1>Latest <span>Blog</span> Post</h1>
            <hr class="big-line"><hr class="small-line">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos illo, totam autem numquam, ullam, voluptas dolor cum suscipit molestiae repellendus assumenda?</p>
        </div>


        <div class="blogs">
            <div class="blog-container" onclick="window.open('blog.php', '_self');">
                <img src="images/bike-ad-1.jpg" alt="Bike-Image">
                <i class="fa fa-user icon-absolute-padding-border" aria-hidden="true"></i>
                <div class="blog-info">
                    <p class="blog-date blog-info-first-line">June 30, 2017</p>
                    <p class="blog-comments blog-info-first-line">0 Comments</p>
                    <p class="blog-heading para-bold">Heavy Bike Production In North America Will Cease For A Year</p>
                </div>
            </div>

            <div class="blog-container" onclick="window.open('blog.php', '_self');">
                <img src="images/bike-ad-1.jpg" alt="Bike-Image">
                <i class="fa fa-user icon-absolute-padding-border" aria-hidden="true"></i>
                <div class="blog-info">
                    <p class="blog-date blog-info-first-line">June 30, 2017</p>
                    <p class="blog-comments blog-info-first-line">0 Comments</p>
                    <p class="blog-heading para-bold">We Hear: Yamaha RS Models Could Be Offered In Rear-Wheel</p>
                </div>
            </div>

            <div class="blog-container" onclick="window.open('blog.php', '_self');">
                <img src="images/bike-ad-1.jpg" alt="Bike-Image">
                <i class="fa fa-user icon-absolute-padding-border" aria-hidden="true"></i>
                <div class="blog-info">
                    <p class="blog-date blog-info-first-line">June 30, 2017</p>
                    <p class="blog-comments blog-info-first-line">0 Comments</p>
                    <p class="blog-heading para-bold">Land Rover Freelancer 2 Se First Impression</p>
                </div>
            </div>
        </div>

        <div class="customer-review">
            <div class="review-container">
                <p class="review-heading para-bold">VERY QUICK AND FAST SUPPORT</p>
                <p class="review-description">Consequatur quibusdam tempore inventore, temporibus reprehenderit mollitia, sint ducimus, quod quae neque voluptas.</p>
                <div class="customer-info">
                    <img src="images/customer-1.jpg" alt="Image">
                    <div class="customer-name-title-rating">
                        <p class="customer-name para-bold margin-2px">Hania Shiekh</p>
                        <p class="customer-title margin-2px">CEO Pvt. Inc.</p>
                        <span class="customer-star checked">&#9733;</span>
                        <span class="customer-star checked">&#9733;</span>    
                        <span class="customer-star checked">&#9733;</span>    
                        <span class="customer-star checked">&#9733;</span>        
                        <span class="customer-star">&#9734;</span>            
                    </div>
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                </div>
            </div>

            <div class="review-container">
                <p class="review-heading para-bold">DONE IN 3 MONTHS! AWESOME</p>
                <p class="review-description">Consequatur quibusdam tempore inventore, temporibus reprehenderit mollitia, sint ducimus, quod quae neque voluptas.</p>
                <div class="customer-info">
                    <img src="images/customer-1.jpg" alt="Image">
                    <div class="customer-name-title-rating">
                        <p class="customer-name para-bold margin-2px">Humayun Sarfaraz</p>
                        <p class="customer-title margin-2px">CTO Glixen Tech.</p>
                        <span class="customer-star checked">&#9733;</span>
                        <span class="customer-star checked">&#9733;</span>    
                        <span class="customer-star checked">&#9733;</span>    
                        <span class="customer-star checked">&#9733;</span>        
                        <span class="customer-star checked">&#9733;</span>          
                    </div>
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                </div>
            </div>

            <div class="review-container">
                <p class="review-heading para-bold">JUST FABULOUS THEME</p>
                <p class="review-description">Consequatur quibusdam tempore inventore, temporibus reprehenderit mollitia, sint ducimus, quod quae neque voluptas.</p>
                <div class="customer-info">
                    <img src="images/customer-1.jpg" alt="Image">
                    <div class="customer-name-title-rating">
                        <p class="customer-name para-bold margin-2px">Arslan Tariq</p>
                        <p class="customer-title margin-2px">CTO Albana Inc.</p>
                        <span class="customer-star checked">&#9733;</span>
                        <span class="customer-star checked">&#9733;</span>    
                        <span class="customer-star checked">&#9733;</span>    
                        <span class="customer-star">&#9734;</span>            
                        <span class="customer-star">&#9734;</span>            
                    </div>
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>


        <div class="bike-inspection">
            <div class="bike-inspection-img">
                <img src="images/bike-inspection.jpg" alt="Bike Image">
            </div>
            <div class="bike-inspection-text">
                <p class="para-italics">Want To Sell Your Bike ?</p>
                <p class="para-bold">BIKE INSPECTION</p>
                <p class="para-normal">Our CarSure experts inspect the car on over 200 checkpoints so you get complete satisfaction and peace of mind before buying.</p>
                <ul class="para-normal">
                    <li>Transmission</li>
                    <li>Steering</li>
                    <li>Enigne</li>
                    <li>Tires</li>
                    <li>Lighting</li>
                    <li>Interior</li>
                    <li>Suspension</li>
                    <li>Exterior</li>
                    <li>Brakes</li>
                    <li>Air Conditioning</li>
                    <li>Engine Diagnostics</li>
                    <li>Wheel Alignment</li>
                </ul>
                <button class="green-button">SCHEDULE INSPECTION</button>
            </div>
        </div>


        <div class="ads-by-make">
            <p>Ads <span style="color: rgb(70, 168, 119);">By Make</span></p>
            <hr align="left" class="big-line"><hr align="left" class="small-line" style="">
            <div style="text-align:center;">
            <figure class="brand-logo" style="margin-left: 0;">
                <img src="images/bmw.png" alt="BMW">
                <figcaption class="hover-animation">BMW</figcaption>
            </figure>

            <figure class="brand-logo">
                <img src="images/Honda.png" alt="BMW">
                <figcaption class="hover-animation">Honda</figcaption>
            </figure>

            <figure class="brand-logo">
                <img src="images/ducati.png" alt="BMW">
                <figcaption class="hover-animation">Ducati</figcaption>
            </figure>

            <figure class="brand-logo">
                <img src="images/kawasaki.png" alt="BMW">
                <figcaption class="hover-animation">Kawasaki</figcaption>
            </figure>

            <figure class="brand-logo">
                <img src="images/ktm.png" alt="BMW">
                <figcaption class="hover-animation">KTM</figcaption>
            </figure>

            <figure class="brand-logo" style="margin-right: 0;">
                <img src="images/suzuki.png" alt="BMW">
                <figcaption class="hover-animation">Suzuki</figcaption>
            </figure>
            </div>
        </div>


        <div class="app-for-mobile">
            <div class="app-for-mobile-img">
                <img src="images/hand-holding-phone.png" alt="">
            </div>

            <div class="app-for-mobile-text">
                <p style="font-size: 13px;">DOWNLOAD OUR APP</p>
                <p style="font-weight: bold; font-size: 20px; margin-top: 0;">GET OUR APP FOR YOUR MOBILE</p>
                <ul>
                    <li>Find nearby cars in your network with Scholar</li>
                    <li>Browse real hirers reviews to know why choose Scholar</li>
                    <li>Rent a car so easy with a tap!</li>
                    <li>Rent a car so easy with a tap!</li>
                </ul>
                <button class="hover-animation"><i class="fa fa-android"></i>DOWNLOAD FROM <br><span>WINDOW STORE</span></button>
                <button class="hover-animation"><i class="fa fa-apple"></i>DOWNLOAD FROM <br><span>APPLE STORE</span></button>
            </div>
        </div>


        <footer></footer>

    </body>
</html>
