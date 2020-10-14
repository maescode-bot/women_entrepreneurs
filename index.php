<?php 
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html>

<?php
    include("includes/header.inc.php");
 ?>

<!---Slider starts here-->
<div class="slider-container rev_slider_wrapper" style="height: 670px">
        <div
          id="revolutionSlider"
          class="slider rev_slider"
          data-version="5.4.8"
          data-plugin-revolution-slider
          data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}"
        >
          <ul>
            <li data-transition="fade">
              <img
                src="img/bg-1.jpg"
                alt=""
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                class="rev-slidebg"
              />

              <div
                class="tp-caption tp-resizeme"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="right"
                data-y="top"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                
              </div>

              <div
                class="tp-caption tp-resizeme"
                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="left"
                data-y="center"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                
              </div>

              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-7"
                data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="-500"
                data-y="-700"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                <img src="img/slides/slide-parallax-porto-symbol.png" alt="" />
              </div>

              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="['-150','-150','-150','-240']"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="1000"
                data-transform_in="x:[-300%];opacity:0;s:500;"
                data-transform_idle="opacity:0.2;s:500;"
              >
                <img src="img/slides/slide-title-border.png" alt="" />
              </div>

              <div
                class="tp-caption text-color-light font-weight-normal"
                data-x="center"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="700"
                data-fontsize="['22','22','22','40']"
                data-lineheight="['25','25','25','45']"
                data-transform_in="y:[-50%];opacity:0;s:500;"
              >
                What is our Vision ?
              </div>

              <div
                class="tp-caption d-none d-md-block"
                data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-x="center"
                data-hoffset="['80','80','80','135']"
                data-y="center"
                data-voffset="['-33','-33','-33','-55']"
              >
              </div>

              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="['150','150','150','240']"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="1000"
                data-transform_in="x:[300%];opacity:0;s:500;"
                data-transform_idle="opacity:0.2;s:500;"
              >
                <img src="img/slides/slide-title-border.png" alt="" />
              </div>

              <div
                class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-x="center"
                data-y="center"
                data-fontsize="['50','50','50','90']"
                data-lineheight="['55','55','55','95']"
              >
                We Empower Women
              </div>

              <div
                class="tp-caption font-weight-light text-center"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-x="center"
                data-y="center"
                data-voffset="['40','40','40','80']"
                data-fontsize="['18','18','18','50']"
                data-lineheight="['20','20','20','55']"
              >
                <p style="color: white; margin-top: 30px">
                   Helping women overcome barriers...
                </p>
              </div>
            </li>
            <li data-transition="fade">
              <img
                src="img/bg-2.jpg"
                alt=""
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                class="rev-slidebg"
              />

              <div
                class="tp-caption tp-resizeme"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="right"
                data-y="top"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                
              </div>

              <div
                class="tp-caption tp-resizeme"
                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="left"
                data-y="center"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                
              </div>

              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-7"
                data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="-500"
                data-y="-700"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                <img src="img/slides/slide-parallax-porto-symbol.png" alt="" />
              </div>

              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="['-150','-150','-150','-240']"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="1000"
                data-transform_in="x:[-300%];opacity:0;s:500;"
                data-transform_idle="opacity:0.2;s:500;"
              >
                <img src="img/slides/slide-title-border.png" alt="" />
              </div>

              <div
                class="tp-caption text-color-light font-weight-normal"
                data-x="center"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="700"
                data-fontsize="['22','22','22','40']"
                data-lineheight="['25','25','25','45']"
                data-transform_in="y:[-50%];opacity:0;s:500;"
              >
                What is our Mission ?
              </div>

              <div
                class="tp-caption d-none d-md-block"
                data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-x="center"
                data-hoffset="['80','80','80','135']"
                data-y="center"
                data-voffset="['-33','-33','-33','-55']"
              >
              </div>

              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="['150','150','150','240']"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="1000"
                data-transform_in="x:[300%];opacity:0;s:500;"
                data-transform_idle="opacity:0.2;s:500;"
              >
                <img src="img/slides/slide-title-border.png" alt="" />
              </div>

              <div
                class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-x="center"
                data-y="center"
                data-fontsize="['50','50','50','90']"
                data-lineheight="['55','55','55','95']"
              >
                We Support Women
              </div>

              <div
                class="tp-caption font-weight-light text-center"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-x="center"
                data-y="center"
                data-voffset="['40','40','40','80']"
                data-fontsize="['18','18','18','50']"
                data-lineheight="['20','20','20','55']"
              >
                <p style="color: white; margin-top: 30px">
                An organisation that supports women entrepreneurial...
                </p>
              </div>
            </li>
            <li data-transition="fade">
              <img
                src="img/bg-3.jpg"
                alt=""
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                class="rev-slidebg"
              />

              <div
                class="tp-caption tp-resizeme"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="right"
                data-y="top"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                
              </div>

              <div
                class="tp-caption tp-resizeme"
                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="left"
                data-y="center"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                
              </div>

              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-7"
                data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-type="image"
                data-x="-500"
                data-y="-700"
                data-width="['auto']"
                data-height="['auto']"
                data-basealign="slide"
              >
                <img src="img/slides/slide-parallax-porto-symbol.png" alt="" />
              </div>

              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="['-150','-150','-150','-240']"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="1000"
                data-transform_in="x:[-300%];opacity:0;s:500;"
                data-transform_idle="opacity:0.2;s:500;"
              >
                <img src="img/slides/slide-title-border.png" alt="" />
              </div>

              <div
                class="tp-caption text-color-light font-weight-normal"
                data-x="center"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="700"
                data-fontsize="['22','22','22','40']"
                data-lineheight="['25','25','25','45']"
                data-transform_in="y:[-50%];opacity:0;s:500;"
              >
                What is our Focus?
              </div>

              <div
                class="tp-caption d-none d-md-block"
                data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-x="center"
                data-hoffset="['80','80','80','135']"
                data-y="center"
                data-voffset="['-33','-33','-33','-55']"
              >
              </div>

              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="['150','150','150','240']"
                data-y="center"
                data-voffset="['-50','-50','-50','-75']"
                data-start="1000"
                data-transform_in="x:[300%];opacity:0;s:500;"
                data-transform_idle="opacity:0.2;s:500;"
              >
                <img src="img/slides/slide-title-border.png" alt="" />
              </div>

              <div
                class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                data-x="center"
                data-y="center"
                data-fontsize="['50','50','50','90']"
                data-lineheight="['55','55','55','95']"
              >
                Rapid Development of Women
              </div>

              <div
                class="tp-caption font-weight-light text-center"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-x="center"
                data-y="center"
                data-voffset="['40','40','40','80']"
                data-fontsize="['18','18','18','50']"
                data-lineheight="['20','20','20','55']"
              >
                <p style="color: white; margin-top: 30px">
                  To organize seminars, discussion groups, mentoring and public
                  lectures for the general enlightenment ...
                </p>
              </div>
            </li>            
          </ul>
        </div>
      </div>
      <!---Slider ends here---->
      <div role="main" class="main">
        <div class="custom-section-svg custom-section-full-width">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1820"
            height="840"
            viewBox="0 0 481.54166 222.25"
            version="1.1"
            style="
              background:#f2f2f2;
              background-size: cover;
              background-position: center;
            "
          >
            <g transform="translate(0,-74.749984)">
              <path
                style="
                  fill: #1860d3;
                  fill-opacity: 0.83417089;
                  stroke-width: 0.26458332;
                "
                d="M -37.41942,65.027063 V 297.04648 h 555.625 V 65.027063 Z m 385.24418,26.073343 c 5.16568,-0.06559 10.30682,1.828283 14.17588,5.697327 l 22.51077,22.510767 c 2.81369,2.8137 7.10706,1.33438 7.86464,-2.23708 2.21908,-6.43973 5.15977,-13.60111 8.76741,-17.208757 10.10198,-10.101963 25.7768,-10.300582 35.62522,-0.452167 9.84843,9.848414 9.64978,25.523244 -0.45217,35.625204 -3.60765,3.60766 -10.76936,6.54852 -17.20929,8.76743 -3.57201,0.75699 -4.34764,5.75355 -2.23655,7.86463 l 29.54549,29.54549 c 7.73808,7.73808 7.57481,20.56352 -0.36227,28.50058 l -17.31727,17.31729 c -4.32922,4.32922 -12.15765,3.7166 -14.93552,-1.94717 -2.07338,-4.96117 -4.86992,-9.19938 -6.98047,-11.3099 -9.8484,-9.84841 -25.52375,-9.64979 -35.62572,0.45217 -10.10177,10.10177 -10.3006,25.77732 -0.45218,35.62573 2.11053,2.11053 6.34937,4.90595 11.30941,6.98045 4.94276,3.49888 6.27689,10.60629 1.94767,14.93552 l -17.31729,17.31729 c -7.93724,7.93726 -20.76249,8.09984 -28.50057,0.36174 l -84.41553,-84.41552 c -7.7381,-7.7381 -7.57482,-20.56301 0.36225,-28.50007 l 79.37139,-79.371375 v -5.16e-4 c 3.96862,-3.968627 9.15901,-5.993473 14.3247,-6.059063 z"
              />
              <path
                style="
                  fill: #ffffff;
                  fill-opacity: 1;
                  stroke: none;
                  stroke-width: 0.26052347;
                  stroke-opacity: 1;
                "
                d="m 314.90636,266.1817 0.0512,0.0512 h 71.61114 v 0 c -23.89724,-0.003 -47.7139,0.007 -71.61114,0 z m 71.66229,0.0512 c 0,0 -0.0376,2.36455 -1.54522,4.09644 -5.94783,6.83282 -18.34141,18.62228 -18.34141,18.62228 -7.93727,7.93727 -20.76199,8.23348 -28.50007,0.49537 L 314.95751,266.23286 H -43.089358 v 31.34279 H 521.98518 v -31.34279 z"
                id="rect857"
              />
            </g>
          </svg>
          <div class="container container-lg z-index-">
            <div class="row">
              <div class="col-md-7 col-lg-6">
                <h2
                  class="text-color-light font-weight-extra-bold text-6 text-lg-10 text-xl-12 line-height-1-1 negative-ls-1 pb-2 mb-2 mb-xl-4 appear-animation"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="300"
                >
                  Welcome to Women Entrepreneurs and Professionals Development
                  Network
                </h2>
              </div>
            </div>
          </div>
        </div>

        <section
          class="section section-height-4 custom-section-full-width custom-section-pull-top-1 bg-color-transparent border-0 position-relative z-index-1 pb-0 pb-xl-3 mb-0"
          style="
            background-image: url(img/demos/it-services/backgrounds/dots-background-1.png);
            background-repeat: no-repeat;
            background-position: top left;
          "
        >
          <div class="container container-lg mt-2 mb-xl-2">
            <div class="row">
              <div class="col-xl-7 pb-5 pb-xl-0 mb-5 mb-xl-0">
                <div class="custom-overlapping-cards">
                  <div
                    class="card border-0 box-shadow-1 pl-2 appear-animation"
                    data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="300"
                  >
                  <div class="ml-n2 card-head" style="background:#f2f2f2;text-align: center;"/>
                    <i class="fa fa-eye fa-5x p-2" style="color:#ff3b14"></i>
                  </div>
                    <div class="card-body pt-4">
                      <h4
                        class="custom-heading-bar font-weight-bold text-5 text-primary"
                      >
                        OUR VISION
                      </h4>
                      <p class="custom-font-secondary text-4 mb-3">
                      Helping women overcome barriers to business and professional success by providing education,  information and high- level networking opportunities focused on business growth and career advancement.                                                   </p>
                    </div>
                  </div>
                  <div class="card-transform">
                    <div
                      class="card border-0 box-shadow-1 pr-2 appear-animation"
                      data-appear-animation="fadeInUpShorter"
                      data-appear-animation-delay="500"
                    >
                  <div class="mr-n2 card-head" style="background:#f2f2f2;text-align: center;"/>
                    <i class="fa fa-briefcase fa-5x p-2" style="color:#ff3b14"></i>
                  </div>
                      <div class="card-body pt-4">
                        <h4
                          class="custom-heading-bar custom-heading-bar-right font-weight-bold text-primary text-right text-5"
                        >
                          OUR MISSION
                        </h4>
                        <p
                          class="text-right custom-font-secondary text-4 pl-4 ml-3 mb-3"
                        >
                        An organisation that supports women entrepreneurial and  professional development at all levels, a platform in which women create, own and sustain viable businesses and advance in their career, thereby contributing to economic growth and job creation.    
                        </p>
                      </div>
                    </div>
                  </div>
                  <img
                    src="img/demos/it-services/puzzle-and-dots.png"
                    class="custom-overlapping-cards-puzzle-background"
                    alt="Puzzle and Dots background image"
                  />
                </div>
              </div>
              <div class="col-xl-5">
                <span
                  class="d-block font-weight-bold mb-1 appear-animation"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="700"
                  >
                  Who are Women Entrepreneurs and Professionals Development Network?
                  </span
                >
                <h2
                  class="font-weight-bold text-8 line-height-2 negative-ls-1 pb-3 mb-4 appear-animation text-primary"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="900"
                >
                  Who we are
                </h2>
                <p
                  class="custom-text-size-1 pb-3 mb-2 appear-animation"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="1100"
                >
                  We collaborate with other humanitarian and philanthropic organizations,
                  national and international with similar aims and objectives for the
                  growth of women to scale through their respective career.
                </p>
                <h2
                  class="font-weight-bold text-8 line-height-2 negative-ls-1 pb-3 mb-4 appear-animation text-primary"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="1300"
                >
                  Objectives 
                </h2>
                <ul
                  class="custom-text-size-1 pb-3 mb-2 appear-animation"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="1500"
                >
                  <li>Our goal is to create sisterhood cluster that provides resources and support women in various capacities.</li>
                  <li>To help women access global markets and engage in international  trade.  </li>
                  <li>To leverage on development programs, trainings and business support services.</li>
                </ul>
                
              </div>
            </div>
          </div>
  </section>


