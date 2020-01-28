 $(function() {
				/**
				* the element
				*/
				var $ui 			= $('#field');

				var $button__search 	= $('#button__search');
				var $button__clear 		= $('#button__clear');				
				

				$('#name_task').keypress(function(event){
	
					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						get_data($('#name_task').val());		
					}

				});

				$ui.find('.input_header').bind('focus click',function(){
					
					$ui.find('.filter').css('left', $('#input_header').position().left + 10);

					$ui.find('.filter')
					   .show();					

				});				

				$button__clear.click(function(){

					get_data();
					$('#name_task').val("");

				});


				$button__search.click(function(){

					get_data($('#name_task').val());				

				});
				

				/**
				* on mouse leave hide the dropdown, 
				* and change the arrow image
				*/

				$ui.bind('mouseenter',function(){
					$ui.find('.filter').css('left', $('#input_header').position().left + 10);

					$ui.find('.filter')
					   .show();					

				});

				$ui.bind('mouseleave',function(){
					$ui.find('.filter')
					   .hide();
				});
				
				/**
				* selecting all checkboxes
				*/
			

});

 function get_data(data){

 	$.ajax({

						method: 'POST',
						url: "ajaxModule",
						data:{
							data : data
						},
						success: function(response){

							var str = "";

							$.each(response, function(index, value){

								str = str + '<div class="task">' + value + '</div>';

							});

							$('#tasks').html(str);

							$('#filter').hide();

						},
						error: function(){
							alert('error');
						}

					});
 }