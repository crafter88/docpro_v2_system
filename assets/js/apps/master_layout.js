$(document).ready(function(){
	$('button.fa-rotate-90').on('click', function(){
		$('li.panel.dropdown > a').attr('data-toggle', 'collapse');
	});
	$(function() {
	  return $('.select2').select2();
	});
	
	if(parseFloat($('#company-name').closest('li').height()) <= 50){
		$('#company-name').css('font-size', '14px');
		$('#company-name').css('margin-top', '17px');
		$('#top-navbar').css('display', 'block');
	}
});

$('#financial-reports-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#financial-reports-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$(this).attr('style', 'background-color: #696969 !important');
	$('#financial-reports-nav span').attr('style', 'background-color: #696969 !important;');

});

$('#journals-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#journals-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$(this).attr('style', 'background-color: #696969 !important');
	$('#journals-nav span').attr('style', 'background-color: #696969 !important;');
});

$('#company-reports-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#company-reports-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$(this).attr('style', 'background-color: #696969 !important');
	$('#company-reports-nav span').attr('style', 'background-color: #696969 !important;');
});

$('#book-of-accounts-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#book-of-accounts-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$(this).attr('style', 'background-color: #696969 !important');
	$('#book-of-accounts-nav span').attr('style', 'background-color: #696969 !important;');
});

$('#docpro-settings-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#docpro-settings-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$(this).attr('style', 'background-color: #696969 !important');
	$('#docpro-settings-nav span').attr('style', 'background-color: #696969 !important;');
});

$('#company-settings-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#company-settings-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$(this).attr('style', 'background-color: #696969 !important');
	$('#company-settings-nav span').attr('style', 'background-color: #696969 !important;');
});

$('#tables-nav').popover({
	animation: false,
	html: true,
	placement: function(context, src) {
		$(context).addClass('sidebar-popover-content');
		return 'right';
	},
	trigger: 'manual',
	content: function(){
		return $('#tables-popover').html();
	},
	container: 'body',
}).on("mouseenter", function () {
	$('.sidebar-popover-content').popover('hide');
	var _this = this;
	$(this).popover("show");
	$(this).siblings(".popover").on("mouseleave", function () {
		$(_this).popover('hide');
	});
	
	$('ul#sidebar-container > li a, ul#sidebar-container > li span').removeAttr('style');
	$('#tables-nav').attr('style', 'background-color: #696969 !important;');
	$('#tables-nav span').attr('style', 'background-color: #696969 !important;');
});

$('.side-body').hover(function(){
	$('.sidebar-popover-content').popover('hide');
});
$('.navbar-header').hover(function(){
	$('.sidebar-popover-content').popover('hide');
});

$('#date').html(' &nbsp; ' + new Date().toString('MMM d, yyyy'));
$('#time').html(' &nbsp; ' + new Date().toString("hh:mm tt"));
setInterval(function(){
	$('#time').html(' &nbsp; ' + new Date().toString("hh:mm tt"));
}, 3000);