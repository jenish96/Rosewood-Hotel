@extends('user.master.masterpage')

@section('title')
Rosewood - Hotel Details
@endsection

@section('css')
    
@endsection

@section('main')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{$hotelData->hotel_name}}</h2>
                        <ul>
                            <li><a href="/user/viewHotel">Hotels</a></li>
                            <li><span>{{$hotelData->hotel_name}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- wpo-hotel-details-section-start -->
    <div class="wpo-hotel-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpo-hotel-details-wrap">
                        <div class="wpo-hotel-details-area">
                            <form class="clearfix">
                                <div class="details-sub">
                                    <span>BEDS</span>
                                    <h2>1 Double Bed</h2>
                                </div>
                                <div class="details-sub">
                                    <span>ROOM SIZE</span>
                                    <h2>870 sq ft / 132 sq m</h2>
                                </div>
                                <div class="details-sub">
                                    <span>OCCUPANCY</span>
                                    <h2>2 adults (1 children)</h2>
                                </div>
                                <div class="details-sub">
                                    <span>Bathroom</span>
                                    <h2>Shower bath</h2>
                                </div>
                                <div class="details-sub">
                                    <h5>Price <span>$250</span> / Night</h5>
                                    <button class="theme-btn" type="submit">Check Availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-hotel-details-section-end -->
    <!-- wpo-room-area-start -->
    <div class="wpo-room-area-s2 section-padding pt-0">
        <div class="container-fluid">
            <div class="room-wrap room-active owl-carousel">
                <div class="room-item">
                    <div class="room-img">
                        <img src="{{URL::to('/')}}/user/images/room/1.jpg" alt="">
                    </div>
                    <div class="room-content">
                        <h2><a href="room-single.html">Deluxe Contrast Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$200 <span>/ Night</span></h3>
                    </div>
                </div>
                {{-- <div class="room-item">
                    <div class="room-img">
                        <img src="{{URL::to('/')}}/user/images/room/2.jpg" alt="">
                    </div>
                    <div class="room-content">
                        <h2><a href="room-single.html">Luxery Twin Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$250 <span>/ Night</span></h3>
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-img">
                        <img src="{{URL::to('/')}}/user/images/room/3.jpg" alt="">
                    </div>
                    <div class="room-content">
                        <h2><a href="room-single.html">Single Contrast Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$280 <span>/ Night</span></h3>
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-img">
                        <img src="{{URL::to('/')}}/user/images/room/4.jpg" alt="">
                    </div>
                    <div class="room-content">
                        <h2><a href="room-single.html">Deluxe Contrast Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$200 <span>/ Night</span></h3>
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-img">
                        <img src="{{URL::to('/')}}/user/images/room/5.jpg" alt="">
                    </div>
                    <div class="room-content">
                        <h2><a href="room-single.html">Luxery Twin Room</a></h2>
                        <ul>
                            <li><i class="fi flaticon-expand-arrows"></i>52 sqm</li>
                            <li><i class="fi flaticon-bed"></i>2 Bed</li>
                            <li><i class="fi flaticon-bathtub"></i>1 Bathroom</li>
                        </ul>
                        <h3>$250 <span>/ Night</span></h3>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- .room-area-start -->
    <!--Start Room-details area-->
    <div class="Room-details-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="room-description">
                        <div class="room-title">
                            <h2>Description</h2>
                        </div>
                        <p class="p-wrap">It's difficult to find examples of lorem ipsum in use before Letraset made
                            it popular as a dummy text in the 1960s, although McClintock says he remembers coming
                            across the lorem ipsum passage in a book of old metal type samples.</p>
                        <p>So when is it okay to use lorem ipsum? First, lorem ipsum works well for staging. It's
                            like the props in a furniture store—filler text makes it look like someone is home. The
                            same Wordpress template might eventually be home to a fitness blog, a photography
                            website, or the online journal of a cupcake fanatic. Lorem ipsum helps them imagine what
                            the lived-in website might look like.</p>
                        <p>Second, use lorem ipsum if you think the placeholder text will be too distracting. For
                            specific projects, collaboration between copywriters and designers may be best, however,
                            like Karen McGrane said, draft copy has a way of turning any meeting about layout
                            decisions into a discussion about word choice. So don't be afraid to use lorem ipsum to
                            keep everyone focused.</p>
                    </div>
                    <div class="room-details-service">
                        <div class="row">
                            <div class="room-details-item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5">
                                        <div class="room-d-text">
                                            <div class="room-title">
                                                <h2>Amenities</h2>
                                            </div>
                                            <ul>
                                                <li><a href="#">Refrigerator and water</a></li>
                                                <li><a href="#">Air Conditioner Facilities</a></li>
                                                <li><a href="#">Fruits are always available</a></li>
                                                <li><a href="#">2 Sets of nightwear</a></li>
                                                <li><a href="#">Tables and Chairs</a></li>
                                                <li><a href="#">2 Elevator Available</a></li>
                                                <li><a href="#">Room Side Belcony</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <div class="room-d-img">
                                            <img src="{{URL::to('/')}}/user/images/room/img-7.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <div class="room-d-img">
                                            <img src="{{URL::to('/')}}/user/images/room/img-8.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="room-d-text2">
                                            <div class="room-title">
                                                <h2>Room Services</h2>
                                            </div>
                                            <ul>
                                                <li><a href="#">Daily Cleaning</a></li>
                                                <li><a href="#">Special Swimming Pool</a></li>
                                                <li><a href="#">Free Parking</a></li>
                                                <li><a href="#">Free-to-use smartphone </a></li>
                                                <li><a href="#">Free Wifi</a></li>
                                                <li><a href="#">2 Elevator Available</a></li>
                                                <li><a href="#">Room Side Belcony</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-area">
                        <div class="room-title">
                            <h2>Pricing Plans</h2>
                        </div>
                        <div class="pricing-table">
                            <table class="table-responsive pricing-wrap">
                                <thead>
                                    <tr>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                        <th>Sun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>$250</td>
                                        <td>$250</td>
                                        <td>$250</td>
                                        <td>$250</td>
                                        <td>$250</td>
                                        <td>$250</td>
                                        <td>$250</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="room-review">
                        <div class="room-title">
                            <h2>Room Reviews</h2>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="{{URL::to('/')}}/user/images/room/r1.jpg" alt="">
                            </div>
                            <div class="review-text">
                                <div class="r-title">
                                    <h2>Marry Watson</h2>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-img">
                                <img src="{{URL::to('/')}}/user/images/room/r2.jpg" alt="">
                            </div>
                            <div class="review-text">
                                <div class="r-title">
                                    <h2>Lily Havenly</h2>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p> Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                    lacus vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                    <div class="add-review">
                        <div class="room-title">
                            <h2>Add Review</h2>
                        </div>
                        <div class="wpo-blog-single-section review-form ">
                            <div class="give-rat-sec">
                                <p>Your rating *</p>
                                <div class="give-rating">
                                    <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                </div>
                            </div>
                            <div class="review-add">
                                <div class="comment-respond">
                                    <form id="commentform" class="comment-form">
                                        <div class="form-inputs">
                                            <input placeholder="Your Name*" type="text">
                                            <input placeholder="Your Email*" type="email">
                                        </div>
                                        <div class="form-textarea">
                                            <textarea id="comment" placeholder="Your Review"></textarea>
                                        </div>
                                        <div class="form-check">
                                            <div class="shipp pb">
                                                <input type="checkbox" id="c2" name="cc">
                                                <label for="c2"><span></span>Save my name, email, and website in
                                                    this browser for the next time I comment.</label>
                                            </div>
                                        </div>
                                        <div class="form-submit">
                                            <input id="submit" value="Submit Now" type="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Start Room area-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog-sidebar room-sidebar">
                        <div class="widget check-widget">
                            <h3>Check Availability</h3>
                            <form>
                                <!-- Datepicker as text field -->
                                <div class="input-group date">
                                    <input autocomplete="off" type="text" id="datepicker" placeholder="Check in">
                                    <i class="fi flaticon-calendar"></i>
                                </div>

                                <!-- Datepicker as text field -->
                                <div class="input-group date">
                                    <input autocomplete="off" type="text" id="datepicker2" placeholder="Check Out">
                                    <i class="fi flaticon-calendar"></i>
                                </div>

                                <div class="input-group date">
                                    <select name="Adults" id="Adults">
                                        <option value="">Adults</option>
                                        <option value="">2</option>
                                        <option value="">5</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="input-group date">
                                    <select name="Children" id="Children">
                                        <option value="">Children</option>
                                        <option value="">2</option>
                                        <option value="">5</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="input-group date">
                                    <button class="theme-btn" type="submit">Check Availability</button>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Related Posts</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{URL::to('/')}}/user/images/recent-posts/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="blog-single.html">17 places you cannot ignore in Paris</a></h4>
                                        <span class="date">19 Jun 2021 </span>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{URL::to('/')}}/user/images/recent-posts/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="blog-single.html">Be Careful About This, When You Are In Snow</a></h4>
                                        <span class="date">22 May 2021 </span>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{URL::to('/')}}/user/images/recent-posts/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="blog-single.html">Things You Must Need To See While You’re In Dubai</a></h4>
                                        <span class="date">12 Apr 2021 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget wpo-instagram-widget">
                            <div class="widget-title">
                                <h3>Discover Our Rooms</h3>
                            </div>
                            <ul class="d-flex">
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/1.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/2.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/3.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/4.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/5.jpg"
                                            alt=""></a></li>
                                <li><a href="room-single.html"><img src="{{URL::to('/')}}/user/images/instragram/6.jpg"
                                            alt=""></a></li>
                            </ul>
                        </div>
                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Room-details area-->
    <!-- start wpo-newslatter-section -->
    <section class="wpo-newslatter-section section-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="wpo-section-title-s2">
                        <h2>Subscribe & Get Special Discount!</h2>
                        <p>Don’t Wanna Miss Somethings? Subscribe Right Now And Get The Special
                            Discount And Monthly Newsletter.</p>
                    </div>
                </div>
            </div>
            <div class="wpo-newsletter">
                <div class="newsletter-form">
                    <form>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address..." required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
        <div class="n-shape">
            <img src="{{URL::to('/')}}/user/images/nshape1.png" alt="">
        </div>
        <div class="n-shape2">
            <img src="{{URL::to('/')}}/user/images/nshape2.png" alt="">
        </div>
    </section>
    <!-- end wpo-newslatter-section -->
@endsection

@section('js')
    
@endsection