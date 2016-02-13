@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid user-profile' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span9">
                    <h3 class='pull-left'>
                        <i class='icon-user'></i>
                        <span>User</span><i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Tara Reid</span>
                    </h3>
                </div> <!--/.span9 -->
                <div class="span3 hidden-phone dash-cta">
                    
                </div> <!--/.span3 dash-cta-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    </div><!--/.span12-->
    <div class='row-fluid user-profile'>
        <div class="span12 cover-photo box">
            <!-- 
                If using flexible image technique, we will un-comment this. For now, we will rely on cropping cover photos
                <img src='assets/images/cover-photo.jpg' class="user-cover-photo"> 
            -->
            <div class='cover-photo-overlay'>
                <div class='cover-container'>
            
                    <div class='row-fluid user-content'>
                        <div class='user-info'>
                            <div class='row-fluid'>
                                <div class='user-avatar'>
                                    <img src='../../assets/images/tara-reid.jpg'>
                                </div>
                                <div class='user-meta'>
                                    <span class='user-name'>Tara Reid</span>
                                    <span class="subscriber-status">Pro Subscriber</span>
                                </div><!--/.span9 user-meta-->
                            </div><!--/.row-fluid-->
                        </div><!--/.user-info-->
                        <div class="user-stats">
                            <div class="row-fluid stat-numbers">
                                <div class="span6 text-center">
                                    <div class='circle-container'>
                                        <span class='the-count'>72%</span>
                                    </div><!--/.circle-container-->
                                    <div class='the-stat'>
                                        Complete
                                    </div><!--/.the-stat-->
                                </div><!--/.span6-->
                                <div class="span6 text-center">
                                    <div class='circle-container'>
                                        <span class='the-badge'><i class='icon-trophy'></i></span>
                                    </div><!--/.circle-container-->
                                    <div class='the-stat'>
                                        20 Badges
                                    </div><!--/.the-stat-->
                                </div><!--/.span6-->
                            </div><!--/.row-fluid-->
                        </div><!--/.user-stats-->
                    </div><!--/.row-fluid-->

                    <div class='row-fluid'>
                        <div class="user-company text-center">
                            <!-- <span class='company-name'>Your Company</span> -->
                            <div class='main-logo'>
                                <img src='../../assets/images/asp-logo-250.png'>
                            </div><!--/.main-logo-->

                            <div class='row-fluid'>
                                <div class='other-logos'>
                                    <ul class='logos-list'>
                                        <li>
                                            <img src='../../assets/images/pdub-logo.png'>
                                        </li>

                                        <li>
                                            <img src='../../assets/images/whd-logo.png'>
                                        </li>
                                        
                                    </ul>
                                </div><!--/.other-logos-->
                            </div><!--/.row-fluid-->
                        </div><!--/.user-company-->
                    </div><!--/.row-fluid-->

                </div><!--/.cover-container-->
            </div><!--/.cover-photo-overlay-->
        </div><!--/.span 12 cover-photo box-->

        <div class='row-fluid user-badges'>
            <div class='span12 box' style='margin-bottom: 2em'>
                    <ul class='inline' id='badgeCarousel'>
                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>
                        <li class='appBadge future'>
                            <img src='../../assets/images/badge1.png'>
                        </li>
                        <li class='appBadge'>
                            <img src='../../assets/images/badge2.png'>
                        </li>
                        <li class='appBadge future'>
                            <img src='../../assets/images/badge2.png'>
                        </li>
                        <li class='appBadge'>
                            <img src='../../assets/images/badge2.png'>
                        </li>
                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>
                        <li class='appBadge'>
                            <img src='../../assets/images/badge2.png'>
                        </li>
                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge future'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge future'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge future'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>

                        <li class='appBadge'>
                            <img src='../../assets/images/badge1.png'>
                        </li>
                    </ul>
        
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span8 box about-user'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-user'> </i> About Tara
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content box-padding'>
                    <span class='user-title'>Sales Rep, Bob's Bee Store</span>
                    <span class='user-location'>Located in <em>Reno, Nevada</em></span>
                    <span class='user-website'><a href='http://google.com'>View Personal Website</a></span>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                    </p>
                </div><!--/.box-content-->
            </div><!--/.span8-->
            
            <div class='span4 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-comment'> </i> Connect with Tara
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content box-padding'>
                
                    <div class="row-fluid">
                        <div class="row-fluid">
                            <ul class="user-connect">
                                <li>
                                    <button class="btn share-button">
                                    <i class="icon-facebook"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn share-button">
                                    <i class="icon-twitter"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn share-button">
                                    <i class="icon-linkedin"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn share-button">
                                    <i class="icon-google-plus"></i>
                                    </button>
                                </li>
                            </ul>
                        </div><!--/.row-fluid-->

                    </div><!--/.row-fluid-->

                    <div class='row-fluid'>
                        
                        <a class='btn btn-large btn-default'><i class='icon-envelope'> </i> Send Message</a>
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span4-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-briefcase'> </i> Tara's Companies</div>
                    
                </div><!--/box-header-->
                <div class='box-content box-padding'>

                    <ul class='unstyled user-companies'>
                        <li>
                            <div class='row-fluid'>
                                <div class='company-image'>
                                    <img src="../../assets/images/placeholder.png">
                                </div><!--/.span2-->
                                <div class='company-info'>
                                    <div class='lead'>
                                        Bob's Bee Store <span class='user-status'>Executive Member</span>
                                    </div><!--/.lead-->
                                   
                                    <ul class='inline company-data'>
                                        <li><i class='icon-group'> </i> 200 Employees</li>
                                        <li><i class='icon-link'> </i> <a href='http://bobsbeedepot.com'>www.bobsbeedepot.com</a></li>
                                        <li><i class='icon-home'> </i> Portland, Oregon</li>
                                    </ul>

                                    <p class='about'>Bob's Bee Store has been selling shoes and hats and bee store gear for many years. You rack 'em, we crack 'em says Bob. Get your bee keeping goods from bob today!</p>

                                    <a class='btn btn-success'>View Company Profile</a>
                                   
                                </div><!--/.span8-->
                            </div><!--/row-fluid-->
                        </li>

                    </ul>



                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid' style='margin-top:2em;'>
            <div class='span12 box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-briefcase'></i> Tara's Shared Business Items</div>
                </div><!--/box-header-->
                <div class='box-content box-no-padding'>
                    <table class='table table-striped public-links' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                               Item Name
                            </th>
                            <th>
                                Link
                            </th>
                            <th>
                                Version
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Item'><span class='item-name'>BizGym Biz Plan</span></td>
                                <td data-title='Link'><span class='item-link'><a href='http://bizgym.com/1223a12'>http://bizgym.com/1223a12</a></span></td>
                                <td data-title='Version'><span class='item-meta'>Version 1.0 for Bob's Bee Store</span></td>
                                <td data-title='Date'><span class='item-date'>August 12, 2013</span></td>
                            </tr>
                            <tr>
                                <td data-title='Item'><span class='item-name'>Pretty Business Cards</span></td>
                                <td data-title='Link'><span class='item-link'><a href='http://bizgym.com/1223a12'>http://bizgym.com/1223a12</a></span></td>
                                <td data-title='Version'><span class='item-meta'>Version Just Another Card for Bob's Bee Store</span></td>
                                <td data-title='Date'><span class='item-date'>August 12, 2013</span></td>
                            </tr>

                            <tr>
                                <td data-title='Item'><span class='item-name'>Really Awesome Compelling Elevator Pitch</span></td>
                                <td data-title='Link'><span class='item-link'><a href='http://bizgym.com/1223a12'>http://bizgym.com/1223a12</a></span></td>
                                <td data-title='Version'><span class='item-meta'>Version Final Draft for Warehouse Dudes</span></td>
                                <td data-title='Date'><span class='item-date'>August 12, 2013</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->
    </div><!--/.row-fluid-->
</div><!--/.row-fluid #content-wrapper-->


@stop



@section('inline_scripts')
@parent
$(window).load(function() {
  $("#badgeCarousel").flexisel({
        visibleItems: 10,
        animationSpeed: 200,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        clone:true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 4
          }, 
          landscape: {
            changePoint:640,
            visibleItems: 8
          },
          tablet: {
            changePoint:768,
            visibleItems: 10
          }
        }
});
});

@stop