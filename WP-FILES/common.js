jQuery(document).ready(function(){
	jQuery(document).keyup(function(e) {
     	if (e.key === "Escape") { // escape key maps to keycode `27`
            jQuery('.fa_popup_bckg').css('display', 'none');
            jQuery('.fa_popup_wrap').css('display', 'none');
    	}
	});
    jQuery('.fa_popup_bckg').on('click touchstart', function () {
		console.log('ecx22');
        jQuery('.fa_popup_bckg').css('display', 'none');
        jQuery('.fa_popup_wrap').css('display', 'none');
    });
    jQuery(".page-id-10724 a[href='https://www.huntergalloway.com.au/free-assessment/']").click(function() {
        jQuery('.fa_popup_bckg').css('display', 'block');
        jQuery('.fa_popup_wrap').css('display', 'block');
        return false;
    });
    jQuery('.fa_popup_clsose_x').click(function() {
        jQuery('.fa_popup_bckg').css('display', 'none');
        jQuery('.fa_popup_wrap').css('display', 'none');
    });
    jQuery('#fa_popup_add_from button').click(function() {
        jQuery('#pop_f_one').css('display', 'none');
        jQuery('#pop_f_two').css('display', 'block');

        jQuery('#input_12_5').val(jQuery(this).data('value'));

        jQuery('.fa_popup_progress_bar li').eq(1).addClass('fa_popup_progress_bar_item_active');
    });
    jQuery('button[name="fa_popup_cls_btn"]').click(function() {
        jQuery('#pop_f_one').css('display', 'block');
        jQuery('#pop_f_two').css('display', 'none');
        jQuery('.fa_popup_progress_bar li').eq(0).addClass('fa_popup_progress_bar_item_active');
        jQuery('.fa_popup_progress_bar li').eq(1).removeClass('fa_popup_progress_bar_item_active');
    });

	jQuery('.tbb_for_single_close').click(function() {
        jQuery('.tbb_for_single.show').hide();
    });

	document.addEventListener( 'wpcf7mailsent', function( event ) {
	  console.log( "Fire!" );
	  setTimeout(function(){
	  	console.log( "Fire2!" );
		  jQuery(".pum-active").css("display", "block");
	  }, 500);
	}, false );

    window.onscroll = function() {
        var sidebarScroll = window.pageYOffset;

        if (sidebarScroll >= 350) {
            jQuery(".footer_button").addClass("bottomfixed");
        } else {
            jQuery(".footer_button").removeClass("bottomfixed");
        };
    };

});
// console.log('sdgdfg');