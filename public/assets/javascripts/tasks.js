$(document).ready(function(){



    // Show card
    $('.new-card').click(function(){
        var $this= $(this);

        $this.closest('.box-header').next('.box-content').children('.card-input').toggle(200);


    });



    //editables
    $('.done-title').editable({
        url: '/post',
        type: 'text',
        mode: 'inline',
        pk: 1,
        name: 'list name',
        title: 'Edit List Name'
    });


    $("a.list-title").hover(function(){

	$(this).append("<i class='icon-edit helper-icon'></i>")
	}, function(){

	$(this).children("i").remove();
	})


    $('.card-action').click(function(){
        var $this = $(this);

        $this.toggleClass('open').next('.collapse').toggleClass('in');

        if($this.hasClass('open')){
            $this.html('Close Details <i class="icon-collapse-alt"></i>');
        }

        else{
            $this.html('Show Details <i class="icon-expand-alt"></i>');
        }


    });




});