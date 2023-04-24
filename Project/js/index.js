function validateform2(){
    // For hsc institution name Validation
    var name=document.getElementById('hscname');
    if(name.value ==''){
        alert('Please enter your hsc institution name.');
        name.focus();
        return false;
    }
    //select hsc board 
    var board = document.getElementById('hscboard');
    if(board.value == ''){
        alert('Please select hsc your board.');
        return false;
    }
    //percentage validation hsc
    var perc = document.getElementById('hscperc');
	if(perc.value == ''){
		alert('Please enter your hsc percentage.');	
		perc.focus();
		return false;
	}
     // For ssc institution name Validation
     var name=document.getElementById('sscname');
     if(name.value ==''){
         alert('Please enter your ssc institution name.');
         name.focus();
         return false;
     }
      //select ssc board 
    var board = document.getElementById('sscboard');
    if(board.value == ''){
        alert('Please select ssc your board.');
        return false;
    }
    //percentage validation ssc
    var perc = document.getElementById('sscperc');
	if(perc.value == ''){
		alert('Please enter your ssc percentage.');	
		perc.focus();
		return false;
	}
    // For currentpersuing Validation
    var name=document.getElementById('cname');
    if(name.value ==''){
        alert('Please enter your current course name.');
        name.focus();
        return false;
    }
    // For current institution Validation
    var name=document.getElementById('cename');
    if(name.value ==''){
        alert('Please enter your current institution name.');
        name.focus();
        return false;
    }
    //percentage validation current
    var perc = document.getElementById('cperc');
	if(perc.value == ''){
		alert('Please enter your overall percentage.');	
		perc.focus();
		return false;
	}
    //backlogs validation
    var perc = document.getElementById('backlog');
	if(perc.value == ''){
		alert('Please enter no of backlogs otherwise enter 0.');	
		perc.focus();
		return false;
	}
}
//it validate Percentage
function validateperc(e){
	var ac = e.keyCode;
	if(!(ac == 127 || ac == 8) && (ac<48 || ac>57)){
		return false;	
	}else{
		return true;	
	}
    }