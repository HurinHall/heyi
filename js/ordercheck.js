// JavaScript Document
$(document).ready(function(){
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
	
		
		$(".radio1").click(function(){
		  $(".old_left").css("background-color","#890018");
		  $(".old_right").css("background-color","#890018");
		  $(".new_left").css("background-color","#CCCCCC");
		  $(".new_right").css("background-color","#CCCCCC");
		  })
		
		
		  
		$(".radio2").click(function(){
		  $(".old_left").css("background-color","#CCCCCC");
		  $(".old_right").css("background-color","#CCCCCC");
		  $(".new_left").css("background-color","#890018");
		  $(".new_right").css("background-color","#890018");

  	})
	
	
	
	
	});