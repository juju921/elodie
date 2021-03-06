/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
	// Header text color.
	wp.customize('header_textcolor', function (value) {
		value.bind(function (to) {
			if ( 'blank' === to ) {
				$('.site-title, .site-description').css({
					'clip'    : 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				});
			} else {
				$('.site-title, .site-description').css({
					'clip'    : 'auto',
					'position': 'relative'
				});
				$('.site-title, .site-description').css({
					'color': to
				});
			}
		});
	});

	wp.customize.bind('preview-ready', function () {
		wp.customize.preview.bind('update-inline-css', function (object) {

			var data = {
				'action': object.action,
				'args'  : object.data,
				'id'    : object.id
			};

			jQuery.ajax({
				dataType: 'json',
				type    : 'POST',
				url     : WPUrls.ajaxurl,
				data    : data,
				complete: function (json) {
					var sufix = object.action + object.id;
					var style = $('#newsmag-stylesheet-' + sufix);

					if ( !style.length ) {
						style = $('head').append('<style type="text/css" id="newsmag-stylesheet-' + sufix + '" />').find('#newsmag-stylesheet-' + sufix);
					}

					style.html(json.responseText);
				}
			});
		});
	});


	$(document).ready(function () {
		if ( 'undefined' === typeof wp || !wp.customize || !wp.customize.selectiveRefresh ) {
			return;
		}

		wp.customize.selectiveRefresh.bind('widget-updated', function (placement) {
			switch ( placement.widgetIdParts.idBase ) {
				case 'newsmag_widget_posts_carousel':
					Newsmag.initOwlCarousel($);
					break;
				case 'newsmag_slider_widget':
					Newsmag.initMainSlider($);
					break;

				default:
					return false;
					break;
			}
		});
	});
})(jQuery);