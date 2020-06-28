@extends('webuilder.layouts.app')

@section('title','Home')

@section('header-class', 'transparent_menu')

@section('body')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Hi there, This is Asmono Wikan</h5>
                        <h1>Fullstack Developer</h1>
                        <div class="banner_btn">
                            <a href="#" class="btn_1">Contact me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- about part start-->
<section class="about_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_text">
                    <h4>about me</h4>
                    <p>Good lights it very to above. Days image to sea. Over there seasons and spirit beast in. Greater bearing creepeth very behold fourth night morning seed moved.</p>
                    <div class="experiance">
                        <h2>07</h2>
                        <p>Years of <span>Experiences</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="experiance_list">
                    <h4>Experiences</h4>
                    <div class="experiance_list_iner">
                        <div class="single_experiance_list">
                            <h5>Product designer</h5>
                            <p>at apple from 2011 to present</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>UI designer </h5>
                            <p>at theme from 2011 to present</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>Print designert</h5>
                            <p>at envato from 2011 to present</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>Product designer</h5>
                            <p>at apple from 2011 to present</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>UI designer </h5>
                            <p>at theme from 2011 to present</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>Print designert</h5>
                            <p>at envato from 2011 to present</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

<!-- portfolio part css start -->
<section class="portfolio_part section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <p>My portfolio</p>
                    <h2>Take a look around some of my awesome works</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section_btn text-right">
                    <a href="#" class="btn_2">More works</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mesonary_part">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <a href="portfolio_details.html" class="grid-item">
                            <img src="img/port_1.png" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item big_height big_weight">
                            <img src="img/port_2.png" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item">
                            <img src="img/port_3.png" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item big_weight">
                            <img src="img/port_4.png" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item">
                            <img src="img/port_5.png" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio part css end -->

<!-- Service part start-->
<section class="service_part padding_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <p>My portfolio</p>
                    <h2>Take a look around some of my awesome works</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-layers"></span>
                        <h2>User experience design</h2>
                        <p>There winged grass midst moving earth seed herb fifth you multiply you divide cattle.</p>
                        <a href="#" class="learn_btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part active">
                    <div class="single_service_text">
                        <span class="flaticon-design"></span>
                        <h2>Digital art</h2>
                        <p>There winged grass midst moving earth seed herb fifth you multiply you divide cattle.</p>
                        <a href="#" class="learn_btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-speaker"></span>
                        <h2>Social media marketing</h2>
                        <p>There winged grass midst moving earth seed herb fifth you multiply you divide cattle.</p>
                        <a href="#" class="learn_btn">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service part end-->

<!--::review_part start::-->
<section class="review_part section_padding">
    <div class="container">
       <div class="row">
          <div class="col-xl-5">
             <div class="section_tittle">
                <p>Word from my clients</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="client_review_part owl-carousel">
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars
                      </p>
                      <div class="client_review_img">
                        <img src="img/client/client_1.png" alt="#" />
                        <h4>Mosan Cameron</h4>
                        <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars
                      </p>
                      <div class="client_review_img">
                         <img src="img/client/client_2.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars
                      </p>
                      <div class="client_review_img">
                         <img src="img/client/client_2.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars
                      </p>
                      <div class="client_review_img">
                         <img src="img/client/client_2.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                        <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars
                        </p>
                      <div class="client_review_img">
                         <img src="img/client/client_3.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars
                      </p>
                      <div class="client_review_img">
                         <img src="img/client/client_3.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
 <!--::review_part end::-->

@endsection
