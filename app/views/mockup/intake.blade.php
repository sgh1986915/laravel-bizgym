@extends('layouts.simple')

@section('content')

<body class='contrast-red plain-layout'>

    <header>
        <div class='navbar'>
            <div class='navbar-inner'>
                <div class='container-fluid'>
                    <a class='brand' href='/'>
                        <span><img src='/assets/images/bizgym-logo-145.png' alt='BizGym'></span>
                    </a>
                    @yield('header_nav_content')
                </div>
            </div>
        </div>
    </header>

    <div id='wrapper'>
        <section id='content'>
            <div class='container-fluid'>
                <div class='row-fluid user-intake' id='content-wrapper'>
                    <div class='span12'>
                        <div class='row-fluid'>
                            <div class='span12'>
                                <div class='page-header'>
                                    <h1 class='pull-left'>
                                        <i class='icon-edit'></i>
                                        <span>Your First Business Workout</span>
                                    </h1>
                                   
                                </div>
                            </div>
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <div class='span12 box'>
                                <div class='box-content box-double-padding'>
                                    <div class='fuelux'>
                                        <div class='wizard'>
                                            <ul class='steps'>
                                                <li class='active' data-target='#step1'>
                                                    <span class='step'>1</span>
                                                </li>
                                                <li data-target='#step2'>
                                                    <span class='step'>2</span>
                                                </li>
                                                <li data-target='#step3'>
                                                    <span class='step'>3</span>
                                                </li>
                                                <li data-target='#step4'>
                                                    <span class='step'>4</span>
                                                </li>
                                            </ul><!--/ul.steps-->
                                            <div class='actions'>
                                                <button class='btn btn-mini btn-prev'><i class='icon-arrow-left'></i>Prev</button>
                                                <button class='btn btn-mini btn-success btn-next' data-last='Finish'>Next<i class='icon-arrow-right'></i></button>
                                            </div><!--/.actions-->
                                        </div><!--/.wizard-->
                                        <div class='step-content'>
                                            <hr class='hr-normal'>
                                            <form accept-charset="UTF-8" action="#" class="form validate-form" novalidate='novalidate' method="post" style="margin-bottom: 0;"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>
                                                <div class='step-pane active' id='step1'>
                                                    <div class='row-fluid shift-up'>
                                                        <h1>Hey Bob, thanks for signing up for BizGym!</h1>
                                                        <div class='lead'>
                                                            Let's get started with some basic information
                                                        </div><!--/lead-->
                                                    </div><!--/.row-fluid-->

                                                    <div class='row-fluid'>
                                                        <div class='span8'>
                                                            <div class='control-group'>
                                                                <label class='control-label' for='business_name'>What is the name of your business?</label>
                                                                <div class='controls'>
                                                                    <input class='input-xlarge' id='business_name' data-rule-required='true' placeholder='Business Name' type='text'>
                                                                </div>
                                                            </div><!--/.control-group-->

                                                            <div class='control-group'>
                                                                <label class='control-label' for='inputText'>When did your company go into business?</label>
                                                                <div class='controls'>
                                                                    <div class='datepicker input-append' id='start-date'>
                                                                        <input data-format='yyyy-MM-dd' placeholder='Select Start Date' type='text'>
                                                                        <span class='add-on'>
                                                                        <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                                        </span>
                                                                    </div> <!--/.datepicker-->
                                                                </div><!--/.controls-->

                                                                 <div class="controls">
                                                                    <label class="checkbox inline">
                                                                        <input id="not-started" type="checkbox" value="not-started">
                                                                        Not in busines yet.. still planning
                                                                    </label>
                                                                </div><!--/.controls-->

                                                            </div><!--/.control-group-->

                                                            <hr class='normal'>

                                                            <div class='control-group'>
                                                                <label class='control-label' for=''>How many employees does your company have?</label>
                                                                <select id="inputSelect">
                                                                    <option>1-10</option>
                                                                    <option>10-50</option>
                                                                    <option>50-200</option>
                                                                    <option>200-1000</option>
                                                                    <option>1000+</option>
                                                                </select>
                                                            </div><!--/.control-group-->


                                                            <div class='control-group'>
                                                                <label class='control-label' for=''>What type of Entity is your company?</label>
                                                                <select id="inputSelect">
                                                                    <option>Individual</option>
                                                                    <option>LLC</option>
                                                                    <option>Corporation</option>
                                                                    <option>Non-Profit</option>
                                                                </select>
                                                            </div><!--/.control-group-->

                                                            <div class='control-group'>
                                                                <label class='control-label' for=''>How would you describe your business model?</label>
                                                                <select id="inputSelect">
                                                                    <option>Brick and Mortar</option>
                                                                    <option>E-Commerce</option>
                                                                    
                                                                </select>
                                                            </div><!--/.control-group-->



                                                            <div class='control-group'>
                                                                <label class='control-label' for=''>What industry do you see your company in?</label>
                                                                <select id="inputSelect">
                                                                    <option value="Agriculture, Forestry, Fishing & Hunting">Agriculture, Forestry, Fishing & Hunting</option>
                                                                    <option value="Mining">Mining</option>
                                                                    <option value="Utilities">Utilities</option>
                                                                    <option value="Construction">Construction</option>
                                                                    <option value="Manufacturing">Manufacturing</option>
                                                                    <option value="Wholesale Trade">Wholesale Trade</option>
                                                                    <option value="Retail Trade">Retail Trade</option>
                                                                    <option value="Transportation & Warehousing">Transportation & Warehousing</option>
                                                                    <option value="Information & Info Tech">Information & Info Tech</option>
                                                                    <option value="Finance & Insurance">Finance & Insurance</option>
                                                                    <option value="Real Estate & Rental/Leasing">Real Estate & Rental/Leasing</option>
                                                                    <option value="Professional, Scientific & Technical Services">Professional, Scientific & Technical Services</option>
                                                                    <option value="Management of Companies & Enterprises">Management of Companies & Enterprises</option>
                                                                    <option value="Administrative/Support & Waste Management Services">Administrative/Support & Waste Management Services</option>
                                                                    <option value="Education Services">Education Services</option>
                                                                    <option value="Health Care & Social Assistance">Health Care & Social Assistance</option>
                                                                    <option value="Arts, Entertainment & Recreation">Arts, Entertainment & Recreation</option>
                                                                    <option value="Accommodation & Food Services">Accommodation & Food Services</option>
                                                                    <option value="Other Services (except Public Administration)">Other Services (except Public Administration)</option>
                                                                    <option value="Public Administration">Public Administration</option>
                                                    
                                                                </select>
                                                            </div><!--/.control-group-->


                                                            <div class='control-group'>
                                                                <label class='control-label' for=''>Are you primarily a product or service based business? Or Both?</label>
                                                                <select id="inputSelect">
                                                                    <option>Product</option>
                                                                    <option>Service</option>
                                                                    <option>Both</option>
                                                                </select>
                                                            </div><!--/.control-group-->


                                                            <div class='control-group'>
                                                                <label class='control-label' for=''>What stage is your company?</label>
                                                                <select id="inputSelect">
                                                                    <option value="Concept">Concept</option>
                                                                    <option value="Startup">Startup</option>
                                                                    <option value="Funded Startup">Funded Startup</option>
                                                                    <option value="Operational Small Biz">Operational Small Biz</option>
                                                                    <option value="Operational Mid-Size Biz ($20-50M/yr)">Operational Mid-Size Biz ($20-50M/yr)</option>
                                                                    <option value="Operational Large Biz (>$50M/yr)">Operational Large Biz (>$50M/yr)</option>
                                                                </select>
                                                            </div><!--.control-group-->


                                                        </div><!--/.span8-->
                                                    </div><!--/.row-fluid-->

                                                    <div class='row-fluid intake-footer'>
                                                        <button class="btn-next btn span4 btn-success btn-large" style='margin-top:2em'>
                                                            <span class='pull-left'>
                                                                Continue</span>
                                                                <span class='pull-right'>
                                                                    <i class="icon-arrow-right"></i>
                                                                </span>
                                                        </button>
                                                    </div><!--/.row-fluid intake-footer-->

                                                </div><!--/.step-pane #step1-->

                                                <div class='step-pane' id='step2'>
                                                    <h1>Company Location and Contact Info</h1>
                                                    <br>
                                                    <div class='row-fluid'>
                                                        <div class='span8'>
                                                            <div class='control-group'>
                                                                <label class='control-label'>Where is your primary business headquarters located?</label>
                                                                <div class='controls'>
                                                                    <input class='span8' id='' placeholder='Street Address 1' type='text'>
                                                                </div> <!--/.controls-->
                                                                <div class='controls'>
                                                                    <input class='span8' id='' placeholder='Street Address 2' type='text'>
                                                                </div> <!--/.controls-->

                                                                <div class='controls'>
                                                                    <div class='row-fluid'>
                                                                        <div class='span8'>
                                                                            <input class='span6' id='' placeholder='City' type='text'>
                                                                            <input class='span4 offset2' id='state' placeholder='State' type='text'>
                                                                        </div><!--/.span12-->
                                                                    </div><!--/.row-fluid-->
                                                                </div> <!--/.controls-->


                                                                <div class='controls'>
                                                                    <div class='row-fluid'>
                                                                        <div class='span8'>
                                                                            <input class='span4' id='' placeholder='Zipcode' type='text'>
                                                                            <input class='span6' id='state' placeholder='Country' type='text'>
                                                                        </div><!--/.span8-->
                                                                    </div><!--/.row-fluid-->
                                                                </div> <!--/.controls-->
                                                            </div> <!--/.control-group-->

                                                            
                                                            <div class='control-group'>
                                                                <label class='control-label'>What Contact information does your business use?</label>
                                                                <div class='controls'>
                                                                    <input class="span8" type="text" placeholder="Phone Number +999 999 999 999" data-mask="+999 999 999 999">
                                                                </div> <!--/.controls-->
                                                                <div class='controls'>
                                                                    <input class="span8" type="text" placeholder="Fax Number +999 999 999 999" data-mask="+999 999 999 999">
                                                                </div> <!--/.controls-->

                                                                <div class='controls'>
                                                                    <input class='span8' id='inputText' placeholder='www.yourcompanywebsite.com' type='text'>
                                                                        
                                                                </div> <!--/.controls-->
                                                            </div> <!--/.control-group-->
                                                            


                                                            <div class='control-group'>
                                                                <label class='control-label' for='inputText'>Multiple Locations? Feel free to add location and contact info for more locations</label>
                                                                <br>
                                                                <div class='controls'>
                                                                    <a class='btn btn-default'>Add a Location <i class=' icon-plus-sign'></i></a>
                                                                </div>
                                                            </div><!--/.control-group-->
                                                        </div><!--/.span8-->
                                                    </div><!--/.row-fluid-->
                                                    <div class='row-fluid intake-footer'>
                                                        <button class="btn-next btn span4 btn-success btn-large" style='margin-top:2em'>
                                                            <span class='pull-left'>
                                                                Continue</span>
                                                                <span class='pull-right'>
                                                                    <i class="icon-arrow-right"></i>
                                                                </span>
                                                        </button>
                                                    </div><!--/.row-fluid intake-footer-->
                                                </div> <!--/.step-pane #step2-->

                                                <div class='step-pane' id='step3'>
                                                    <h1>Personalize Your Experience</h1>
                                                       
                                                    <div class='row-fluid'>
                                                        <div class='span8'>
                                                            <div class='lead'>Do you have a company logo?</div>
                        
                                                            <div class='control-group'>
                                                                <div class='controls'>
                                                                    <button class="btn btn-default btn-large">
                                                                        <i class="icon-picture"></i>
                                                                        Upload your logo
                                                                    </button>
                                                                </div><!--/.controls-->
                                                            </div><!--/control-group-->
                                                        </div><!--/.span8-->
                                                    </div><!--/.row-fluid-->

                                                    <hr class='normal'>

                                                    <div class='row-fluid intake-social'>
                                                        <div class='span8'>
                                                            <div class='lead'>Would you like to connect your social media accounts?</div>
                                                            <p>Connect your social media accounts to enable easy sharing and collaboration</p>
                                                            <br>
                                                            

                                                            <div class='control-group'>
                                                               
                                                                <div class='controls'>
                                                                    <div class='row-fluid'>
                                                                        <div class='span4'>
                                                                            <button class="btn btn-block btn-primary" type="submit" name="button"><span class='social-icon'><i class='icon-facebook'> </i></span> Facebook</button>
                                                                        </div><!--/.span8-->
                                                                    </div><!--/.row-fluid-->
                                                                </div> <!--/.controls-->
                                                            </div>  <!--/.control-group-->

                                                            <div class='control-group'>
                                                                <div class='controls'>
                                                                    <div class='row-fluid'>

                                                                        <div class='span4 btn-group'>
                                                                            <button class='btn btn-block dropdown-toggle' data-toggle='dropdown' style='margin-bottom:5px'><span class='social-icon'><i class='icon-twitter'> </i></span>
                                                                                Connected as @YourName
                                                                                 <span class='caret'></span>
                                                                            </button>
                                                                            <ul class='dropdown-menu'>
                                                                                <li>
                                                                                    <a href='#'>Change</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href='#'>Disconnect</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div><!--/.btn group-->
                                                                    </div><!--/.row-fluid-->                     
                                                                </div> <!--/.controls-->
                                                            </div>  <!--/.control-group-->

                                                            <div class='control-group'>
                                                                <div class='controls'>
                                                                    <div class='row-fluid'>
                                                                        <div class='span4'>
                                                                            <button class="btn btn-block btn-primary" type="submit" name="button"><span class='social-icon'><i class='icon-linkedin'> </i> </span>LinkedIn</button>
                                                                        </div><!--/.span8-->
                                                                    </div><!--/.row-fluid-->
                                                                </div> <!--/.controls-->
                                                            </div> <!--/.control-group-->

                                                            <div class='control-group'>
                                                             
                                                                <div class='controls'>
                                                                    <div class='row-fluid'>
                                                                        <div class='span4'>
                                                                            <button class="btn btn-block btn-primary" type="submit" name="button"><span class='social-icon'><i class='icon-google-plus'> </i> </span>Google Plus</button>
                                                                        </div><!--/.span8-->
                                                                    </div><!--/.row-fluid-->
                                                                </div> <!--/.controls-->
                                                            </div>  <!--/.control-group-->


                                                        </div><!--/.span8-->
                                                    </div><!--/.row-fluid-->

                                                    <div class='row-fluid intake-footer'>
                                                        <button class="btn-next btn span4 btn-success btn-large" style='margin-top:2em'>
                                                            <span class='pull-left'>
                                                                Continue</span>
                                                                <span class='pull-right'>
                                                                    <i class="icon-arrow-right"></i>
                                                                </span>
                                                        </button>
                                                    </div><!--/.row-fluid intake-footer-->

                                                </div><!--/.step-pane' #step3-->

                                                <div class='step-pane' id='step4'>
                                                    <h1>Where would you like to start?</h1>

                                                    <div class='row-fluid pricing-tables' style='margin-top:2em;'>
                                                        <div class='span4 pricing-table'>
                                                            <div class='header'>Starter</div>
                                                            <div class='price blue-background'>
                                                                <span>$0</span>
                                                            </div>
                                                            <ul class='unstyled features'>
                                                                <li>
                                                                    <strong>1</strong>
                                                                    user
                                                                </li>
                                                                <li>
                                                                    <strong>No</strong>
                                                                    Task Management
                                                                </li>
                                                                <li>
                                                                    <strong>Limited</strong>
                                                                    Sharing
                                                                </li>
                                                                <li>
                                                                    <strong>5</strong>
                                                                    Marketplace Products
                                                                </li>
                                                                
                                                            </ul>
                                                            <div class='footer'>
                                                                <a href="#" class="btn btn-primary"><i class='icon-signin'></i>
                                                                    Get Started
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class='span4 pricing-table'>
                                                            <div class='header'>Pro</div>
                                                            <div class='price orange-background'>
                                                                <span>$50</span>
                                                            </div>
                                                            
                                                                <ul class='unstyled features'>
                                                                <li>
                                                                    <strong>5</strong>
                                                                    users
                                                                </li>
                                                                <li>
                                                                    <strong>Limited</strong>
                                                                    Task Management
                                                                </li>
                                                                <li>
                                                                    <strong>Full</strong>
                                                                    Sharing Abilities
                                                                </li>
                                                                <li>
                                                                    <strong>10</strong>
                                                                    Marketplace Products
                                                                </li>
                                                                
                                                           
                                                            </ul>
                                                            <div class='footer'>
                                                                <a href="#" class="btn btn-warning"><i class='icon-signin'></i>
                                                                    Get Started
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class='span4 pricing-table'>
                                                            <div class='header'>Enterprise</div>
                                                            <div class='price red-background'>
                                                                <span>$300</span>
                                                            </div>
                                                            <ul class='unstyled features'>
                                                                
                                                                <li>
                                                                    <strong>100</strong>
                                                                    users
                                                                </li>
                                                                <li>
                                                                    <strong>Unlimited</strong>
                                                                    Task Management
                                                                </li>
                                                                <li>
                                                                    <strong>Unlimited</strong>
                                                                    Sharing
                                                                </li>
                                                                <li>
                                                                    <strong>Unlimited</strong>
                                                                    Marketplace Products
                                                                </li>
                                                                
                                                            </ul>
                                                        
                                                            <div class='footer'>
                                                                <a href="#" class="btn btn-danger"><i class='icon-signin'></i>
                                                                    Get Started
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>


                                                </div><!--/.step-pane #step4-->
                                            </form>
                                        </div><!--/.step-content-->
                                        
                                    </div><!--/.fuelux-->
                                </div><!--/.box-content box-padding-->
                            </div><!--/.span12 box-->
                        </div><!--/.row-fluid-->
                    </div><!--/.span12-->
                </div><!--/.row-fluid #content-wrapper-->
            </div><!--/.container-fluid-->
        </section>


        <footer class='footer'>
            <div class='container-fluid'>
                <div class='row-fluid credits'>
                    <p class='text-center'><span class='app'>{{ Config::get('app.name') }}</span> <span class='powered-by'>Powered by</span><!--/.powered-by--><span class='saas-venture'>
                    SaasVenture
                    </p>
                </div><!--/.row-fluid-->
            </div><!--/.container-fluid-->
        </footer>
    </div><!--/#wrapper-->
        
</body>

@stop