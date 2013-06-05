(function ($) {
  Drupal.behaviors.jsDev = {
    attach: function (context) {
      $(".view-slideshow-boat-page-2-kategorie a").first().addClass('active');
      $("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").first().parent().addClass('active');
      $('#block-views-films-boat-page-block .yTitle').first().addClass('active');
      $('#webform-component-jag-vill-bli-uppringd').addClass('hidden');
      $(".view-id-slideshow_boat_page_2_kategorie a").click(function(e) {
        e.preventDefault();
        var category = $(this).attr("rel");
	$(".view-id-slideshow_boat_page_2_kategorie a").removeClass('active');
	$(this).addClass('active');
	$("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").parent().removeClass('active');
	$('#widget_pager_bottom_slideshow_boat_page_2-block_1 div[rel="'+category+'"] img').first().parent().addClass('active');
	$('#widget_pager_bottom_slideshow_boat_page_2-block_1 div[rel="'+category+'"] img').first().click();
      });
      $("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").click(function(e) {
        e.preventDefault();
	$("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").parent().removeClass('active');
	$(this).parent().addClass('active');
	$(".view-id-slideshow_boat_page_2_kategorie a").removeClass('active');
	var category = $(this).parent().attr("rel");
	$('.view-id-slideshow_boat_page_2_kategorie a[rel="'+category+'"]').addClass('active');
      });
      $('#block-views-slideshow-boat-page-2-block-1 .views-slideshow-controls-text-previous a').click(function(e) {
        e.preventDefault();
	var rowCount = $('#views_slideshow_cycle_teaser_section_slideshow_boat_page_2-block_1 .views-slideshow-cycle-main-frame-row').length;
	var rowClass = $('#views_slideshow_cycle_teaser_section_slideshow_boat_page_2-block_1 .views-slideshow-cycle-main-frame-row[style*="display: block"]').first().attr('class');
	var regex = new RegExp("views-row-([0-9]+)");
	var currRow = parseInt(regex.exec(rowClass)[1]);
	var prevRow;
	if(currRow == 1) {
	  prevRow = rowCount;
	} else {
	  prevRow = currRow - 1;
	}
	$("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").parent().removeClass('active');
	$("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").eq(prevRow-1).parent().addClass('active');
	var category = $('#widget_pager_bottom_slideshow_boat_page_2-block_1 img').eq(prevRow-1).parent().attr('rel');
	$(".view-id-slideshow_boat_page_2_kategorie a").removeClass('active');
	$('.view-id-slideshow_boat_page_2_kategorie a[rel="'+category+'"]').addClass('active');
      });
      $('#block-views-slideshow-boat-page-2-block-1 .views-slideshow-controls-text-next a').click(function(e) {
        e.preventDefault();
	var rowCount = $('#views_slideshow_cycle_teaser_section_slideshow_boat_page_2-block_1 .views-slideshow-cycle-main-frame-row').length;
	var rowClass = $('#views_slideshow_cycle_teaser_section_slideshow_boat_page_2-block_1 .views-slideshow-cycle-main-frame-row[style*="display: block"]').first().attr('class');
	var regex = new RegExp("views-row-([0-9]+)");
	var currRow = parseInt(regex.exec(rowClass)[1]);
	var nextRow;
	if(currRow == rowCount) {
	  nextRow = 1;
	} else {
	  nextRow = currRow + 1;
	}
	$("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").parent().removeClass('active');
	$("#widget_pager_bottom_slideshow_boat_page_2-block_1 img").eq(nextRow-1).parent().addClass('active');
	var category = $('#widget_pager_bottom_slideshow_boat_page_2-block_1 img').eq(nextRow-1).parent().attr('rel');
	$(".view-id-slideshow_boat_page_2_kategorie a").removeClass('active');
	$('.view-id-slideshow_boat_page_2_kategorie a[rel="'+category+'"]').addClass('active');
      });
      $('#block-views-films-boat-page-block .yTitle').click(function(e) {
	$('#block-views-films-boat-page-block .yTitle').removeClass('active');
	$(this).addClass('active');
      });
      
      if($('#block-views-films-boat-page-block').length > 0 || $('#block-views-a6125d84aa7d4ec67e9ebd351b00ef49').length > 0) {
	if($('#block-views-a6125d84aa7d4ec67e9ebd351b00ef49').length > 0) {
	  $('a#films-boat-link').attr('href', '#block-views-a6125d84aa7d4ec67e9ebd351b00ef49');
	}
	$('a#films-boat-link').removeClass('hidden');
	$('span.js-delimiter-1').removeClass('hidden');
      }
      if($('#block-views-flash-block-block .views-row-first').children().length > 0) {
	$('a#flash-boat-link').removeClass('hidden');
	$('span.js-delimiter-2').removeClass('hidden');
      }
      $("a#films-boat-link, a#flash-boat-link").click(function(event) {
	event.preventDefault();
	var targetlink = $(this).attr('href');
	var $target = $(targetlink);
	if ($target.length > 0) {
	  var targetOffset = $target.offset().top;
	  $('html,body').animate({scrollTop: targetOffset},900);
	  document.location.href = targetlink;
	}
      });
      $("#block-views-films-boat-page-block .views-slideshow-controls-bottom .yTitle").click(function(event) {
      	$("#block-views-films-boat-page-block iframe").each(function(i) {
            this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        });
      });
/*      $('#webform-client-form-22').submit(function() {
	$('#edit-submitted-jag-vill-bli-uppringd-newsletter-email-address').val($('#edit-submitted-e-post').val());
      });*/
/*      $('#webform-client-form-61').submit(function() {
	$('#edit-submitted-newsletter-newsletter-email-address').val($('#edit-submitted-e-post').val());
      });*/
    }
  };
})(jQuery);

(function ($) {
$(function(){
	$.extend($.fn.disableTextSelect = function() {
		return this.each(function(){
			if($.browser.mozilla){//Firefox
				$(this).css('MozUserSelect','none');
			}else if($.browser.msie){//IE
				$(this).bind('selectstart',function(){return false;});
			}else{//Opera, etc.
				$(this).mousedown(function(){return false;});
			}
		});
	});
	$('.noSelect').disableTextSelect();//No text selection on elements with a class of 'noSelect'
});
})(jQuery);;
