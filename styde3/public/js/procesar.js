$(function(){

	$('#form1').submit(function(){

		$.ajax({

			type:'post',
			dataType:'json',
			url:$(this).attr('action'),
			data:$(this).serialize(),
			success:mensaje
		})
		return false;
	});

	function mensaje(data) {
		$('#mensaje').html(data);
	}
});