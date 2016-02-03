// JavaScript Document
// JavaScript Document
jQuery(document).ready(function($)
{
	$('#compound-form').submit(function(e)
	{
		e.preventDefault();
		//Serialize Form
		var calcData = $('#compound-form').serialize();
		
		
		//submit form
		$.ajax({
			type:'post',
			url: $('#compound-form').attr('action'),
			data: calcData
		}).done(function(response)
		{
			//if Success
			
			
			//Set Message Text
			$('#compound-form-msg').text(response);
			//clear fields
			
			
				
		}).fail(function(data)
		{
			//iff error

			if(data.responseText !== '')
			{
				//Set Message Text
			$('#compound-form-msg').text(data.responseText);
			}
			else 
			{
					$('#compound-form-msg').text('Could Not Make Calculation');
			}
			
			
		});
		
	});
});