<!---------Board of Trustees Start------------------>
  <section
          id="services"
          class="section custom-section-full-width bg-color-transparent border-0 mt-n5 mb-1"
          style="
            background-image: url(img/demos/it-services/backgrounds/);
            background-repeat: no-repeat;
            background-position: bottom right;
          "
        >
          <div class="container container-lg pb-5 mb-2">
            <div class="row">
              <div class="col">
                <div class="overflow-hidden mb-2">
                  <span
                    class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation"
                    data-appear-animation="maskUp"
                    data-appear-animation-delay="300"
                    ></span
                  >
                </div>
                <div class="overflow-hidden mb-5">
                  <h2
                    class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation mt-3"
                    data-appear-animation="maskUp"
                    data-appear-animation-delay="500"
                  >
                    Board of Trustees
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col">
              <h4>Meet WEDPN Board of Trustees</h4>
              <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 4, 'margin':5, 'loop': true, 'nav': true, 'dots': true, 'stagePadding': 10}">
                <div>
                  <img alt="Iyalode Alaba Lawson MFR FIoD JP" class="img-fluid rounded" src="images/bot/Iyalode Alaba Lawson MFR FIoD JP.jpg" style="height: 280px;padding: 5px">
                  <p>
                    <b>
                      Iyalode Alaba Lawson MFR FIoD JP.
                    </b>
                  </p>
                </div>
                <div>
                  <img alt="Affiog Isreal Ibanga" class="img-fluid rounded" src="images/executive/Mrs Afi Ibanga Pic.jpg" style="height: 280px;padding: 5px">
                  <p>
                    <b>
                       Affiog Isreal Ibanga
                    </b>
                  </p>
                </div>

                <div>
                  <img alt="Barrister Sharon Olive Ikeazor" class="img-fluid rounded" src="images/bot/Barrister Sharon Olive Ikeazor.jpg"  style="height: 280px; padding: 5px">
                  <p>
                    <b>
                       Barrister Sharon Olive Ikeazor
                    </b>
                  </p>
                </div>

                <div>
                  <img alt="Chief Mrs. Anita Okuribido.jpg" class="img-fluid rounded" src="images/bot/Chief Mrs. Anita Okuribido.jpg"  style="height: 280px; padding: 5px">
                  <p>
                    <b>
                       Chief Mrs. Anita Okuribido
                    </b>
                  </p>
                </div>

                <div>
                  <img alt="Dr. Mrs. Anna J. Akpan" class="img-fluid rounded" src="images/bot/Dr. Mrs. Anna J. Akpan.jpg" style="height: 280px; padding: 5px">
                  <p>
                    <b>
                       Dr. Mrs. Anna J. Akpan
                     
                    
                    </b>
                  </p>
                </div>


                <div>
                  <img alt="Mr. Isrea B. Ibanga" class="img-fluid rounded" src="images/bot/Mr. Isrea B. Ibanga.jpg" style="height: 280px; padding: 5px">
                  <p>
                    <b>
                       Mr. Isrea B. Ibanga
                    </b>
                  </p>
                </div>
              </div>
            </div>
          </div>
  </section>
