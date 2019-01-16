// JavaScript Document


    function hide(id,id2) {	
	     document.getElementById(id2).style.display='inherit';
	     document.getElementById(id).style.display='none';
}



    function hide2(id,id2,id3,id4) {		
	     document.getElementById(id).style.display='inherit';
	     document.getElementById(id2).style.display='none';
	     document.getElementById(id3).style.display='none';
	     document.getElementById(id4).style.display='none';
}

function data(){
	var array2=[],a=[],b=[],prev;
	array2=document.getElementById('text_got').innerHTML;

window.alert(array2); 
var array=	array2.split(",");
window.alert(array); 

array.sort();

    for ( var i =0; i < array.length; i++ ) {
        if ( array[i] !== prev ) {

           a.push(array[i]);
            b.push(1);
        } else {
            b[b.length-1]++;
        }
        prev = array[i];
    			}



	var txt="";

		for(i=0;i<a.length;i++){
				txt=txt+""+a[i]+" OR id=";
				}
				txt=txt+"0";

window.alert(txt);	
	
	$.post('info2.php',{reg_no:txt,quants:b},function(data){
	$("#order_area").html(data);
	});
	
  
  
  
  
  
  
  
	  var t=document.getElementById('address_box').innerHTML;
if(t!=="<center>No Address Registred....Kindly add new Address</center>"){
	hide('text_area2','text_area3');
	}else{
	window.alert("Please add new address");

	}





	}

function info(){
var data_mobile=document.getElementById('mobile').value;

if(data_mobile===""||data_mobile===null){
	window.alert("Please Enter Mobile no");
	}else{
		
hide('text_area1','text_area2');
$.post('info.php',{reg_no:data_mobile},function(data){
$("#address_box").html(data);

});
	}}
function putdata(){

//$.post('info3.php',{mobile:data_mobile,reg_no:txt,quants:b},function(data){
//$("#txt_area4").html(data);
//});
	
	document.getElementById('txt_area4').innerHTML="<center><h1><br>Thank You <br>You will Recive your order soon</h1></center>";
	
	}