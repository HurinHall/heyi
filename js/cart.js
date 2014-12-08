// JavaScript Document
$(document).ready(function(){
	$(".checkall").attr("checked",false);	
	$('.tb').attr('readonly',false);
	var num=1;
	var num1=1;
	var num2=1;
	var num3=1;
	$('.tb').attr('value',"   "+num);
						   
	$(".check1").click(function(){
		if(this.checked){
		  $(".c1").css("border-color","#990000");
		}
		else{
		  $(".c1").css("border-color","#999999");
		}
  	})
	
	
	$(".check2").click(function(){
		if(this.checked){
		  $(".c2").css("border-color","#990000");
		}
		else{
		  $(".c2").css("border-color","#999999");
		}
  	})
	
		$(".check3").click(function(){
		if(this.checked){
		  $(".c3").css("border-color","#990000");
		}
		else{
		  $(".c3").css("border-color","#999999");
		}
  	})
	
	$(".check").click(function(){
		if(this.checked){
		  $(".check1").attr("checked","true");
		  $(".check2").attr("checked","true");
		  $(".check3").attr("checked","true");
		  
		$(".c1").css("border-color","#990000");
		$(".c2").css("border-color","#990000");
		$(".c3").css("border-color","#990000");
		
		
		}
		else{
		  $(".check1").attr("checked","");
		  $(".check2").attr("checked","");
		  $(".check3").attr("checked","");
		  
		 $(".c1").css("border-color","#999999");
		$(".c2").css("border-color","#999999");
		$(".c3").css("border-color","#999999");
		}
		
  	})
	
	
	
	$(".min1").click(function(){
		if(num1>0){
		  num1--;
		  if(num1>9)
		  $('.tb1').attr('value',"  "+num1);
		  else
		  $('.tb1').attr('value',"   "+num1);
		}	  
  	})
	$(".min2").click(function(){
		if(num2>0){
		  num2--;
		  if(num2>9)
		  $('.tb2').attr('value',"  "+num2);
		  else
		  $('.tb2').attr('value',"   "+num2);
		}	  
  	})
	$(".min3").click(function(){
		if(num3>0){
		  num3--;
		   if(num3>9)
		  $('.tb3').attr('value',"  "+num3);
		  else
		  $('.tb3').attr('value',"   "+num3);
		}	  
  	})
	
	$(".plus1").click(function(){
		  num1++;
		  if(num1>9)
		  $('.tb1').attr('value',"  "+num1);
		  else
		  $('.tb1').attr('value',"   "+num1);
  	})
	
	$(".plus2").click(function(){
		  num2++;
		  if(num2>9)
		  $('.tb2').attr('value',"  "+num2);
		  else
		  $('.tb2').attr('value',"   "+num2);
  	})
	
	$(".plus3").click(function(){
		  num3++;
		  if(num3>9)
		  $('.tb3').attr('value',"  "+num3);
		  else
		  $('.tb3').attr('value',"   "+num3);
  	})
	
	
	
	});