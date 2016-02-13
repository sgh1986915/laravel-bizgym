$(function() {
	$('form').submit(function() {
		$(this).find('.error').remove();
		$this_from = $(this);
		$(this).ajaxSubmit({
			dataType : 'json',
			success  : function(resp) {
				if(resp.error == 1) {
					$.each(resp.message, function(name, msg) {
						$this_from.find(':input[name="' + name + '"]')
							.parents('.controls').after('<p class="error">' + msg + '</p>');
					})
				} else {
					window.location.href = window.location.href; //refresh
				}
			} 
		});
		return false;
	});
	
    $('.modal').on('hidden', function () {
    	$(this).find('.error').remove();
    	$(this).find(':input').val('');
    });
    
    $('.badge_edit').click(function() {
    	var url = this.href;
    	$.ajax({
    		type : 'get',
    		url  : url,
    		dataType : 'json',
    		success : function(resp) {
    			if(resp.error == 0) {
    				$edit_form = $('#modal-edit-badge').find('form');
    				$edit_form.attr('action', url);
    				$edit_form.find(':input[name="title"]').val(resp.data.title);
    				$edit_form.find(':input[name="type"]').val(resp.data.type);
    				$edit_form.find(':input[name="description"]').val(resp.data.description);
    				$edit_form.find(':input[name="date_active"]').val(resp.data.date_active);
    				$edit_form.find(':input[name="date_expires"]').val(resp.data.date_expires);
    				$edit_form.find('img').attr('src', '/uploads/badge/' + resp.data.image);
    				$('#modal-edit-badge').modal();
    			} else {
    				alert(resp.message);
    			}
    		}
    	});
    	return false;
    });
})
