function validateForm(){
    // For name Validation
    var name=document.getElementById('name');
    if(name.value ==''){
        alert('Please enter your name.');
        name.focus();
        return false;
    }
    if(name.value.length <3){
        alert('Your name should be min 3 character.')
        name.focus();
        return false;
    }
    //For Dob Validation
    var dob=document.getElementById('dob');
    var currentDate = new Date();
    var givenDate = new Date(dob.value);
        if(dob.value ==''){
         alert('Please enter your dob');
        dob.focus();
         return false;
    }
    if (givenDate > currentDate) {
    alert('Date of birth cant be future date')
    dob.focus();
    return false;
    }
    //For Email validation
    var email = document.getElementById('email');
	if(email.value == ''){
		alert('Please enter your emailid.');
		email.focus();
		return false;
	}
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
	if(emailPattern.test(email.value) == false)
	{
		alert('Invalid email id');
		email.focus();
		return false;
	}
    //father name Validation 
    var fname=document.getElementById('ffname');
    if(fname.value ==''){
        alert('Please enter your father name.');
        fname.focus();
        return false;
    }
    if(fname.value.length <3){
        alert('Father first name should be min 3 character.')
        fname.focus();
        return false;
    }
    //mother name validation
    var mname=document.getElementById('mfname');
    if(mname.value ==''){
        alert('Please enter your mother name.');
        mname.focus();
        return false;
    }
    if(mname.value.length <3){
        alert('Mother first name should be min 3 character.')
        mname.focus();
        return false;
    }
    //Gender Validation
    var male = document.frmuser.gender[0];
	var female = document.frmuser.gender[1];
	if(male.checked == false && female.checked == false){
		alert('Please select gender.');
		return false;
	}
    //Nationality validation
    var nation=document.getElementById('national');
    if(nation.value ==''){
        alert('Please enter your nationality.');
        nation.focus();
        return false;
    }
    //select country 
      var state = document.getElementById('country');
      if(state.value == ''){
          alert('Please select your country.');
          return false;
      }
    //cell no validation
    var cno = document.getElementById('cno');
	
	if(cno.value == ''){
		alert('Please enter your contact no.');	
		cno.focus();
		return false;
	}
	if(cno.value.length < 10){
		alert('Contact no should be 10 digit.');	
		cno.focus();
		return false;
	}
}
    //it validate for the contact no
   function validateCno(e){
	var ac = e.keyCode;
	if(!(ac == 127 || ac == 8) && (ac<48 || ac>57)){
		return false;	
	}else{
		return true;	
	}
    }