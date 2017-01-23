$(document).ready(function(){
	var baseurl = $("#baseurl").val()+"index.php";
	$("#pleasewait").hide();
	for(var i=1;i<=30;++i){
		$("#"+i).hide();	
	} 
	$("#start_test").on('click',function(e){
		e.preventDefault();
		$("#start").hide();
		for(var i=1;i<=6;i++){
			$("#"+i).fadeIn('slow');
			if($("#6").is(':visible')) {			
				$(".previous#6").hide();
			}
		}
	});
	$(".exit_quiz").on('click',function(e){
		e.preventDefault();
		$("#end_modal").modal();
	});
	$("#graph_open").on('click',function(e){
		e.preventDefault();
		$("#graph").modal();
	});
	$(".exit_yes").on('click',function(e){
		window.location.replace(baseurl+"/main/logged_in");
	});
	$('.next').on('click',function(e){
		e.preventDefault();
		window.scrollTo(0,0);
		var id = $(this).parent().parent().parent().attr('id');
		var current = Number(id);
		var next = ++id;
		var qno = "q_"+current;
		for(var i=(current-6)+1;i<=current;++i){
			$("#"+i).hide();
		}
		try{
			for(var i = (current+1); i<=(current+6);++i ){
				$("#"+i).fadeIn('slow');
			}
		}catch(e){console.log(e);}	
	});
	$('.previous').on('click',function(e){
		window.scrollTo(0,0);
		e.preventDefault();
		var id = $(this).parent().parent().parent().attr('id');
		console.log(id)
		var current = Number(id);
		var start = (current-12)+1;
		var end = (current-6);
		for(var i=(current-6)+1;i<=current;++i){
			$("#"+i).hide();
		}
		try{
			for(var i=start;i<=end;++i){
				$("#"+i).fadeIn('slow');
			}
		}catch(e){console.log(e);}	
	});
	$('[data-toggle="tooltip"]').tooltip(); 
	$('.next').prop('disabled',true);
	$('.submit').prop('disabled',true);
	$('.question').addClass('text-responsive');
  	$(':radio[name^="q_"].section_1').on('change', function(e) {
    	if ($(':radio[name^="q_"].section_1:checked').length == 6) {
      		$(".next.q_6").prop('disabled',false);
    	}
  	}); 
  	$(':radio[name^="q_"].section_2').on('change', function(e) {
    	if ($(':radio[name^="q_"].section_2:checked').length == 6) {
      		$(".next.q_12").prop('disabled',false);
    	}
  	});  
  	$(':radio[name^="q_"].section_3').on('change', function(e) {
    	if ($(':radio[name^="q_"].section_3:checked').length == 6) {
      		$(".next.q_18").prop('disabled',false);
    	}
  	}); 
  	$(':radio[name^="q_"].section_4').on('change', function(e) {
    	if ($(':radio[name^="q_"].section_4:checked').length == 6) {
      		$(".next.q_24").prop('disabled',false);
    	}
  	}); 
  	$(':radio[name^="q_"].section_5').on('change', function(e) {
    	if ($(':radio[name^="q_"].section_5:checked').length == 6) {
      		$(".submit.q_30").prop('disabled',false);
    	}
  	}); 	
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage')*10
    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  });
  $(".submit").on('click',function(e){
  	$("#pleasewait").fadeIn('slow');
  	$("#content-all").hide();
  });
});