$('.quick-view').click(function(event) {
	var id = $(this).data('id');
	$.ajax({
		url: 'http://localhost/projectbkap/product/quick-view',
		type: 'GET',
		data: {id: id},
		success:function(items){
			var pro = $.parseJSON(items);
			$.each(pro, function(index, val) {
				$('a.simpleLens-lens-image').attr('data-lens-image',val.product_image);
				$('a.simpleLens-lens-image img').attr('src',val.product_image);
				$('h3.quick-view-title').html(val.product_name);
				$('span.aa-product-view-price').html('$'+val.price);
				$('p.quick-view-desc').html(val.description);
				$('p.aa-prod-category a').html(val.cat);
				// alert(val.color);
				if(val.color.length){
					var colorhtml = '';
					for(var i = 0; i < val.color.length; i++){
						colorhtml += '<a>'+val.color[i]+'</a>';
					}
				}
				$('div.quick-view-color').html(colorhtml);

				if (val.size.length) {
					var sizehtml = '';
					for (var i = 0; i < val.size.length; i++) {
						sizehtml += '<a>'+val.size[i]+'</a>';
					}
				}
				$('div.quick-view-size').html(sizehtml);
				$('a.aa-add-to-cart-btn').attr('href','/projectbkap/product/detail?id='+val.product_id);
				$('a.aa-add-to-cart-btn#hehe').attr('href','javascript:void(0)');
			});
			// console.log(items);	
		}
	})
	
	
});


