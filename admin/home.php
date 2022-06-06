<?php
    require_once 'includes/header.php';



?>

<style>
     .loader-container{
    position: fixed;
    top:0; left:0;
    z-index: 10000;
    background:#fff;
    display: flex;
    align-items: center;
    justify-content: center;
    height:100%;
    width:100%;
  }
  
  .loader-container.fade-out{
    top:-120%;
  }
</style>
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>best minute <span>trans app</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus suscipit porro nam libero natus error consequatur sed repudiandae eos quo?</p>
        <a href="login.php" class="btn" id="bt">START NOW</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> app features </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/f-icon1.png" alt="">
            <h3>Record Meeting Speech</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="features-record.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/f-icon2.png" alt="">
            <h3>Speech To Text</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="speech2text.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/f-icon3.png" alt="">
            <h3>Save Speech and Text</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="savespeechText.php" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> about the app </h1>

    <div class="column">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>Easy And Perfect Solution For Your minute transcribing</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla placeat deserunt saepe repudiandae veniam soluta minima dolor hic aperiam iure.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quaerat. Dolorem ratione saepe magni quo inventore porro ab voluptates eos, nam eius provident accusantium, quia similique est, repellendus et reiciendis.</p>
            <div class="buttons">
                <a href="#" class="btn"> <i class="fab fa-apple"></i> app store </a>
                <a href="#" class="btn"> <i class="fab fa-google-play"></i> google-play </a>
            </div>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- newsletter  -->

<div class="newsletter">

    <h3>Subscribe For New Features</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sed aliquam quibusdam neque magni magnam est laborum doloribus, facere dolores.</p>
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="Subscribe">
    </form>

</div>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> people's review </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/pic1.jpg" alt="">
                <h3>mubarak</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="comment">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus et, perspiciatis nisi tempore aspernatur accusantium sed distinctio facilis aperiam laborum autem earum repellat, commodi eum. Ullam cupiditate expedita officiis obcaecati?
                </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/pic2.jpg" alt="">
                <h3>code_hero</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="comment">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus et, perspiciatis nisi tempore aspernatur accusantium sed distinctio facilis aperiam laborum autem earum repellat, commodi eum. Ullam cupiditate expedita officiis obcaecati?
                </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/pic3.jpg" alt="">
                <h3>Ademola</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="comment">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus et, perspiciatis nisi tempore aspernatur accusantium sed distinctio facilis aperiam laborum autem earum repellat, commodi eum. Ullam cupiditate expedita officiis obcaecati?
                </div>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <h1 class="heading"> Our Pricing Plans </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">basic</h3>
            <div class="price">$10<span>/monthly</span></div>
            <ul>
                <li> <i class="fas fa-check"></i> 1000+ downloads </li>
                <li> <i class="fas fa-check"></i> No transaction fees </li>
                <li> <i class="fas fa-times"></i> unlimited storage </li>
                <li> <i class="fas fa-times"></i> 5 downloads </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">standard</h3>
            <div class="price">$15<span>/monthly</span></div>
            <ul>
                <li> <i class="fas fa-check"></i> 1000+ downloads </li>
                <li> <i class="fas fa-check"></i> No transaction fees </li>
                <li> <i class="fas fa-check"></i> unlimited storage </li>
                <li> <i class="fas fa-times"></i> 5 downloads </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">premium</h3>
            <div class="price">$25<span>/monthly</span></div>
            <ul>
                <li> <i class="fas fa-check"></i> 1000+ downloads </li>
                <li> <i class="fas fa-check"></i> No transaction fees </li>
                <li> <i class="fas fa-check"></i> unlimited storage </li>
                <li> <i class="fas fa-check"></i> 5 downloads </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

    </div>

</section>

<!-- pricing section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="image">
        <img src="images/contact-img.png" alt="">
    </div>

    <form action="">

        <h1 class="heading">contact us</h1>

        <div class="inputBox">
            <input type="text" name="name" required>
            <label>name</label>
        </div>

        <div class="inputBox">
            <input type="email" name="email" required>
            <label>email</label>
        </div>

        <div class="inputBox">
            <input type="number" name="tel" required>
            <label>phone</label>
        </div>

        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" class="btn" value="send message">

    </form>

</section>

<!-- loader  -->
<div class="loader-container">
    <img src="images/loader.GIF" alt="">
</div>

<!-- contact section edns -->

<!-- <script src="index.js"></script>
<script src="loader.js"></script> -->

<?php
    require_once 'includes/footer.php';
?>