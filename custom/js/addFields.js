$(window).load(function(){
	$(".yui-nav").prepend('<li><a id="jm_fields" href="javascript:void(0)" onclick="findJoomla(this);"><em>GProConneXt Info</em></a></li>');
	$("#jm_fields").trigger("click");
		
	$( "#tab0" ).click(function() {
  		$("#tabcontent3jm").addClass('yui-hidden');
  		$(".yui-nav li").first().removeClass('selected');
	});

	$( "#tab1" ).click(function() {
  		$("#tabcontent3jm").addClass('yui-hidden');
  		$(".yui-nav li").first().removeClass('selected');
	});

	$( "#tab2" ).click(function() {
  		$("#tabcontent3jm").addClass('yui-hidden');
  		$(".yui-nav li").first().removeClass('selected');
	});
	
	//to highlight fields
	var url = window.location.href;
	if(url.includes("DetailView")){ //alert('here');
		$("td[field='pastoral_journey_c']").css('font-weight','Bold');
                $("td[field='pastoral_journey_c']").css('color','#0b578f');
	}

	//set default open some sub panels
	$("#show_link_eciu_crm_training_goals_contacts > a, #show_link_eciu_crm_training_actuals_contacts > a, #show_link_eciu_crm_resources_user_actions_contacts > a").trigger('click');

	$("#hide_link_activities").after(" Tasks / "); //for rename Activity label
	$("#hide_link_history").after(" Notes / "); //for rename History label
});


function findJoomla(element){
	//remove higlight form existing
	$('.yui-nav > li').removeClass('selected');
	$('.yui-nav > li').removeAttr('title');

	//highlighted active link
	$(element).parent().addClass('selected');

	var arr = $('.yui-content > div').addClass("yui-hidden");

	if ($('.yui-content > div#tabcontent3jm').length == 0){
		//debugger;
		var email = $("td[field='email1'] table td a:first").text();
		if(email){
			$.ajax({
	            url : 'get_joomla_fields.php',
	            type : 'POST',
	            data :
	            {
	                email: email
	            },
	            success : function(data){ //alert(data);
			$(".yui-content").append(data);
	            }
	  		});
		}

	}else{
		$("#tabcontent3jm").removeClass('yui-hidden');
	}
}
