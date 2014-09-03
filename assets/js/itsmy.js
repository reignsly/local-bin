$(document).ready(function() {
	    $('.navbar-nav [data-toggle="tooltip"]').tooltip();
	    $('.navbar-twitch-toggle').on('click', function(event) {
	        event.preventDefault();
	        $('.navbar-twitch').toggleClass('open');
	    });
	    
	    $('.nav-style-toggle').on('click', function(event) {
	        event.preventDefault();
	        var $current = $('.nav-style-toggle.disabled');
	        $(this).addClass('disabled');
	        $current.removeClass('disabled');
	        $('.navbar-twitch').removeClass('navbar-'+$current.data('type'));
	        $('.navbar-twitch').addClass('navbar-'+$(this).data('type'));
	    });
	});


/* BOOTSTRAP MODAL */
function custom_modal(title, html)
{
	
	$('#alertModal_Body').html(''); 
	$('#alertModal_Label').text(title); //SET MODAL TITLE
	$('#alertModal_Body').html(html); //SET MODAL CONTENT
	$('#alertModal').modal('show'); //SHOW MODAL
}