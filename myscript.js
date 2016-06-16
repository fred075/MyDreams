$(function(){
	


	$('.pendingWithdraw.label').each(function() {

		if($(this).data('value') > 100) {
			$( this ).removeClass().addClass('label').addClass('label-danger');	
		}
		else if($(this).data('value') > 50) {
			$( this ).removeClass().addClass('label').addClass('label-warning');	
		}

		
	});



})

	function alertRestore(id) {
		$id = id;
		$("#page-wrapper").prepend('<div class="alert alert-warning" role="alert">Goals has been removed. <a href="dreams.php?restore=1&id='+$id+'">Cancel</a></div>');
	}