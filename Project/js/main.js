$(".btn").click(function(e){
	e.preventDefault();
	var email = $('#email').val();
	
	if(email =="") {
		alert('Email address is required');
		$("#email").focus();
	}
	else if (email != "") {
		var email = $('#email').val();
		var testEmail =  /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if (testEmail.test(email)){
			if (email.indexOf('.co', email.length - '.co'.length) != -1){
				alert('We are not accepting subscriptions from Colombia');
			}
			else if ($('#checkterms').is(':checked') == false) {
				alert('You must accept the terms and conditions');
			}
			else{
				// $(location).attr('href', 'thanks_page.html')
			}
		}
		else{
			alert('Please provide a valid e-mail address');

		}
	}
});

function submitForm(){
	console.log('sfds');
    $('my_form').submit();
}