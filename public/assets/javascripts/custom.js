$(document).ready(function(){

    
    // Target your .container, .wrapper, .post, etc.
    $("#video-container").fitVids();


    //Show resources in vision sub-category

    $('#resource-toggle').click(function(){
    	var $this = $(this);

    	$this.toggleClass('open');

    	if($this.hasClass('open')){
    		$this.html('Close Resources <i class="icon-collapse-alt"></i>');
    	}

    	else{
    		$this.html('Resources <i class="icon-expand-alt"></i>');
    	}

    });


    // Show questions in Admin Taxonomy sub category
    $('.show-question').click(function(){
        var $this = $(this);

        $this.toggleClass('open');

        $this.closest('.box-header').find('.taxonomy-action').toggleClass('active');

        $this.closest('.box-content').children('.question').toggle(200);

        if($this.hasClass('open')){
            $this.html('Hide Questions & Options <i class="icon-chevron-up"></i>');
        }

        else{
            $this.html('Show Questions & Options <i class="icon-chevron-down"></i>');
        }
    });


    // Show answers in Admin Taxonomy question
    $('.show-answers').click(function(){
        var $this= $(this);

        $this.toggleClass('open');

        $this.closest('.box-header').find('.taxonomy-action').toggleClass('active');

        $this.closest('.box-header').next('.answers').toggle(200);

        if($this.hasClass('open')){
            $this.html('Hide Answers & Options <i class="icon-chevron-up"></i>');
        }

        else{
            $this.html('Show Answers & Options <i class="icon-chevron-down"></i>');
        }


    });

});
