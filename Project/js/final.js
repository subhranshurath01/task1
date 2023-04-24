

$('#photo').bind('change', function() {
  if(this.files[0].size > 4194304){
    alert("File size should be less than 4 MB");
    this.value = "";
  };
});
$('#hscm').bind('change', function() {
  if(this.files[0].size > 4194304){
    alert("File size should be less than 4 MB");
    this.value = "";
  };
});

function finalSubmit(){
    var pic=document.getElementById('photo');
      if(pic.value == ''){
        alert('Select your photo.');
        return false;
      }

    var hscpic=document.getElementById('hscm');
      if(hscpic.value == ''){
        alert('Select your hsc mark sheet.');
        return false;
      }
      var sscm=document.getElementById('sscm');
      if(sscm.value ==''){
        alert('Select your ssc mark sheet.');
        return false;
      }
      var allsem=document.getElementById('allsem');
      if(allsem.value=='')
      {
        alert('select all sem marksheet.');
        return false;
      }
}