<!---------Board of Trustees Ends here------------------->

<!---------------Our Clusters starts------------------>
<section
          id="services"
          class="section custom-section-full-width bg-color-transparent border-0 mt-0 mb-n5"
          style="
            background-image: url(img/demos/it-services/backgrounds/dots-background-1.png);
            background-repeat: no-repeat;
            background-position: bottom right;
          "
        >
          <div class="container container-lg pb-5 mb-5">
            <div class="row">
              <div class="col">
                <div class="overflow-hidden mb-2">
                  <span
                    class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation"
                    data-appear-animation="maskUp"
                    data-appear-animation-delay="300"
                    ></span
                  >
                </div>
                <div class="overflow-hidden mb-2">
                  <h2
                    class="text-primary font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation mt-3"
                    data-appear-animation="maskUp"
                    data-appear-animation-delay="500"
                  >
                     Our Clusters
                  </h2>
                </div>
              </div>
            </div>
            <div class="row" data-appear-animation="maskUp"
                             data-appear-animation-delay="400">
            <div class="col">
              <h4>WEDPN Clusters</h4>
              <div class="owl-theme stage-margin shadow-lg" >
                <ul class="float-left" >
                  <li class="list-group-item-text">MULTI- TASKING/ PROFESSIONALS. </li>
                  <li class="list-group-item-text">AGRO BUSINESS /PROCESSING/PACKAGING/BRANDING.  </li>
                  <li class="list-group-item-text">IT/RENEWABLE ENERGY/OIL&GAS/ENVIRONMENT.</li>
                  <li class="list-group-item-text">EXPORT/SHIPPING/MARITIME.</li>
                </ul>

                <ul class="float-left">
                
                  <li class="list-group-item-text">FASHION/TEXTILE DESIGN/BEAUTY/COSMETIC/ HEALTH/WELLNESS.      </li>
                  <li class="list-group-item-text">TRAVEL/TOURISM/CATERING/EVENT MANAGEMENT/CREATIVE ART/CULTURE.</li>
                  <li class="list-group-item-text">OUR COOPERATIVE: WEPDN COOPERATIVE MULTIPURPOSE SOCIETY.</li>
                </ul>

              </div>
            </div>
          </div>
  </section>


<!---------------Our Clusters ends-------------------->


