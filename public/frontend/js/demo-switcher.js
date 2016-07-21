/*!
 * jQuery Cookie Plugin v1.3.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function(e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(e){function n(e){return e}function r(e){return decodeURIComponent(e.replace(t," "))}function i(e){if(e.indexOf('"')===0){e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}try{return s.json?JSON.parse(e):e}catch(t){}}var t=/\+/g;var s=e.cookie=function(t,o,u){if(o!==undefined){u=e.extend({},s.defaults,u);if(typeof u.expires==="number"){var a=u.expires,f=u.expires=new Date;f.setDate(f.getDate()+a)}o=s.json?JSON.stringify(o):String(o);return document.cookie=[s.raw?t:encodeURIComponent(t),"=",s.raw?o:encodeURIComponent(o),u.expires?"; expires="+u.expires.toUTCString():"",u.path?"; path="+u.path:"",u.domain?"; domain="+u.domain:"",u.secure?"; secure":""].join("")}var l=s.raw?n:r;var c=document.cookie.split("; ");var h=t?undefined:{};for(var p=0,d=c.length;p<d;p++){var v=c[p].split("=");var m=l(v.shift());var g=l(v.join("="));if(t&&t===m){h=i(g);break}if(!t){h[m]=i(g)}}return h};s.defaults={};e.removeCookie=function(t,n){if(e.cookie(t)!==undefined){e.cookie(t,"",e.extend({},n,{expires:-1}));return true}return false}});

jQuery(function($) {

	$.cookie.defaults.path = $('.demo-style').data('cookie-path');
	
	var demo_data;
	
	try {
		demo_data = $.parseJSON($.cookie('demo-data')) || {};
	} catch (e) {
		demo_data = {};
	};
	
	// preserve demo data
	var persist = function(key, value) {
		demo_data[key] = value;

		// persist to cookie
		$.cookie('demo-data', JSON.stringify(demo_data));
	};
	
	$('.demo-style .toggle, .style-heading').click(function() {
		$('.demo-style .selector').toggle();
		$('.demo-style .toggle').toggleClass('closed');

		persist('handle', ($('.demo-style .toggle').hasClass('closed') ? 'close' : null));
	});

	// change boxed/non-boxed
	$('.layout-style').change(function() {

		// boxed?
		if ($(this).val() == 'boxed') {
			$('body').addClass('boxed');
		}
		else {
			$('body').removeClass('boxed');
		}

		persist('style', $(this).val());

		return false;				
	});
	
	// change advanced style
	$('.advanced-style').change(function() {
		
		$('.advanced-css').remove();

		// remove colors
		$('.sample-color-css').remove();
		$('.sample-colors .active').removeClass('active');

		persist('skin', $(this).val());
		
		if ($(this).val()) {
			
			var url = $(this).data('url') + '/css/' + $(this).val(),
				that = $(this);
			
			// pseudo on-load with ajax
			$.get(url, function(data) {		
				
				//$('body').append('<link rel="stylesheet" href="' + url + '" type="text/css" class="advanced-css" />');
				
				// add the skin
				$('<style class="advanced-css demo-skin">' + data + '</style>').appendTo('head');
				
				// remove the preload hide
				$('#demo-skin-pre').remove();
				//setTimeout(function() { $('#demo-skin-pre').remove(); }, 200);
				
				// prevent transitions on skin change - enable after 2ms
				$('<style id="prevent-flicker">* { -webkit-transition: none !important; -moz-transition: none !important; transition: none !important; }</style>').appendTo('body');
				setTimeout(function() { $('#prevent-flicker').remove(); }, 2);
			});
		}

		// dark style
		var main_ads = $('.main-head .ads-widget img, .main-content .ads-widget img'), 
			side_ads = $('.sidebar .ads-widget img');
		
		if ($(this).val() == 'skin-dark.css') {
			
			// save originals
			var orig = function() { $(this).data('orig', $(this).attr('src')); };
			main_ads.each(orig);
			side_ads.each(orig);
			
			main_ads.attr('src', 'http://theme-sphere.com/smart-mag/wp-content/uploads/2014/06/ad-block-dark.png');
			side_ads.attr('src', 'http://theme-sphere.com/smart-mag/wp-content/uploads/2014/06/ad-block-sidebar-dark.png');
		}
		else {
			var restore_orig = function() { $(this).attr('src', $(this).data('orig')); };
			main_ads.each(restore_orig);
			side_ads.each(restore_orig);
		}
		
		return false;
	});
	
	// toggle top bar
	$('.top-bar-toggle a, .breadcrumbs-toggle a').click(function() {
		$(this).parent().find('a').removeClass('active');
		$(this).addClass('active');

		var target = $(this).parent().data('target');
		
		// show or hide?
		var bar = $('.' + target), state = 'show';
		if ($(this).hasClass('show')) {
			bar.show();
		}
		else {
			state = 'hide';
			bar.hide();
		}

		persist(target, state);

		return false;
	});

	// sticky nav
	$('.sticky-nav-toggle a').click(function() {
		$(this).parent().find('a').removeClass('active');
		$(this).addClass('active');

		var enable = ($(this).hasClass('show') ? 1 : 0);

		if (!enable) {
			$('.navigation').removeClass('sticky');
		}
		
		$('.navigation').data('sticky-nav', enable);
		
		Bunyad_Theme.sticky_nav();

		persist('sticky-nav', (enable ? 'show' : 'hide'));

		return false;
	});
	

	// change main color to sample
	$('.sample-colors a').click(function() {
		var bg = $(this).css('backgroundColor'), 
			rgb = bg.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);

		rgb = rgb.join(',');

		// remove existing
		$('.sample-color-css').remove();

		// modify main color		
		$("<style type='text/css' class='sample-color-css'>" + $('#css-main-color').html().replace(/%color%/g, bg).replace(/%rgb_color%/g, rgb) + "</style>").appendTo('body');

		persist('color', $(this).attr('class'));

		// add active
		$(this).parent().find('a').removeClass('active');
		$(this).toggleClass('active');

		return false;
	});

	$('.reset-style').click(function() {

		$.cookie('demo-data', false);

		location.reload();
		
		return false;
	});

	// act on demo data
	if (demo_data) 
	{
		$.each(demo_data, function(key, value) {
			
			switch (key) {
				case 'skin':
					$('.advanced-style').val(value).trigger('change');
					break;
				
				case 'style':
					$('.layout-style').val(value).trigger('change');
					break;

				case 'top-bar':
				case 'breadcrumbs':
				case 'sticky-nav':
					$('.' + key + '-toggle').find('a.' + value).click();
					break;

				case 'color':
					$('.sample-colors').find('.' + value.split(' ').join('.')).click();
					break;

				case 'handle':
					if (value == 'close') {
						$('.style-heading').click();
					}
					break;
					
				default:
					break;
			};
		});
	}
	
});