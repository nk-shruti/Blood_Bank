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
	$('#name').html(json.name);
	$('#department').html(json.department);
	$('#college').html(json.college);
	$('#intent').html(json.intent);
	$('#phoneNo').html(json.phoneNo);
	$('#email').html(json.email);
	$('#passport').html(json.passport);
	$('#abroad').html(json.abroad);
	$('#consent').html(json.consent);
	$('#userModal').modal('show');
}