<!---------6 clusters chairperson Start------------------>
<section
          id="services"
          class="section custom-section-full-width bg-color-transparent border-0 mt-n5 mb-1"
          style="
            background-image: url(img/demos/it-services/backgrounds/);
            background-repeat: no-repeat;
            background-position: bottom right;
          "
        >
          <div class="container container-lg pb-5 mb-2">
            <div class="row">
              <div class="col">
                <div class="overflow-hidden mb-2">
                  <span
                    class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation"
                    data-appear-animation="maskUp"
                    data-appear-animation-delay="300"
                    ></span
                  >
                </div>
                <div class="overflow-hidden mb-5">
                  <h2
                    class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation mt-3"
                    data-appear-animation="maskUp"
                    data-appear-animation-delay="500"
                  >
                    Chairperson
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col">
              <h4>Meet WEDPN Chairperson</h4>
              <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 4, 'margin':5, 'loop': true, 'nav': true, 'dots': true, 'stagePadding': 10}">
                <div>
                  <img alt="Mrs Frances Anumba" class="img-fluid rounded" src="cpc/1.jpg"  style="height: 280px;padding: 5px">
                  <div style="border-left:solid 4px gray; height: 400px; padding: 10px;">
                    <p class="text-color-black">
                      <b>
                        Mrs Frances Anumba Chairperson,<br> Fashion / Health / Beauty.
                      </b>
                    </p>
                    <hr>
                    <p class="text-justify text-color-grey text-color-hover-black">
                    The cluster enlightens members on the importance of staying healthy to stay wealthy. Their mandate is to see a wholesome woman. They achieve their mandates through enlightenment programmes, trainings, teaching on how to create products for the market. They are into lifestyle and creativity. They also welcome MSMES who are looking into exploring the Fashion space and are also open to collaborations.
                    </p>
                  </div>
                </div>

                <div>
                  <img alt="Mrs Tope Ande Chairperson" class="img-fluid rounded" src="cpc/2.jpg" style="height: 280px;padding: 5px">
                  <div style="border-left:solid 4px gray; height: 400px; padding: 10px;"> 
                    <p class="text-color-black">
                      <b>
                        Mrs Tope Ande Chairperson <br> Export / Maritime / Shipping
                      </b>
                    </p>
                    <hr>
                    <p class="text-justify text-color-grey text-color-hover-black">
                    The cluster seeks to create value for members through trainings on how to explore the export opportunities available for Nigeria and Africa as a whole. They are passionate about people exploring the international market through the right market entry. They look forward to welcoming new members who are ready to take the export business to another level.
                    </p>
                  </div>
                </div>

                <div>
                  <img alt=" Barrister Joanne Miller - Egboboh Chairperson" class="img-fluid rounded" src="cpc/#" style="height: 280px;padding: 5px">
                  <div style="border-left:solid 4px gray; height: 400px; padding: 10px;"> 
                    <p class="text-color-black">
                      <b>
                        Barrister Joanne Miller - Egboboh <br> Chairperson, Multitask / Professionals
                      </b>
                    </p>
                    <hr>
                    <p class="text-justify text-color-grey text-color-hover-black">
                      The cluster is made up of professionals, whose services are rudimentary to corporate services and good governance . Their responsibilities among other things are to ensure members are educated in the recent developments on the corporate world through information sharing, campaigns and trainings. In this cluster you will find Lawyers, Accountants, Business Professionals, etc. They also welcome MSMES who are looking for information on how to start their businesses on the right footing.
                     </p>
                  </div>
                </div>


                <div>
                  <img alt=" Mrs Ifeyinwa Adesida" class="img-fluid rounded" src="cpc/#" style="height: 280px;padding: 5px">
                  <div style="border-left:solid 4px gray; height: 400px; padding: 10px;"> 
                    <p class="text-color-black">
                      <b>
                      Mrs Ifeyinwa Adesida  <br> Chairperson IT/Renewable Energy
                      </b>
                    </p>
                    <hr>
                    <p class="text-justify text-color-grey text-color-hover-black">
                    The cluster seeks to accommodate and develop trainings and programmes towards improving business owners in the IT/ Renewable Energy Economy. They also welcome MSMES who are looking into that business space.  
                    </p>
                    </div>
                </div>

                <div>
                  <img alt=" Mrs Sarat Onibudo" class="img-fluid rounded" src="cpc/#" style="height: 280px;padding: 5px">
                  <div style="border-left:solid 4px gray; height: 400px; padding: 10px;"> 
                    <p class="text-color-black">
                      <b>
                      Mrs Sarat Onibudo<br> Chairperson, Agro cluster
                      </b>
                    </p>
                    <hr>
                    <p class="text-justify text-color-grey text-color-hover-black">
                    The cluster is dedicated in seeing Agro business owners enjoy the advantages of  knowledge sharing especially as it concerns commercial farming and subsistence farming. This they have achieved through in-house training and expert trainings. They welcome MSMES who are looking into that business space and need directives on how to launch out.                    </p>
                    </div>
                </div>



                <div>
                  <img alt=" Mrs Sarat Onibudo" class="img-fluid rounded" src="cpc/#" style="height: 280px;padding: 5px">
                  <div style="border-left:solid 4px gray; height: 400px; padding: 10px;"> 
                    <p class="text-color-black">
                      <b>
                        Mrs Regina Obasa  <br> Chairperson Tourism/Travel 
                      </b>
                    </p>
                    <hr>
                    <p class="text-justify text-color-grey text-color-hover-black">
                    The cluster seeks to make members  enjoy first hand information on the best places to be on earth and how they can have value while enjoying their stay at any part of the world. They  also expose members in the sector to opportunities and sustainable growth.
                    </p>
                    </div>
                </div>


              </div>
            </div>
          </div>
  </section>
  <!----6 clusters chairperson Ends here----->

  <!-----------Exco Starts------------------->
