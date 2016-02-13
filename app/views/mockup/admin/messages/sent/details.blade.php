@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin message-preview' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Message Details</span>
                    </h3>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                            <a href="index.html"><i class='icon-dashboard'> </i> Admin
                            </a>
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Messages
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Sent
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            12434
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Details for Message #1234
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Sent Messages</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->

        <div class='row-fluid message-info'>
        
                <div class='row-fluid message-meta' style='margin-top:0em;'> 
                    <ul class='list-unstyled msg-info inline'>
                        <li><span class='item'>Subject:</span><span class='item-value'>Welcome to BizGym</span></li>
                        <li><span class='item'>Recipient:</span><span class='item-value'>test@google.com</span></li>
                        <li><span class='item'>Type:</span><span class='item-value'>System Message</span></li>
                        <li><span class='item'>Frequency</span><span class='item-value'>Immediate</span></li>
                        <li><span class='item'>Sent</span><span class='item-value'>September 29, 2013 at 7:32 pm</span></li>
                    </ul>

                </div><!--/.row-fluid-->
    

            
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box'>
               
                <div class='box-content'>
                   <pre>
&lt;!DOCTYPE html&gt;
    &lt;html lang=&quot;en&quot; style=&quot;margin: 0px; padding: 0px;&quot;&gt;
        &lt;head&gt;

        &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Newsletter&lt;/title&gt;
        &lt;meta name=&quot;description&quot; content=&quot;Welcome&quot;&gt;

        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;


    &lt;/head&gt;

    &lt;body style=&quot;margin: 0px; padding: 0px;&quot;&gt;
        &lt;div id=&quot;topbar&quot; style=&quot;overflow:hidden;background-color: #06aae5;&quot;&gt;
            &lt;a href=&quot;&quot; style=&quot;border:none;text-decoration:none;margin:0;padding:0;&quot;&gt; &lt;/a&gt;
        &lt;/div&gt;
        &lt;div id=&quot;newsletter&quot; style=&quot;border: 1px solid #ccc;margin:15px 20px;overflow:hidden;&quot;&gt;
        &lt;div class=&quot;newsletter-header&quot; style=&quot;background: #f7f7f7;padding:6px 10px;border-bottom: 1px solid #ccc;&quot;&gt;
            &lt;h1 style=&quot;margin:0px;padding:0px;line-height:normal;color: #669fc7;font-weight:normal;&quot;&gt; &lt;/h1&gt;        
        &lt;/div&gt;
        &lt;div id=&quot;newsleter-content&quot; style=&quot;padding: 15px;&quot;&gt;
            Welcome to BizGym

            Contact us here: support@bizgym.com
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
                </pre>
                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->



       



    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop