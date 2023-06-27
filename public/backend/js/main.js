
$(function () {
	"use strict";


	// app dropdown
	new PerfectScrollbar(".app-container")
	new PerfectScrollbar(".header-notifications-list")


	$(".sidebar-close").on("click", function () {
		$("body").removeClass("toggled")
	})



	$(".dark-mode span").click(function () {
		$(this).text(function (i, v) {
			return v === 'dark_mode' ? 'light_mode' : 'dark_mode'
		})
	});



	$(function () {
		$("#menu").metisMenu()
	})


	$(".btn-toggle-menu").click(function () {
		$("body").hasClass("toggled") ? ($("body").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($("body").addClass("toggled"), $(".sidebar-wrapper").hover(function () {
			$("body").addClass("sidebar-hovered")
		}, function () {
			$("body").removeClass("sidebar-hovered")
		}))
	})





	$(function () {
		for (var e = window.location, o = $(".sidebar-wrapper .metismenu li a").filter(function () {
			return this.href == e
		}).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
	}),







		// email 

		$(".email-toggle-btn").on("click", function () {
			$(".email-wrapper").toggleClass("email-toggled")
		}), $(".email-toggle-btn-mobile").on("click", function () {
			$(".email-wrapper").removeClass("email-toggled")
		}), $(".compose-mail-btn").on("click", function () {
			$(".compose-mail-popup").show()
		}), $(".compose-mail-close").on("click", function () {
			$(".compose-mail-popup").hide()
		})


	// chat 

	$(".chat-toggle-btn").on("click", function () {
		$(".chat-wrapper").toggleClass("chat-toggled")
	}), $(".chat-toggle-btn-mobile").on("click", function () {
		$(".chat-wrapper").removeClass("chat-toggled")
	})




	// switcher 

	$("#LightTheme").on("click", function () {
		$("html").attr("data-bs-theme", "light")
	}),

		$("#DarkTheme").on("click", function () {
			$("html").attr("data-bs-theme", "dark")
		}),

		$("#SemiDarkTheme").on("click", function () {
			$("html").attr("data-bs-theme", "semi-dark")
		}),

		$("#MinimalTheme").on("click", function () {
			$("html").attr("data-bs-theme", "minimal-theme")
		})

	$("#ShadowTheme").on("click", function () {
		$("html").attr("data-bs-theme", "shadow-theme")
	})


	$(".dark-mode").click(function () {
		$("html").attr("data-bs-theme", function (i, v) {
			return v === 'dark' ? 'light1' : 'dark';
		})
	})



});

// add products 

// $(document).on("submit", "#add_products", function (e) {
// 	e.preventDefault();
// 	$('.err').html('');
// 	var token = $('meta[name="csrf-token"]').attr('content');
// 	var product_name = $('#product_name').val();
// 	var product_description = $('#product_description').val();
// 	var product_images =$('#product_images')[0].files;
// 	var regular_price = $('#regular_price').val();
// 	var sale_price = $('#sale_price').val();
// 	var stock = $('#stock').val();
// 	var category = $('#AddCategory').val();
// 	var collection = $('#Collection').val();
// 	var tags = $('#Tags').val();
// 	var brands = $('#Brand').val();
// 	var sku = $('#SKU').val();
// 	var form_data = new FormData();
// 	var token = $('meta[name="csrf-token"]').attr('content');
// 	form_data.append('product_name', product_name);
// 	form_data.append('product_description', product_description);

// 	const imgArray = Object.values(product_images);
// 	console.log(imgArray);
// 	console.log(typeof(imgArray));
// 	form_data.append('product_images',imgArray);
// 	form_data.append('regular_price', regular_price);
// 	form_data.append('sale_price', sale_price);
// 	form_data.append('stock', stock);
// 	form_data.append('category', category);
// 	form_data.append('collection', collection);
// 	form_data.append('tags', tags);
// 	form_data.append('brands', brands);
// 	form_data.append('sku', sku);
// 	form_data.append('_token', token);
// 	var path = $('meta[name="base_url"]').attr('content') + '/products';
// 	$.ajax({

// 		url: path,
// 		method: 'POST',
// 		data: form_data,
// 		processData: false,
// 		contentType: false,
// 		processData: false,
// 		success: function (data) {
// 			if (data == "Product added successfully") {
// 				console.log('success');
// 			}
// 			else {
// 				console.log('else');
// 			}
// 		}
// 		, error: function (xhr) {
// 			$('.err').html('');
// 			$.each(xhr.responseJSON.errors, function (key, value) {
// 				$('.' + key).append('<div class="text-danger err">' + value + '</div');

// 			});
// 		},

// 	});

// });