<section
          class="section section-height-3 custom-section-full-width bg-color-transparent border-0 pb-4 mb-0 mt-1"
          style="
            background-image: url(img/demos/it-services/backgrounds/dots-background-1.png);
            background-repeat: no-repeat;
            background-position: top left;
          "
        >
    <div class="container container-lg mt-3">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <span
            class="d-block custom-text-color-grey-1 font-weight-bold mb-1 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="300"
            ></span
          >
          <h2
            class="text-color-dark font-weight-bold text-8 line-height-2 negative-ls-1 pb-2 mb-4 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="500"
          >
            We focus on bringing value and solve business main challenges
          </h2>
          <p
            class="custom-text-size-1 pb-2 mb-4 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="700"
          >
            It's not always about looking forward to what's ahead of you. Sometimes it's all about looking back at the things that define you.
          </p>
        </div>
        <div class="col-lg-8">
          <ul
            class="custom-nav-style-1 nav nav-pills justify-content-lg-start pb-3 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="1100"
          >
            
          
            <li class="nav-item" style="background-color: #ff3b14">
              <a href="#" 
                class="nav-link font-weight-bold text-white border px-4 py-3"
                href="#"
                >Meet Chief Convener and C.O.O</a
              >
            </li>
          </ul>

          <div
            class="sort-destination-loader sort-destination-loader-loaded mt-1 pt-2"
          >
            <div
              id="portfolioLoadMoreWrapper"
              class="row row-gutter-sm portfolio-list sort-destination overflow-visible justify-content-center"
              data-sort-id="portfolio"
              data-total-pages="3"
              data-ajax-url="ajax/demo-it-services-ajax-load-more-"
            >
              <div
                class="col-sm-10 col-md-6 pb-1 mb-3 appear-animation"
                data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1500"
              >
                <div class="card border-0 custom-box-shadow-1 p-1">
                  <div class="card-body">
                    <a href="#" class="text-decoration-none">
                      <img
                        class="img-fluid pb-2 mb-4"
                        src="images/convener2.jpg"
                        alt="Chief (Mrs) Alaba Lawson"
                      />
                    </a>
                    <h4
                      class="font-weight-bold text-color-dark custom-text-size-2 mb-3"
                    >
                      <a
                        href="#"
                        class="text-color-dark text-decoration-none"
                        >Chief (Mrs) Alaba Lawson
                        </a
                      >
                    </h4>
                    <p
                      class="custom-font-secondary custom-text-size-1 mb-1"
                    >
                      <strong class="text-color-dark">Global Convener</strong>
                      <br>
                      <span class="btn btn-primary"><a href="global_convener.php" class="text-white">View Profile</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="col-ms-10 col-md-6 pb-1 mb-3 appear-animation"
                data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1300"
              >
                <div class="card border-0 custom-box-shadow-1 p-1">
                  <div class="card-body">
                    <a href="#" class="text-decoration-none">
                      <img
                        class="img-fluid pb-2 mb-4"
                        src="images/executive/coo.png"
                        alt="Okler Success Case"
                      />
                    </a>
                    <h4
                      class="font-weight-bold text-color-dark custom-text-size-2 mb-3"
                    >
                      <a
                        href="#"
                        class="text-color-dark text-decoration-none"
                        >Mrs. Affi Israel Ibanga</a
                      >
                    </h4>
                    <p
                      class="custom-font-secondary custom-text-size-1 mb-1"
                    >
                      
                      <strong class="text-color-dark">Chief Operation Officer</strong>
                      <br>
                      <span class="btn btn-primary"><a href="Mrs._Affi_Israel_Ibanga.php" class="text-white">View Profile</a></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div id="portfolioLoadMoreBtnWrapper" class="row mt-3">
              <div class="col text-center">
                <div
                  id="portfolioLoadMoreLoader"
                  class="portfolio-load-more-loader"
                >
                  <div class="bounce-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-----------------------Exco Ends -------------------->



