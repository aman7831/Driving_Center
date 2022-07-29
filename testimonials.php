<div class="content-banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2><a href=".">Home</a> <i class="fa fa-angle-double-right"></i> Testimonials</h2>
      </div>
    </div>
  </div>
</div>
<div class="content-data reviews">
  <div class="container">
    <div class="content-block">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="reviewsblock">
            <h4>Write Your Reviews</h4>
          </div>
          <div class="reviewsform">
            <form class="form-horizontal" method="post" role="form" action="./testimonials-send"  enctype="multipart/form-data" style="color:#000">
              <div class="form-group ">
                <div class="col-sm-12">
                  <input type="text" name="fullName" class="form-control reviewsformstyle" placeholder="Name" required >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-sm-12">
                  <input type="email" name="email" class="form-control reviewsformstyle" placeholder="Email" required >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-sm-12">
                  <input type="tel" name="phone" class="form-control reviewsformstyle" placeholder="Phone" required >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-sm-12">
                  <input type="text" name="address" class="form-control reviewsformstyle" placeholder="Address" required >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-sm-12">
                  <textarea name="reviews" rows="8" class="form-control reviewsformstyle" placeholder="Your Reviews" required ></textarea>
                </div>
              </div>
              <div class=" form-group">
                <div class="col-sm-12">
                  <input type="submit" id="btn-sub" onclick="send_msg()" class="btn-reviewsformstyle" value="Send Reviews">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 block2">
          <div class="testimonials-page">
            <h4>What Our Clients Say!</h4>
            <div id="owl-demo3" class="owl-carousel owl-theme">

              <div class="item">
                <img src="images/client_img.png" alt="" />
                <h6>Aman Bhandari</h6>
                <p>Driving Training Center taught me to be a knowledgeable, skilful and confident driver. All their trainers are very professional and taught in a very effective way.</p>
              </div>
              <div class="item">
                <img src="images/client_img.png" alt="" />
                <h6>Nischal Adhikari</h6>
                <p>I was nervous to learn driving but my Instructors were very patient and kind. I learnt and passed 1st time. Thank You Driving Center.</p>
              </div>
              <div class="item">
                <img src="images/client_img.png" alt="" />
                <h6> Prashanna Pun Magar</h6>
                <p>I passed on my first trail thanks to the instructors in Driving Center, I very much recommend them.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>