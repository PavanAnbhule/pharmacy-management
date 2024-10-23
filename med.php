<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Page</title>

    <link rel="stylesheet" type="text/css" href="medicine_style.css">

    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    
    <header class="header">
        <a herf="#" class="logo">
            <img src="medicure_logo.png">
        </a>

        <nav class="headbar">
      <!--      <a href="index.html">Home</a>
            <a href="login.html">Login</a>
            <a href="med.html">Medicine</a>
            <a href="#service">Service</a>
            <a href="#contact">Contact</a>-->
        </nav>

        <div class="menubtn">
            <button>Helpline</button>
        </div>

        <div class="icon">
            <div class="fa fa-search" id="search-btn"></div>
            <div class="fa fa-shopping-cart" id="cart-btn"></div>
            <div class="fa fa-upload" id="up-btn"></div>

        </div>


        <form class="search-from">
            <input type="search" id="search-box" placeholder="Type Something...">
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <div class="shopping-cart">

            <div class="box">
                <img src="pills.png">
                <i class="fa fa-trash"></i>
                <div class="content">
                    <h3>Crocin Advance</h3>
                    <span class="price">$19.99</span>
                </div>
            </div>

            <div class="box">
                <img src="pills.png">
                <i class="fa fa-trash"></i>
                <div class="content">
                    <h3>Dolo 650</h3>
                    <span class="price">$33.66</span>
                </div>
            </div>

            <div class="box">
                <img src="pills.png">
                <i class="fa fa-trash"></i>
                <div class="content">
                    <h3>PAN-D</h3>
                    <span class="price">$210.00</span>
                </div>
            </div>

        </div>

        <div class="upload-form">
            <input class="default-btn" type="file" hidden>
            <div class="btn">
                <button onclick="active()" class="custom-btn">Upload Prescription
                </button>
            </div>
            <div class="file-name">No file Chosen</div>
        </div>
    </header>

    <section class="top" id="top">
        <div class="container">
            <h1 class="heading">WELLNESS</h1><hr>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="slide-img">
                    <img src="sanitizer_img.png">

                    <div class="overlay">
                        <p>It is a one of its kind hygiene product that kills 99.99% germs. It also keeps your hands soft and moisturized.</p>
                    
                        <a href="#" class="learn-btn">Learn More</a>

                    </div>
                </div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Hand Sanitizer 500ml</a>
                        <span>new arrival</span>
                    </div>
                    <a href="#" class="price">MRP- 125.00</a>
                </div>

                <a href="buy.html" class="my-button"  title="b-title">
                    Order Now
                </a>
                <a href="#" class="my-button" title="b-title">
                    Add to cart
                </a>
            </div>
            <div class="box">
                <div class="slide-img">
                    <img src="shampoo_img.png">

                    <div class="overlay">
                        <p>Advanced formula facilitates deep cleansing to help make your scalp fight dandruff and itchiness.</p>
                    
                        <a href="#" class="learn-btn">Learn More</a>

                    </div>
                </div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Shampoo & Conditionar 180ml</a>
                        <span>new arrival</span>
                    </div>
                    <a href="#" class="price">MRP- 80.00</a>
                </div>

                <a href="#" class="my-button" title="b-title">
                    Order Now
                </a>
                <a href="#" class="my-button" title="b-title">
                    Add to cart
                </a>
            </div>
        </div>
        
    </section>

    <section class="bottom" id="top">
        <div class="container">
            <h1 class="heading">Medicine</h1><hr>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="slide-img">
                    <img src="tab_img.png">

                    <div class="overlay">
                        <p>Treating high blood pressure will help prevent problems such as heart disease, stroke, loss of eyesight, chronic kidney disease, and other blood vessel diseases.</p>
                    
                        <a href="#" class="learn-btn">Learn More</a>

                    </div>
                </div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Blood Presure Tablet</a>
                        <span>new arrival</span>
                    </div>
                    <a href="#" class="price">MRP-255.89</a>
                </div>

                <a href="#" class="my-button" title="b-title">
                    Order Now
                </a>
                <a href="#" class="my-button" title="b-title">
                    Add to cart
                </a>
            </div>
            <div class="box">
                <div class="slide-img">
                    <img src="syp_img.png">

                    <div class="overlay">
                        <p>This product also contains an antihistamine (such as triprolidine, chlorpheniramine, doxylamine) that works by blocking the effects of a certain natural substance (histamine), which causes allergy symptoms. It also has a drying effect.</p>
                    
                        <a href="#" class="learn-btn">Learn More</a>

                    </div>
                </div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                
                <div class="detail-box">
                    <div class="type">
                        <a href="#">Cough Syrup 100ml</a>
                        <span>new arrival</span>
                    </div>
                    <a href="#" class="price">MRP- 99.25</a>
                </div>

                <a href="#" class="my-button" title="b-title">
                    Order Now
                </a>
                <a href="#" class="my-button" title="b-title">
                    Add to cart
                </a>
            </div>
        </div>
        
    </section>


    <script type="text/javascript" src="medicine1.js"></script>

</body>
</html>