<!-----------Meet our operating Team Starts-------------->
  <section
          class="section section-height-3 custom-section-full-width bg-color-transparent border-0 pb-4 mb-0 mt-1"
          style="
            background-image: url(img/demos/it-services/backgrounds/dots-background-1.png);
            background-repeat: no-repeat;
            background-position: top left;
          "
        >
    <div class="container container-lg mt-3">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <span
            class="d-block custom-text-color-grey-1 font-weight-bold mb-1 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="300"
            ></span
          >
          <h2
            class="text-color-dark font-weight-bold text-8 line-height-2 negative-ls-1 pb-2 mb-4 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="500"
          >
            Superior leader is a person who can bring ordinary people together to achieve extraordinary results.
          </h2>
          <p
            class="custom-text-size-1 pb-2 mb-4 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="700"
          >
           "We are what we repeatedly do. Excellence, then, is not an act, but a habit. " <br>
           - Aristotle
          </p>
        </div>
        <div class="col-lg-8">
          <ul
            class="custom-nav-style-1 nav nav-pills justify-content-lg-start pb-3 appear-animation"
            data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="1100"
          >
            
          
            <li class="nav-item" style="background-color: #ff3b14">
              <a href="women_entrepreneurs_excos.php" 
                class="nav-link font-weight-bold text-white border px-4 py-3"
                href="women_entrepreneurs_excos.php"
                >View More Operation Team Members</a
              >
            </li>
          </ul>

          <div
            class="sort-destination-loader sort-destination-loader-loaded mt-1 pt-2"
          >
            <div
              id="portfolioLoadMoreWrapper"
              class="row row-gutter-sm portfolio-list sort-destination overflow-visible justify-content-center"
              data-sort-id="portfolio"
              data-total-pages="3"
              data-ajax-url="ajax/demo-it-services-ajax-load-more-"
            >

            </div>
            <div class="row">
            <div class="col">
              <h4>Click on "View More Operation Team Members" to see all</h4>
              <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 3, 'margin': 7, 'loop': true, 'nav': true, 'dots': true, 'stagePadding': 10}">
                <div>
                  <img alt="Mrs. Affi Israel Ibanga" class="img-fluid rounded" src="images/executive/Mrs Afi Ibanga Pic.jpg">
                  <p>
                    <b>
                      Mrs. Affi Israel Ibanga <br> 
                      Chief Operation Officer
                    </b>
                  </p>
                </div>
                <div>
                 <img alt="" class="img-fluid rounded" src="images/executive/Mrs Mimy Bawa-Allah.jpg">
                  <p>
                    <b>
                     Mrs Mireille B. <br> 
                     General Secretary
                    </b>
                  </p>
                </div>
                <div>
                  <img alt="Mrs Edith Lawal" class="img-fluid rounded" src="images/executive/Mrs Edith Lawal.jpg">
                  <p>
                    <b>
                     Mrs Edith Lawal<br> 
                    Public Relations Officer
                    </b>
                  </p>
                </div>
                <div>
                  <img alt="Ogun State Coordinator, WEPDN" class="img-fluid rounded" src="images/executive/Mrs Dorcas James.jpg">
                  <p>
                    <b>
                     Mrs Dorcas James<br> 
                     Ogun State Coordinator.
                    </b>
                  </p>
                </div>
                <div>
                  <img alt="" class="img-fluid rounded" src="images/executive/Ms. Folasade Coker.jpg">
                  <p>
                    <b>
                     Ms. Folasade Coker<br> 
                     Chief Whip
                    </b>
                  </p>
                </div>
                
              </div>
            </div>
          </div>


            <div id="portfolioLoadMoreBtnWrapper" class="row mt-3">
              <div class="col text-center">
                <div
                  id="portfolioLoadMoreLoader"
                  class="portfolio-load-more-loader"
                >
                  <div class="bounce-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----Meet our Operating team  ends---------------------->
  
    <section
    id="services"
    class="section custom-section-full-width bg-color-transparent border-0 mt-0 mb-1"
    style="
      background-image: url(img/demos/it-services/backgrounds/dots-background-2.png);
      background-repeat: no-repeat;
      background-position: bottom right;
    "
  >
    <div class="container container-lg pb-5 mb-5">
      <div class="row">
        <div class="col">
          <div class="overflow-hidden mb-2">
            <span
              class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation"
              data-appear-animation="maskUp"
              data-appear-animation-delay="300"
              ></span
            >
          </div>
          <div class="overflow-hidden mb-5">
            <h2
              class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
              data-appear-animation="maskUp"
              data-appear-animation-delay="500"
            >
              General Questions
            </h2>
          </div>
        </div>
      </div>
      <div class="row pt-4">
        <div
          class="col-md-6 col-lg-3 text-center mb-5 mb-lg-0 appear-animation"
          data-appear-animation="fadeInUpShorter"
          data-appear-animation-delay="650"
        >
          <h4 class="text-color-primary font-weight-bold text-6 mb-3">
            Why you should join us?
          </h4>
          <p class="custom-text-size-1 px-lg-4">
            This is a group of Very Successful and Upward Mobile Women Who believe in lifting each other. We believe in Unity lies Strength and together we grow!!
          </p>
        </div>
        <div
          class="col-md-6 col-lg-3 text-center mt-lg-5 mb-5 mb-lg-0 appear-animation"
          data-appear-animation="fadeInUpShorter"
          data-appear-animation-delay="850"
        >
          <h4 class="font-weight-bold text-6 mb-3" style="color:#ff3b14">
            Will my business fit in here?
          </h4>
          <p class="custom-text-size-1 px-lg-4">
            We have several clusters that your business can fit into. There’s enough to go round
          </p>
        </div>
        <div
          class="col-md-6 col-lg-3 text-center mb-5 mb-md-0 appear-animation"
          data-appear-animation="fadeInUpShorter"
          data-appear-animation-delay="1050"
        >
          <h4 class="text-color-primary font-weight-bold text-6 mb-3">
            What is WEPDN?
          </h4>
          <p class="custom-text-size-1 px-lg-4">
            WEPDN – Women Entrepreneurs and Professional Development Network
          </p>
        </div>
        <div
          class="col-md-6 col-lg-3 text-center mt-lg-5 appear-animation"
          data-appear-animation="fadeInUpShorter"
          data-appear-animation-delay="1250"
        >
          
          <h4 class="font-weight-bold text-6 mb-3" style="color:#ff3b14">
            How much is subscription?
          </h4>
          <p class="custom-text-size-1 px-lg-4" style="color:#E0E0E0">
            30,000 Naira only per year
          </p>
          
        </div>
      </div>
    </div>
  </section>

    <section
          class="section section-height-3 custom-section-half-background-color-light custom-bg-color-grey-1 border-0 pb-0 m-0 custom-section-full-width"
        >
          <div class="container container-lg mt-4">
            <div class="row">
              <div class="col text-center">
                <h2
                  class="text-color-dark font-weight-bold text-8 line-height-2 mb-2"
                >
                  Video
                </h2>
                <p class="custom-font-secondary text-4 pb-2 mb-4">
                  Watch Recently Uploaded Video
                </p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-11 col-xl-9">
                <div
                  class="featured-boxes featured-boxes-modern-style-1 custom-box-shadow-1 mb-5 mb-md-4"
                >
                  <div class="featured-box py-md-4">
                    <div
                      class="featured-box-background"
                      style="
                        background-size: cover;
                        background-position: center;
                      "
                    >
                      
                    </div>
                    <div class="box-content py-md-1 my-md-1">
                      <iframe width="100%" height="479" src="https://www.youtube.com/embed/erKSZmdGg4g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        
      <div
          class="container container-lg pt-5 mt-4"
          style="
            background-image: url(img/demos/it-services/puzzle.png);
            background-repeat: no-repeat;
            background-position: 50px 0;
          "
        >
          <div class="row pt-4 pb-lg-5 mb-3">
            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
              <h2
                class="text-color-dark font-weight-bold text-6 line-height-2 pr-3 mb-4"
              >
                Check out what people are saying about Women entrepreneurs:
              </h2>
              <p class="custom-text-size-1 mb-0">
                When I dare to be powerful, to use my strength in the service of my vision, then it becomes less and less important whether I am afraid
              </p>
            </div>
            <div class="col-md-6 col-lg-8">
              <div
                class="testimonial testimonial-style-4 custom-testimonial-style-1 border-0 box-shadow-none mb-0"
              >
                <blockquote>
                  <p
                    class="custom-font-secondary font-weight-bold font-italic text-color-dark text-5 line-height-5 negative-ls-1 mb-2"
                  >
                    You gain strength, courage and confidence by every experience in which you really stop to look fear in the face. You are able to say to yourself, “I lived through this horror. I can take the next thing that comes along.” You must do the thing you think you cannot do.
                  </p>
                </blockquote>


                <div
                  class="testimonial-author flex-column align-items-start mt-0"
                >
                  <strong
                    class="text-color-dark font-weight-semibold d-block line-height-1 mb-0"
                    >Eleanor Roosevelt</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="py-5"></div>
                </div>
              
      <section>
          <div class="row border-0 my-3" style="background-color:#313d59;">       
                <img src="images/executive/group.jpg" class="process-step appear-animation img-fluid" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="width: 98%; margin: auto;">
        </div>
       </section>
                <div
          class="container container-lg pt-5 mt-4"
          style="
            background-image: url(img/demos/it-services/puzzle.png);
            background-repeat: no-repeat;
            background-position: 50px 0;
          "
        >
                  <div class="row mt-3">
                        <h3 class="text-center pl-5 font-weight-bold">Our Focus</h3>
                  </div>
                  <div class="row pt-lg-4">
                        <div class="col">
                            <div class="process custom-process-style-1 d-flex w-100 flex-column flex-lg-row mb-5">
                                <div class="process-step col-12 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <div class="process-step-circle">
                                        <strong class="process-step-circle-content text-color-primary text-8">1</strong
                    >
                  </div>
                  <div class="process-step-content px-5">
                    <h4
                      class="text-color-dark font-weight-bold text-4 line-height-1 mb-3"
                    >
                      1. Seminars
                    </h4>
                    <p
                      class="custom-font-secondary custom-text-size-1 px-3 mb-0"
                    >
                      To organize seminars, discussion groups, mentoring and public
