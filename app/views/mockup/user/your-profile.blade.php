@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid user-profile' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class='pull-left'>
                    <h3>
                        <i class='icon-user'></i>
                        <span>User</span><i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Tara Reid</span>
                    </h3>
                </div><!--/.pull-left-->
            
                <div class="pull-right">
                    
                    <a class='btn btn-default btn-success' href='/user/{slug}/profile'><i class='icon-globe'> </i> View Public Profile</a> 
                    <a class='btn btn-default btn-primary' href='/user/{slug}/profile'><i class='icon-edit'> </i> Edit Your Profile</a>

                    
                    
                </div> <!--/.pull-right-->
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
                <div class='box-content'>
                    <div class='carousel slide carousel-without-caption' id='myCarousel' style='margin-bottom:0;'>
                        <ol class='carousel-indicators'>
                            <li class='active' data-slide-to='0' data-target='#myCarousel'></li>
                            <li data-slide-to='1' data-target='#myCarousel'></li>
                            <li data-slide-to='2' data-target='#myCarousel'></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class='carousel-inner'>
                            <div class='active item'>
                                <ul class='thumbnails'>

                                    <li>
                                        <div class='circle-container blue has-popover' data-content='Awarded on August 19, 2013.' data-title='Badge 187' data-placement='bottom'>
                                            <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>
                                
                                    <li>
                                        <div class='circle-container has-popover' data-content='Not yet awarded' data-title='Badge 183' data-placement='bottom'>
                                                <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li><!--/.item-->

                                    <li>
                                        <div class='circle-container green has-popover' data-content='Awarded on August 18, 2013.' data-title='Badge 387' data-placement='bottom'>
                                            <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>

                                    <li>
                                        <div class='circle-container has-popover' data-content='Not yet awarded' data-title='Badge 181' data-placement='bottom'>
                                                <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>

                                    <li>
                                        <div class='circle-container has-popover' data-content='Not yet awarded' data-title='Badge 185' data-placement='bottom'>
                                                <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>

                                    <li>
                                        <div class='circle-container black has-popover' data-content='Awarded on August 25, 2013.' data-title='Badge 2087' data-placement='bottom'>
                                            <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>

                                    <li>
                                        <div class='circle-container green has-popover' data-content='Awarded on August 11, 2013.' data-title='Badge 587' data-placement='bottom'>
                                            <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>

                                    <li>
                                        <div class='circle-container light-blue has-popover' data-content='Awarded on August 9, 2013.' data-title='Badge 7' data-placement='bottom'>
                                            <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>

                                    <li>
                                        <div class='circle-container has-popover' data-content='Not yet awarded' data-title='Badge 785' data-placement='bottom'>
                                                <span class='the-badge'><i class='icon-trophy'></i></span>
                                        </div><!--/.circle-container-->
                                    </li>
                                </ul>
                            </div><!--/.active-item-->
                            
                        </div><!--/.carousel-inner-->
                        <!-- Carousel nav -->
                        <a class='carousel-control left' data-slide='prev' href='#myCarousel'>‹</a>
                        <a class='carousel-control right' data-slide='next' href='#myCarousel'>›</a>
                    </div>
                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span8 box about-user'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-user'> </i> Basic Profile Information
                    </div><!--/.title-->
                    <div class='actions'>
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class='box-content box-padding'>
                    <div class='lead'>Sales Rep, Bob's Bee Store</div>
                    <span class='user-location'>Located in <em>Reno, Nevada</em></span>
                    <span class='user-website'><a href='http://google.com'>View Personal Website</a></span>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                    </p>
                    <hr class='normal'>
                    <div class='lead'>
                        Extended Profile
                    </div><!--/.lead-->
                        <ul class='extended-profile unstyled'>
                            <li><span class='item-title'>Email:</span>jim@google.com</li>
                            <li><span class='item-title'>Timezone:</span>UTC-5 Eastern Standard Time</li>
                            <li><span class='item-title'>Language:</span>English</li>
                        </ul>

                    <div class='row-fluid'>
                        <a class='btn btn-mini shift-down'><i class='icon-cog'> </i> Manage Your Settings</a>
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span8-->
            
            <div class='span4 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-comment'> </i> Connected Social Accounts
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
                            </ul>
                        </div><!--/.row-fluid-->

                    </div><!--/.row-fluid-->

                    <div class='row-fluid'>
                        <p>Would you like to connect more social accounts to enable a more social workout on BizGym?</p>
                        <a class='btn btn-primary'><i class='icon-link'> </i> Connect More Social Accounts</a>
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span4-->


            <div class='span4 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-credit-card'> </i> Subscription
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content box-padding'>
                    
                    <div class='control-group'>
                        <!-- If user does not have a subscription <p class='help-block'>You are currently linked to one subscription, but you don't have one of your own. Get your own subscription and plan your own business! </p> -->
                        <p class='help-block'>You manage one subscription that is linked to the company, Bob's Bee Store. Your billing profile is up to date.</p>
                            <br>
                        <div class='controls'>
                            <button class="btn btn-success" type="button"><i class='icon-cogs'> </i>Manage Subscription</button>
                        </div><!--/.controls-->

                    </div><!--/.control-group-->
                </div><!--/.box-content-->
            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-briefcase'> </i> Your Companies</div>
                    
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

                                    <a class='btn btn-success'>View Company Profile</a> <a class='btn btn-primary'>Browse as this Company</a>
                                   
                                </div><!--/.span8-->
                            </div><!--/row-fluid-->
                        </li>

                    </ul>



                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid' style='margin-top:2em'>
            <div class='span12 box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-briefcase'> </i> Your Shared Business Items</div>
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