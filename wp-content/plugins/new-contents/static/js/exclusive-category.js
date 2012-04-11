jQuery(document).ready(function($) {
	    $('.categorychecklist li input[type="checkbox"]').bind('click',function() {
		if($(this).is(':checked')) {
		    $('.categorychecklist li input[type="checkbox"]').each(function (){
                        $(this).removeAttr('checked');
                    });
		    $(this).attr('checked','checked');
		 }
	   });
});