lectures for the general enlightenment of women entrepreneurs and
professionals.
                                        </p>
                                    </div>
                                </div>
                                <div class="process-step col-12 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <div class="process-step-circle">
                                        <strong class="process-step-circle-content text-color-primary text-8">2</strong
                    >
                  </div>
                  <div class="process-step-content px-5">
                    <h4
                      class="text-color-dark font-weight-bold text-4 line-height-1 mb-3"
                    >
                      2. Contribution
                    </h4>
                    <p
                      class="custom-font-secondary custom-text-size-1 px-3 mb-0"
                    >
                      To contribute to the progress and rapid development of women
careers, assisting deserving members to source for resources to
study at reputable business and career schools, empowering them
to assume positions of responsibility in their career
                                        </p>
                                    </div>
                                </div>
                                <div class="process-step col-12 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                    <div class="process-step-circle">
                                        <strong class="process-step-circle-content text-color-primary text-8">3</strong
                    >
                  </div>
                  <div class="process-step-content px-5">
                    <h4
                      class="text-color-dark font-weight-bold text-4 line-height-1 mb-3"
                    >
                      3. Promotion
                    </h4>
                    <p
                      class="custom-font-secondary custom-text-size-1 px-3 mb-0"
                    >
                      To promote peaceful co-existence among the members, hosting
annual women entrepreneurs and professional achiever’s award
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

<section class="section section-height-3 bg-color-dark border-0 m-0 custom-section-full-width">
                    <div class="container container-lg">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8 col-xl-6 mb-5 mb-lg-0">
                                <span class="d-block custom-text-color-light-2 custom-heading-bar custom-heading-bar-with-padding font-weight-light text-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Let’s Get in Touch</span
                >
                <h2
                  class="text-color-light font-weight-extra-bold text-10 negative-ls-1 pr-3 mb-3 appear-animation"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="500"
                >
                  Want to be a memeber of Women Entrepreneurs and Professionals Development Network. 
                </h2>
                <p
                  class="custom-font-secondary text-4 custom-text-color-light-3 mb-0 appear-animation"
                  data-appear-animation="fadeInUpShorter"
                  data-appear-animation-delay="700"
                >
                 People don’t take opportunities because the timing is bad, the financial side unsecure. Too many people are overanalyzing. Sometimes you just have to go for it
                </p>
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="overflow-hidden">
                  <a
                    href="join_us.php"
                    class="btn btn-secondary btn-outline text-color-light font-weight-semibold border-width-4 custom-link-effect-1 text-1 text-xl-3 d-inline-flex align-items-center px-4 py-3 appear-animation"
                    data-appear-animation="maskRight"
                    data-appear-animation-delay="900" style="background-color: #ff3b14; border-color: #ff3b14 #ff3b14 #ff3b14;"
                    >JOIN US NOW <i class="custom-arrow-icon ml-2"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </section>

  <!---Quotes Starts here---->
  <section class="section section-height-4 mt-0 mb-n1 border-0 custom-section-full-width">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                
                <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': true, 'nav': true, 'dots':true, 'stagePadding': 80}">
                  <div class="text-center">
                    <span class="text-color-primary">Inspirational Quotes</span>
                    <h2 class="font-weight-semibold text-10">
                    -Maya Angelou
                    </h2>
                    <p class="lead lead-2 mb-0">You may not control all the events that happen to you, but you can decide not to be reduced by them.
                    </p>
                  </div>
                  <div class="text-center">
                    <span class="text-color-primary">Inspirational Quotes</span>
                    <h2 class="font-weight-semibold text-10">
                    ― Oprah Winfrey
                    </h2>
                    <p class="lead lead-2 mb-0">“Doing the best at this moment puts you in the best place for the next moment”
                    </p>
                  </div>
                  <div class="text-center">
                    <span class="text-color-primary">Inspirational Quotes</span>
                    <h2 class="font-weight-semibold text-10">
                    Queen Amina
                    </h2>
                    <p class="lead lead-2 mb-0">
                     It's not always about looking forward to what's ahead of you. Sometimes it's all about looking back at the things that define you. 
                   </p>
                  </div>


                  <div class="text-center">
                    <span class="text-color-primary">Inspirational Quotes</span>
                    <h2 class="font-weight-semibold text-10">
                    Kwame Nkrumah
                    </h2>
                    <p class="lead lead-2 mb-0">
                     The forces that unite us are instrinsic and greater than the superimposed influences that keep us apart
                   </p>
                  </div>

                  <div class="text-center">
                    <span class="text-color-primary">Inspirational Quotes</span>
                    <h2 class="font-weight-semibold text-10">
                    Maya Angelou
                    </h2>
                    <p class="lead lead-2 mb-0">
                     I’ve learned that whenever I decide something with an open heart, I usually make the right decision.
                   </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
  <!---Quotes ends here----->
    
  <section
          class="section section-height-3 custom-section-full-width  border-0 pb-4 mb-0 mt-1"
          style="
            background-color:#3c78d8;
          "
        >
  <!-------------Upcoming Event starts------------------>
  <div class="container container-lg" >
          <div class="row">
            <div class="col">
              <div class="overflow-hidden mb-2">
                <span
                  class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation"
                  data-appear-animation="maskUp"
                  data-appear-animation-delay="300"
                  ></span
                >
              </div>
              <div class="overflow-hidden mb-5">
                <hr style="background-color:#f2f2f2">
                <h2
                  class="text-white font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
                  data-appear-animation="maskUp"
                  data-appear-animation-delay="500"
                >
                  Upcoming Events
                </h2>
              </div>
            </div>
          </div>

