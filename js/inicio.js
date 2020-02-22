var url = 'http://localhost/deunapp-2/public';
window.addEventListener("load", function(){
	
	$('.btn-like').css('cursor','pointer');
	$('.btn-dislike').css('cursor','pointer');

 //Like
	$(document).on("click", ".btn-like", function(e){
		$(this).addClass('btn-dislike').removeClass('btn-like');
		$(this).attr('src', 'img/rojo.png');

		$.ajax({
			url: url+'/like/'+$(this).data('id'),
			type: 'GET',
			success: function(response){
				if (response.like) {
					console.log('Has dado like a la empresa');
				}else
				console.log('Error al dar like');
			}
		});
	});

//Dislike
	$(document).on("click", ".btn-dislike", function(e){
		$(this).addClass('btn-like').removeClass('btn-dislike');
		$(this).attr('src', 'img/sinrojo.png');

		$.ajax({
			url: url+'/dislike/'+$(this).data('id'),
			type: 'GET',
			success: function(response){
				if (response.like) {
					console.log('Has dado dislike a la empresa');
				}else
				console.log('Error al dar dislike');
			}
		});
	});
});