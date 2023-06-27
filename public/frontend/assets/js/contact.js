
$(".svebtn").click(function() {

	var err = true;
	var input = $("#first_name");
	var urlvl = $("#first_name").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#nmb").remove();
		$('<label id="nmb" class="text-danger" >First Name is required</label>').insertAfter("#first_name");
		$("#first_name").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#nmb").remove();
	}

	var input = $("#last_name");
	var urlvl = $("#last_name").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#lnm").remove();
		$('<label id="lnm" class="text-danger" >Last Name is required</label>').insertAfter("#last_name");
		$("#last_name").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#lnm").remove();
	}

	var input = $("#email");
	var urlvl = $("#email").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#ulrn").remove();
		$('<label id="ulrn" class="text-danger" >Email Address is required</label>').insertAfter("#email");
		$("#email").focus();
		err = false;
	} else {

		if (urlvl!=''){
			if(isValidEmailAddress(urlvl)) {
				input.removeClass("invalid").addClass("valid");
				$("#ulrn").remove();
			} else {
				input.removeClass("valid").addClass("invalid");
				$('#ulrn').remove();
				$('<label id="ulrn" class="text-danger">Invalid Email Id!</label>').insertAfter('#email');
				$("#email").focus();
				err=false;
			}
		} else {
			
			input.removeClass("valid").addClass("invalid");
			$("#ulrn").remove();
			$('<label id="ulrn" class="text-danger" >Email Address is required</label>').insertAfter("#email");
			$("#email").focus();
			err = false;
		}
	}

	var input = $("#phone_contact");
	var urlvl = $("#phone_contact").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#phn").remove();
		$('<label id="phn" class="text-danger" >Phone Number is required</label>').insertAfter("#phone_contact");
		$("#phone_contact").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#phn").remove();
	}

	var input = $("#city");
	var urlvl = $("#city").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#cty").remove();
		$('<label id="cty" class="text-danger" >City is required</label>').insertAfter("#city");
		$("#city").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#cty").remove();
	}

	var input = $("#statename");
	var urlvl = $("#statename").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#stnm").remove();
		$('<label id="stnm" class="text-danger" >State is required</label>').insertAfter("#statename");
		$("#statename").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#stnm").remove();
	}

	/*
	var v = grecaptcha.getResponse();
	if(v.length == 0)
	{
		$("#cprn").remove();
		$('<div id="cprn" class="text-danger" >Recaptcha is required</div>').insertAfter(".rcpt");
		$(".rcpt").focus();
		err = false;
	}
	*/

	if(err == true) {
		$(".svebtns").attr("disabled", true);
		document.forms["contact-form"].submit();
		return true;
	}
});


$("#first_name").on("keyup", function(event) {
	var input = $("#first_name");
	var urlvl = $("#first_name").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#nmb").remove();
		$('<label id="nmb" class="text-danger" >First Name is required</label>').insertAfter("#first_name");
		$("#first_name").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#nmb").remove();
	}
});

$("#last_name").on("keyup", function(event) {
	var input = $("#last_name");
	var urlvl = $("#last_name").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#lnm").remove();
		$('<label id="lnm" class="text-danger" >Last Name is required</label>').insertAfter("#last_name");
		$("#last_name").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#lnm").remove();
	}
});

$("#phone_contact").on("keyup", function(event) {
	var input = $("#phone_contact");
	var urlvl = $("#phone_contact").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#phn").remove();
		$('<label id="phn" class="text-danger" >Phone Number is required</label>').insertAfter("#phone_contact");
		$("#phone_contact").focus();
		err = false;
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#phn").remove();
	}
});

$("#city").on("keyup", function(event) {
	var input = $("#city");
	var urlvl = $("#city").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#cty").remove();
		$('<label id="cty" class="text-danger" >City is required</label>').insertAfter("#city");
		$("#city").focus();
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#cty").remove();
	}
});

$("#statename").on("change", function(event) {
	var input = $("#statename");
	var urlvl = $("#statename").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#stnm").remove();
		$('<label id="stnm" class="text-danger" >State is required</label>').insertAfter("#statename");
		$("#statename").focus();
	} else {
		input.removeClass("invalid").addClass("valid");
		$("#stnm").remove();
	}
});

$("#email").on("keyup", function(event) {
	var input = $("#email");
	var urlvl = $("#email").val();
	if(urlvl==''){
		input.removeClass("valid").addClass("invalid");
		$("#ulrn").remove();
		$('<label id="ulrn" class="text-danger" >Email Address is required</label>').insertAfter("#email");
		$("#email").focus();
	} else {
		if (urlvl!=''){
			if(isValidEmailAddress(urlvl)) {
				input.removeClass("invalid").addClass("valid");
				$("#ulrn").remove();
			} else {
				input.removeClass("valid").addClass("invalid");
				$('#ulrn').remove();
				$('<label id="ulrn" class="text-danger">Invalid Email Id!</label>').insertAfter('#email');
				$("#email").focus();
			}
		} else {
			input.removeClass("valid").addClass("invalid");
			$("#ulrn").remove();
			$('<label id="ulrn" class="text-danger" >Email Address is required</label>').insertAfter("#email");
			$("#email").focus();
		}
	}
});

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}