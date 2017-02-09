$(function() {
  $(".navbar-expand-toggle").click(function() {
    $(".app-container").toggleClass("expanded");
	
	if($('#app-container').hasClass('expanded')){
		$(".sidebar-charm").addClass('hide');
		$(".app-container").removeClass("no-popover");
		 
		$('li.panel.dropdown > a').attr('data-toggle', 'collapse');
		$('#popover-sales-invisible').attr('id', 'popover-sales');
		$('#popover-receipts-invisible').attr('id', 'popover-receipts');
		$('#popover-collections-invisible').attr('id', 'popover-collections');
		$('#popover-purchases-invisible').attr('id', 'popover-purchases');
		$('#popover-disbursements-invisible').attr('id', 'popover-disbursements');
		$('#popover-adjustments-invisible').attr('id', 'popover-adjustments');
		$('#popover-specials-invisible').attr('id', 'popover-specials');
		
		$('#popover-sales').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-sales-content').html()	
		});
		$('#popover-receipts').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-receipts-content').html()	
		});
		$('#popover-collections').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-collections-content').html()	
		});
		$('#popover-purchases').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-purchases-content').html()	
		});
		$('#popover-disbursements').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-disbursements-content').html()	
		});
		$('#popover-adjustments').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-adjustments-content').html()	
		});
		$('#popover-specials').popover({
			animation: true,
			container: '#sidebar-container',
			placement: 'top',
			trigger: 'focus',
			html: true,
			content: $('#popover-specials-content').html()	
		});
	}else{
		$(".sidebar-charm").removeClass('hide');
		$(".app-container").toggleClass("no-popover");
		
		$('li.panel.dropdown > a').removeAttr('data-toggle');
		$('#popover-sales').attr('id', 'popover-sales-invisible');
		$('#popover-receipts').attr('id', 'popover-receipts-invisible');
		$('#popover-collections').attr('id', 'popover-collections-invisible');
		$('#popover-purchases').attr('id', 'popover-purchases-invisible');
		$('#popover-disbursements').attr('id', 'popover-disbursements-invisible');
		$('#popover-adjustments').attr('id', 'popover-adjustments-invisible');
		$('#popover-specials').attr('id', 'popover-specials-invisible');
	}

    return $(".navbar-expand-toggle");
  });
  return $(".navbar-right-expand-toggle").click(function() {
    $(".navbar-right").toggleClass("expanded");
    return $(".navbar-right-expand-toggle").toggleClass("fa-rotate-90");
  });
});

/**$(function() {
  return $('select').select2();
});**/

$(function() {
  return $('.toggle-checkbox').bootstrapSwitch({
    size: "small"
  });
});

$(function() {
  return $('.match-height').matchHeight();
});

$(function() {
  return $('.datatable').DataTable({
    "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
  });
});

$(function() {
  return $(".side-menu .nav .dropdown").on('show.bs.collapse', function() {
    return $(".side-menu .nav .dropdown .collapse").collapse('hide');
  });
});

$(function(){
	$('button.fa-rotate-90').on('click', function(){
		$('li.panel.dropdown > a').attr('data-toggle', 'collapse');
	});
			
	$('.tooltip-toggle').tooltip({animation: true, placement: 'right'});
	$('[data-toggle=popover]').popover();	
});
