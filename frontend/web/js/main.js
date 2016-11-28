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

						colorhtml += '<input type="radio" name="color" id="'+val.color[i]+'">'+val.color[i]+'<br/>';
					}
				}
				$('div.quick-view-color').html(colorhtml);

				if (val.size.length) {
					var sizehtml = '';
					for (var i = 0; i < val.size.length; i++) {
						sizehtml += '<input type="radio" name="size" id="'+val.size[i]+'">'+val.size[i]+'<br/>';
					}
				}
				$('div.quick-view-size').html(sizehtml);
				$('a.aa-add-to-cart-btn').attr('href','/projectbkap/product/detail?id='+val.product_id);
				$('#hehe').attr('href','javascript:void(0)');
				$('#hehe').attr('data-id',val.product_id);
				$('#qty').val(1);
			});
			// console.log(items);	
		}
	})
	
	
});


