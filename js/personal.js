// JavaScript Document
$(document).ready(function(){


	
	$(".content1").hide()
	$(".content2").hide()
	$(".content3").hide()
	

		$(".bar1").click(function(){
			$(".content1").show()
			$(".content2").hide()
			$(".content3").hide()

  		})
		
		$(".bar2").click(function(){
			$(".content2").show()
			$(".content1").hide()
			$(".content3").hide()
			
  		})
	
		$(".bar3").click(function(){
			$(".content3").show()
			$(".content2").hide()
			$(".content1").hide()
			
  		})		
	
	});