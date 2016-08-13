$(document).ready(function(){

	$('#user_list > tbody > tr').css('cursor','pointer');

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

	$('#user_list > tbody > tr').click(function(){

		var id = this.id;

		$.ajax({ 
			  method: "GET",
			  url: base_url+"/userView",
			  data: { id :id }
		}).done(function( msg ) {
			    
			    modalInject($.parseJSON(msg));
			       
		});
            
    
    });          

                         
});
 


function modalInject(json)
{   
	
	$('#id').html(json.id);
	$('#name').html(json.Username);
	$('#bloodgroup').html(json.BloodGroup);
	$('#lastdonated').html(json.LastDonated);
	$('#contact').html(json.Contact);
	$('#address').html(json.Address);
	$('#userModal').modal('show');
}