<div class="row justify-content-center pb-3 pt-4 mb-5">     
    <?php 
       if (isset($_GET['pageno'])) {
              $pageno = $_GET['pageno'];
          } else {
              $pageno = 1;
          }
          $no_of_records_per_page = 8;
          $offset = ($pageno-1) * $no_of_records_per_page;


          $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
          $result = mysqli_query($con,$total_pages_sql);
          $total_rows = mysqli_fetch_array($result)[0];
          $total_pages = ceil($total_rows / $no_of_records_per_page);


         $query=mysqli_query($con,"select id, PostTitle, PostImage, PostDate, TIME_FORMAT(PostTime, '%h:%i %p') PostTime from tblevents where Is_Active=1 order by PostingDate desc LIMIT 3");
        if(mysqli_num_rows($query)>0){
        while ($row=mysqli_fetch_array($query)) {
          ?>
          <div
              class="col-md-7 col-lg-4 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <article class="card custom-post-style-1" style="border-left: solid 5px black;border-bottom: solid 5px black;">
                <header class="overlay overlay-show">
                  <img
                    class="img-fluid" style="height: 250px"
                    src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>"
                  />
                  <h4
                    class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ml-4 mb-4 pb-2 pl-2 pr-5 mr-5"
                  >
                    <a
                      class="text-color-light text-decoration-none"
                      ><?php
                      $position=80;
                      $message=htmlentities($row['PostTitle']);
                      $post_title=substr($message,0,$position); 
                      echo $post_title.' ...';
                      ?>
                      
                      </a
                    >
                  </h4>
                </header>
                <div class="card-body">
                  <ul
                    class="list list-unstyled custom-font-secondary pb-1 mb-2"
                  >
                    <li class="list-inline-item line-height-1 mr-1 mb-0">
                     <b>Title: </b> <?php echo htmlentities($row['PostTitle']);?>
                    </li>
                    <li class=" line-height-1 mr-1 mb-0">          
                      <b>Time: </b>
                        <?php 
                         echo $time= htmlentities($row['PostTime']);
                        ?>
                     
                    </li>
                    <li class="list-inline-item line-height-1 mr-1 mb-0">          
                      <b>Date: </b>
                        <?php 
                          $date= strtotime(htmlentities($row['PostDate']));
                          echo (date('D, F d, Y', $date));
                        ?>
                     
                    </li>
                    <li class="list-inline-item line-height-1 mr-1 mb-0">
                      <a
                        href="events-details.php?nid=<?php echo htmlentities($row['id'])?>"
                        class="text-color-primary font-weight-bold custom-text-size-1" style="text-decoration: none !important"
                        >See Event Datails &rarr;
                      </a>
                    </li>
                  </ul>
                  
                </div>
              </article>
          </div>
        <?php }
      }else{
        ?>
            <div
              class="col-md-7 col-lg-4 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <p class="text-center text-white">
                 No Record Found for Upcoming Events
              </p>
            </div>
        <?php
      }
         ?>
          </div>
        </div>
  <!-------------Upcoming Events Ends------------------->
  </section>

  <!------Gallery Starts here---------------------------->
  <section class="section section-height-2 mt-0 mb-n1 border-0 custom-section-full-width" style="z-index: 10">
    <div class="container">
     <div class="gallery">
       <div class="mt-5">
            <hr>
            <h2
                  class="font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
                  data-appear-animation="maskDown"
                  data-appear-animation-delay="500"
                >
                  Recent Pictures
                </h2><br>
        </div>
        <?php
           $query=mysqli_query($con,"select * from tblphotos where Is_Active=1 order by PostingDate desc LIMIT 10");
          if(mysqli_num_rows($query)>0){
            while ($row=mysqli_fetch_array($query)) {
              ?>
         <a href="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" class="big"><img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>" title="<?php echo htmlentities($row['PostTitle']);?>" style="width: 250px;"/>
        </a>
        
        <?php } }else{
          ?>
            <div
              class="col-12 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <p class="text-center">
                 No Record Found for Recent Pictures
              </p>
            </div>
          <?php

        } ?>
     </div>
  </section>
  <!-----Gallery Ends here------------------------------->

  <div class="container container-lg" >
          <div class="row pt-3 mt-4">
            <div class="col">
              <div class="overflow-hidden mb-2">
                <span
                  class="d-block font-weight-bold custom-text-color-grey-1 text-center line-height-1 mb-0 appear-animation"
                  data-appear-animation="maskUp"
                  data-appear-animation-delay="300"
                  ></span
                >
              </div>
              <div class="overflow-hidden mb-5">
                <hr>
                <h2
                  class="text-color-dark font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
                  data-appear-animation="maskUp"
                  data-appear-animation-delay="500"
                >
                  Recent News
                </h2>
              </div>
            </div>
          </div>

<div class="row justify-content-center pb-3 pt-4 mb-5">     
    <?php 
       if (isset($_GET['pageno'])) {
              $pageno = $_GET['pageno'];
          } else {
              $pageno = 1;
          }
          $no_of_records_per_page = 8;
          $offset = ($pageno-1) * $no_of_records_per_page;


          $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
          $result = mysqli_query($con,$total_pages_sql);
          $total_rows = mysqli_fetch_array($result)[0];
          $total_pages = ceil($total_rows / $no_of_records_per_page);


         $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
        if(mysqli_num_rows($query)>0){
        while ($row=mysqli_fetch_array($query)) {
          ?>
          <div
              class="col-md-7 col-lg-4 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <article class="card custom-post-style-1 border-0 box-shadow-1">
                <header class="overlay overlay-show">
                  <img
                    class="img-fluid" style="height: 250px"
                    src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"
                  />
                  <h4
                    class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ml-4 mb-4 pb-2 pl-2 pr-5 mr-5"
                  >
                    <a
                      class="text-color-light text-decoration-none"
                      ><?php
                      $position=80;
                      $message=htmlentities($row['posttitle']);
                      $post_title=substr($message,0,$position); 
                      echo $post_title.' ...';
                      ?>
                      
                      </a
                    >
                  </h4>
                </header>
                <div class="card-body" style="z-index: 5">
                  <ul
                    class="list list-unstyled custom-font-secondary pb-1 mb-2"
                  >
                    <li class="list-inline-item line-height-1 mr-1 mb-0">
                      <?php echo htmlentities($row['posttitle']);?>
                    </li>
                    <li class="list-inline-item line-height-1 mr-1 mb-0">          
                     Posted on
                        <?php 
                          $date= strtotime(htmlentities($row['postingdate']));
                          echo(date('F d, Y  h:i A',$date));
                        ?>
                     
                    </li>
                    <li class="list-inline-item line-height-1 mr-1 mb-0">
                      <a
                        href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"
                        class="text-color-primary font-weight-bold custom-text-size-1" style="text-decoration: none !important;"
                        >Read More &rarr;
                      </a>
                    </li>
                  </ul>
                  <p class="custom-text-size-1 mb-2">
                    <b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> 
                  </p>
                  
                </div>
              </article>
          </div>
        <?php }
      }else{
        ?>
            <div
              class="col-md-7 col-lg-4 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <p class="text-center">
                 No Record Found for Recent News
              </p>
            </div>
        <?php
      }
         ?>
          </div>
        </div>
      </div>

      <!--content ends here-->
<script src="dist/simple-lightbox.js?v2.2.1"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>


<?php
  include("includes/footer.inc.php");
?>