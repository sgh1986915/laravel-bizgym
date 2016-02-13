@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')



<div class='row-fluid brand stream' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span9">
                    <h3 class='pull-left'>
                        <i class='icon-dashboard'></i>
                        <span>Brand</span>
                        <i id="arrow-after-main" class="icon-double-angle-right"/></i>
						<span class="heading-small">Activity</span>
                    </h3>
                </div> <!--/.span9 -->
                
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                 What's going on with Google?
            </div> <!--/.title-->

            <div class='filter-group'>
                <div class='filter'>
                	<select id='activity-filter' class='select2 input-medium'>
                		<option value='0' disabled selected style='display:none;'>Sort by Activity</option>
                		<option value='sign-up'>New Member</option>
                		<option value='task'>Completed a Task</option>
                		<option value='vision-create'>Created a Vision Item</option>
                		<option value='vision-edit'>Modified a Vision Item</option>
                		<option value='vision-edit'>Modified a Vision Item</option>
                		<option value='vision-edit'>Member Left</option>
                		<option value='vision-edit'>Birthday</option>
                	</select>
                </div><!--/.filter-->

                <div class='filter'>
                	<select id='group-filter' class='select2 input-medium'>
                		<option value='0' disabled selected style='display:none;'>Sort by Group</option>
                		<option value='management'>Management</option>
                		<option value='employee'>Employee</option>
                	</select>
                </div><!--/.filter-->
            </div><!--/.filter-group-->
        </div><!--/.row-fluid .section-header-->
    

    	<div class='row-fluid stream-content'>
    		<ol>
    			<li class='activity-item'>
    				<div class='row-fluid'>
    					<div class='activity-icon'>
    						<i class='icon-user'></i>
    					</div> <!--/.activity-icon-->
    					<div class='activity-content'>
	    					<div class='the-activity'>
	    						<a href='user' class='text-primary'><span class='user-name'>User23</a></span> <span class='activity'> Joined the Company </span><span class='time'>10 Minutes ago</span>
	    					</div><!--/.the-activity-->

	    					<!-- if there is multimedia content
	    					<div class='activity-media'></div> -->
	    						
	    					<div class='action-responses'> 
			    				<div class='action'>
			    					<a class='btn btn-mini btn-white'><i class='icon-heart-empty'></i></a>
			    					<a class='btn btn-mini btn-white' data-toggle='collapse' role='button' data-target='#comment-1'><i class='icon-comment-alt'> </i> Comment</a>
			    				</div><!--/.action-->
			    			</div><!--/.action-responses-->

		    				<div class='comment-box collapse' id='comment-1'>
			    				<div class='row-fluid box'>
		    						<div class='box-content'>
	                                	<textarea id="body" class="span12" cols="50" rows="3" name="body" style="overflow: hidden; word-wrap: break-word; resize: horizontal;"></textarea>
			                            <div class='row-fluid comment-utility'>
		                                    <a class='btn btn-mini' role='button' data-toggle='collapse' data-target='#comment-1'><i class='icon-remove'> </i> Cancel</a>
		                                    <a class="btn btn-mini btn-success">Post Comment</a>
		                                </div><!--/.row-fluid comment-utility-->
                            		</div><!--/.box-content-->
                            	</div><!--/.row-fluid box-->
		    				</div><!--/.comment-box collapse-->


		    			</div><!--/.activity-content-->
	    			</div><!--/.row-fluid-->
    			</li> <!--/.activity-item-->

    			<li class='activity-item'>
    				<div class='row-fluid'>
    					

    					<div class='activity-icon'>
    						<i class='icon-picture'></i>
    					</div> <!--/.activity-icon-->
    					<div class='activity-content'>
	    					<div class='the-activity'>
	    						<a href='user' class='text-primary'><span class='user-avatar'><img alt="Mila Kunis" height="23" src="/assets/images/avatar.jpg" width="23" class='img-circle'/></span><span class='user-name'>Mila Kunis</a></span> <span class='activity'> Added a new company logo </span><span class='time'>10 Minutes ago</span>
	    					</div><!--/.the-activity-->

	    					<div class='activity-media'>
	    						<img src='http://placehold.it/350x150'>
	    					</div><!--/.activity-media-->
			    			<div class='action-responses'>
			    				<div class='action'>
			    					<a class='btn btn-mini btn-white'><i class='icon-heart-empty'></i></a>
			    					<a class='btn btn-mini btn-white'><i class='icon-comment-alt'> </i> Comment</a>
			    				</div><!--/.action-->

			    				<div class='likes'> <!-- If there have been likes display this -->
			    					<a href='' class='has-popover' data-html='true' data-content="James Likes this <i class='icon-trophy'></i>" data-placement='top' data-title='Likes'> <i class='icon-heart'></i> 5 Like this</a>

			    				</div><!--/.likes-->
			    			</div><!--/.row-fluid action-responses-->
		    			</div><!--/.activity-content-->
	    			</div><!--/.row-fluid-->
    			</li> <!--/.activity-item-->
    		</ol>
    	</div>




    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->



@stop