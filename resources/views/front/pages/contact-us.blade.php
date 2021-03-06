@extends('layouts.front.app')
@section('content-area')
    <!-- <div class="page-content"> -->
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Contact Us
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start contact page area -->
    <div class="container">
        <!-- Start contact-map -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4 class="cart-title">Contact Us</h4>
                <div class="contact-map">
                    <div id="googleMap" style="position: relative; overflow: hidden;">
                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-style"
                                 style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                <div tabindex="0"
                                     style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                    <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div aria-hidden="true"
                                                     style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 486px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 486px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 230px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 230px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 742px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 742px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: -26px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: -26px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 998px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 998px; top: 194px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                <div aria-hidden="true"
                                                     style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 486px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 486px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 230px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 230px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 742px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 742px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -26px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -26px; top: 194px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 998px; top: -62px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 998px; top: 194px;"></div>
                                                </div>
                                            </div>
                                            <div style="width: 64px; height: 64px; overflow: hidden; position: absolute; left: 538px; top: 151px; z-index: 215; animation-duration: 700ms; animation-iteration-count: infinite; animation-name: _gm5205;">
                                                <img src="img/map-marker.png" draggable="false"
                                                     style="position: absolute; left: 0px; top: 0px; user-select: none; width: 64px; height: 64px; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div aria-hidden="true"
                                                 style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                <div style="position: absolute; left: 486px; top: 194px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9652!3i12326!4i256!2m3!1e0!2sm!3i383075492!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=63903"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 486px; top: -62px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9652!3i12325!4i256!2m3!1e0!2sm!3i383075492!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=27882"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 742px; top: 194px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9653!3i12326!4i256!2m3!1e0!2sm!3i383075444!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=60515"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 742px; top: -62px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9653!3i12325!4i256!2m3!1e0!2sm!3i383075444!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=24494"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -26px; top: -62px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9650!3i12325!4i256!2m3!1e0!2sm!3i383075492!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=107324"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -26px; top: 194px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9650!3i12326!4i256!2m3!1e0!2sm!3i383075492!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=12274"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 998px; top: -62px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9654!3i12325!4i256!2m3!1e0!2sm!3i383075516!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=56193"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 230px; top: -62px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9651!3i12325!4i256!2m3!1e0!2sm!3i383075492!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=67603"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 998px; top: 194px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9654!3i12326!4i256!2m3!1e0!2sm!3i383075516!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=92214"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 230px; top: 194px; transition: opacity 200ms ease-out;">
                                                    <img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i9651!3i12326!4i256!2m3!1e0!2sm!3i383075492!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=103624"
                                                         draggable="false" alt=""
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                        <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                    </div>
                                    <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                            <div class="gmnoprint" title=""
                                                 style="width: 64px; height: 64px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 538px; top: 151px; z-index: 215;">
                                                <img src="img/map-marker.png" draggable="false"
                                                     style="position: absolute; left: 0px; top: 0px; user-select: none; width: 64px; height: 64px; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                    </div>
                                </div>
                                <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                    <a target="_blank"
                                       href="https://maps.google.com/maps?ll=40.663293,-73.956351&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                       title="Click to see this area on Google Maps"
                                       style="position: static; overflow: visible; float: none; display: inline;">
                                        <div style="width: 66px; height: 26px; cursor: pointer;"><img
                                                    src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                                    draggable="false"
                                                    style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                        </div>
                                    </a></div>
                                <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 420px; top: 125px;">
                                    <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                    <div style="font-size: 13px;">Map data ©2017 Google</div>
                                    <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                        <img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png"
                                             draggable="false"
                                             style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                </div>
                                <div class="gmnoprint"
                                     style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;">
                                    <div draggable="false" class="gm-style-cc"
                                         style="user-select: none; height: 14px; line-height: 14px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map
                                                Data</a><span style="">Map data ©2017 Google</span></div>
                                    </div>
                                </div>
                                <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                    <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                        Map data ©2017 Google
                                    </div>
                                </div>
                                <div class="gmnoprint gm-style-cc" draggable="false"
                                     style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html"
                                           target="_blank"
                                           style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms
                                            of Use</a></div>
                                </div>
                                <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;">
                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false"
                                         class="gm-fullscreen-control"
                                         style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                </div>
                                <div draggable="false" class="gm-style-cc"
                                     style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <a target="_new" title="Report errors in the road map or imagery to Google"
                                           href="https://www.google.com/maps/@40.663293,-73.956351,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                           style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report
                                            a map error</a></div>
                                </div>
                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false"
                                     controlwidth="28" controlheight="93"
                                     style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                    <div class="gmnoprint" controlwidth="28" controlheight="55"
                                         style="position: absolute; left: 0px; top: 38px;">
                                        <div draggable="false"
                                             style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                            <div title="Zoom in"
                                                 style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                         draggable="false"
                                                         style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                </div>
                                            </div>
                                            <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                            <div title="Zoom out"
                                                 style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                         draggable="false"
                                                         style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gm-svpc" controlwidth="28" controlheight="28"
                                         style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;">
                                        <div style="position: absolute; left: 1px; top: 1px;"></div>
                                        <div style="position: absolute; left: 1px; top: 1px;">
                                            <div aria-label="Street View Pegman Control"
                                                 style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                <img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                     draggable="false"
                                                     style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div aria-label="Pegman is on top of the Map"
                                                 style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                <img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                     draggable="false"
                                                     style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div aria-label="Street View Pegman Control"
                                                 style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                <img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                     draggable="false"
                                                     style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gmnoprint" controlwidth="28" controlheight="0"
                                         style="display: none; position: absolute;">
                                        <div title="Rotate map 90 degrees"
                                             style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;">
                                            <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                 draggable="false"
                                                 style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                        <div class="gm-tilt"
                                             style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);">
                                            <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                 draggable="false"
                                                 style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="gmnoprint"
                                     style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                    <div class="gm-style-mtc" style="float: left;">
                                        <div draggable="false" title="Show street map"
                                             style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 21px; font-weight: 500;">
                                            Map
                                        </div>
                                        <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;">
                                            <div draggable="false" title="Show street map with terrain"
                                                 style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                <span role="checkbox"
                                                      style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div
                                                            style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img
                                                                src="https://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                draggable="false"
                                                                style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label
                                                        style="vertical-align: middle; cursor: pointer;">Terrain</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gm-style-mtc" style="float: left;">
                                        <div draggable="false" title="Show satellite imagery"
                                             style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-left: 0px; min-width: 37px;">
                                            Satellite
                                        </div>
                                        <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;">
                                            <div draggable="false" title="Show imagery with street names"
                                                 style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                <span role="checkbox"
                                                      style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div
                                                            style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img
                                                                src="https://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                draggable="false"
                                                                style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label
                                                        style="vertical-align: middle; cursor: pointer;">Labels</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contact-map -->
        <!-- Start contact from atea -->
        <div class="contact-from-atea">
            <div class="form-and-info">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contactDetails contactHead">
                            <h3>CONTACT Info</h3>
                            <p>
                                <span class="iconContact"><i class="fa fa-map-marker"></i></span>
                                8901 Binghamton Road, Glasgow <br> D04 89 GR, New York.
                            </p>
                            <p>
                                <span class="iconContact"><i class="fa fa-phone"></i></span>
                                Telephone: (801) 2345 - 6789 <br> Fax: (801) 2345 - 6789
                            </p>
                            <p>
                                <span class="iconContact"><i class="fa fa-envelope-o"></i></span>
                                Email: support@lionthemes.com <br> Website: www.lionthemes.com
                            </p>
                        </div>
                        <div class="social-area contactHead">
                            <h3>Flowe us</h3>
                            <ul class="socila-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="contactfrom">
                            <h3>message</h3>
                            <form class="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Full name" id="InputName" class="form-control">
                                    </div>
                                    <div class="col-md-6 contactemail">
                                        <input type="email" placeholder="Email" id="InputEmail" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Massage" rows="13" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button class="btn btnContact" type="submit">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contact from atea -->
    </div>
    <!-- </div> -->
@stop
@section('scripts')
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(40.663293, -73.956351)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);


            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop