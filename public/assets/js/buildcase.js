$(function(){
	$(document).on('click', '.list-group-item', function(){
		var cellphonename = $(this).prop('id');
		$('.list-group-item').each(function( i ) {
			var id2 = $(this).prop('id');
			if(cellphonename == id2)
			{
				$(this).attr('class','list-group-item active');
				
				$(".celular img").fadeTo('normal', 0.30, function() {
      				$(this).prop('src','assets/images/celulares/' + cellphonename + '.jpg');
  				}).fadeTo(500, 1);
			}
			else
			{
				$(this).attr('class','list-group-item');
			}
		});
	});
});