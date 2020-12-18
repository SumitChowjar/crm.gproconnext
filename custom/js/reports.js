$(window).load(function() {
	$("#MassAssign_SecurityGroups").remove();
});

var report_html = '<div class="moduleTitle"><h2><span>Custom Reports</span></h2></div>';
report_html += '<table cellpadding="0" cellspacing="0" width="100%" border="0" class="list view table">';
report_html += '<thead><tr height="20">';
report_html += '<td width="1%" class="td_alt">&nbsp;</td>';
report_html += '<th scope="col" data-toggle="true"><div style="white-space: normal;" width="100%" align="left"><a href="javascript::void(0)" class="listViewThLinkS1">Name &nbsp;&nbsp;</a></div></th>';
report_html += '<th scope="col" data-hide="phone"><div style="white-space: normal;" width="100%" align="left"><a href="javascript:void(0)" class="listViewThLinkS1">Report Module &nbsp;&nbsp;</a></div></th>';
report_html += '</tr></thead>';
report_html += '<tbody>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0);" onclick="myReport(this);">Training Actuals Report</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Training Actuals<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0);" onclick="country(this);">Contacts Per Country</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Contacts<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0);" onclick="countriesReported(this);">Countries Where Training Reported</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Contacts<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0);" onclick="countriesNotReported(this);">Countries Where Training Not Reported</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Contacts<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0)" onclick="goalsReport(this);">Trainers Who Submitted Goals First Time</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Training Goals<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0)" onclick="callsReport(this);">Calls Activities Summary Report</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Activities<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0)" onclick="meetingsReport(this);">Meetings Activities Summary Report</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Activities<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0)" onclick="tasksReport(this);">Tasks Activities Summary Report</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Activities<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0)" onclick="emailsReport(this);">Emails Summary Report</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Emails<div class="inlineEditIcon"></div></td></tr>';
report_html += '<tr height="20" class="oddListRowS1"><td width="1%" class="nowrap"> &nbsp; </td><td scope="row" align="left" valign="top" type="name" field="name" class="inlineEdit"><b><a href="javascript::void(0)" onclick="duplicatesReported(this);">Duplicate Accounts Report</a><div class="inlineEditIcon"></div></b></td><td align="left" valign="top" type="enum" field="report_module" class="inlineEdit">Contacts<div class="inlineEditIcon"></div></td></tr>';

report_html += '</tbody></table>';


$(report_html).insertAfter(".listViewBody");

function myReport(element){

	$("#content").hide();
     	
     	var str = '<div id="custom_content">';
		str += '<table id="custom_report"><tbody><tr><td>';
		str += '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back">';
		str += '<div class="moduleTitle"><h2> Training Actuals Report </h2><div class="clear"></div></div>';
		str += '<div class="edit view search basic" style=>';
		str += '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
		str += '<tbody><tr>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="start_date">Start Date</label></td>';
		str += '<td nowrap="nowrap" width="1%"><input class="datepicker" name="start_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="end_date"> End Date</label></td><td nowrap="nowrap" width="1%"><input class="datepicker" name="end_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td class="sumbitButtons"><input tabindex="2" title="Submit" onclick="report();" class="button" type="button" value="Submit"><input id="exp_csv" tabindex="2" title="CSV" onclick="csv();" class="button" type="button" value="Export CSV" style="display:none;"></td>';
		str += '</tr></tbody>';
		str += '</table>';
		str += '</div>';
		str += '<div id="report-data"></div>';
		str += '</td></tr></tbody></table>';
		str += '</div>';
		$("#content").after(str);
		setformat();
}

function setformat(){
	  $('.datepicker').datepicker({
            dateFormat: 'mm/dd/yy',
            changeMonth: true,
            changeYear: true,

      });
}


function goBack(){
	window.location.href = $(location).attr('href');
}



function report(){
	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		$.ajax({
	            url : 'evaluate_report.php',
	            type : 'POST',
	            data :
	            {
	                'start_date': start_date,
	                'end_date': end_date
	            },
	            success : function(data){
					if(data == 0){
						$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#report-data").html(data);
						$("#exp_csv").show();
					}
	            }
	  	});
	}else{
		$("#report-data").html('');
	}
}

function csv(){
    var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		window.location.href = "report_csv.php?date=" + start_date + "&date2=" + end_date ; 
		
	}
}

  function myLinkButtonClick()
{
    $("#FIELDS").toggle();
}



function country(element){
	    $.ajax({
	         url : 'country_report.php',
	         success : function(data){
	            	$("#content").hide();
	            	$("#content").after(data);
	         }
	    });
    }


    function countryName(element){

	var country = $("#country_id").val();
	    $.ajax({
	         url : 'country_report.php',
	         type : 'POST',
	         data :
	         {
	         	'country': country

	         },
	         success : function(data){
	         	if(data == 0){
	         		$("#detailpanel_report").html('<h4> No Records Found. </h4>');
	         	}else{
	         		$("#custom_content").remove();
	            	    $("#content").after(data);
	         	}
						
	            	
	         }
	    });
    }

function countryCsv(element){
	window.location.href = 'country_report_csv.php'

    }


    function sort_Training_Actuals_Report(columnName){
	if(columnName == 'first_name'){
		var sort = $("#first_name_sort").val();
	}
	else if(columnName == 'last_name'){
		var sort = $("#last_name_sort").val();
	}else{
		var sort = $("#number_of_pastors_sort").val();
	}
	
	if(sort == 'ASC'){
		var sort_key = "DESC";
		$("#first_name_sort").val('DESC');
		$("#last_name_sort").val('DESC');
		$("#number_of_pastors_sort").val('DESC');
	}else{
		var sort_key = "ASC";
		$("#first_name_sort").val('ASC');
		$("#last_name_sort").val('ASC');
		$("#number_of_pastors_sort").val('ASC');
	}

	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
    $.ajax({
	    url: 'evaluate_report.php',
	    type: 'POST',
	    data:{
	    	column_name:columnName,
	    	sort:sort_key,
	    	start_date: start_date,
	    	end_date: end_date
	    },
    	success: function(data){
 	    	$("#report-data").html(data);
			$("#exp_csv").show();
  		}
 });

}


function sort_Countries_Report(columnName){
	if(columnName == 'COUNT(first_name)'){
		var sort = $("#contacts_name_sort").val();
	}
	else{
		var sort = $("#country_name_sort").val();
	}

	if(sort == 'ASC'){
		var sort_key = "DESC";
		$("#contacts_name_sort").val('DESC');
		$("#country_name_sort").val('DESC');
	}else{
		var sort_key = "ASC";
		$("#contacts_name_sort").val('ASC');
		$("#country_name_sort").val('ASC');
	}

    $.ajax({
	    url: 'country_report.php',
	    type: 'POST',
	    data:{
	    	column_name:columnName,
	    	sort:sort_key,
	    },
    	success: function(data){ //alert(data);
 	    	$("#content").hide();
 	    	$("#custom_content").remove();
	        $("#content").after(data);
  		}
 });

}


function countriesReported(element){
	
	    $.ajax({
	         url : 'country_training_reported.php',
	         success : function(data){
	            	$("#content").hide();
	            	$("#content").after(data);
	         }
	    });
    }


function training_reported_countryCsv(element){
	window.location.href = 'training_reported_country_csv.php'; 
}

function sort_Countries_Training_Report(columnName){

	if(columnName == 'COUNT(first_name)'){
		var sort = $("#contacts_name_sort").val();
	}
	else if(columnName == 'no_of_training'){
		var sort = $("#training_sort").val();
	}
	else if(columnName == 'no_of_trained_pastors'){
		var sort = $("#trained_pastors_sort").val();
	}
	else{
		var sort = $("#country_name_sort").val();
	}

	if(sort == 'ASC'){
		var sort_key = "DESC";
		$("#contacts_name_sort").val('DESC');
		$("#country_name_sort").val('DESC');
	}else{
		var sort_key = "ASC";
		$("#contacts_name_sort").val('ASC');
		$("#country_name_sort").val('ASC');
	}

    $.ajax({
	    url: 'country_training_reported.php',
	    type: 'POST',
	    data:{
	    	column_name: columnName,
	    	sort: sort_key,
	    },
    	success: function(data){ 
 	    	$("#content").hide();
 	    	$("#custom_content").remove();
	        $("#content").after(data);
  		}
 });

}


function countriesNotReported(element){
	    $.ajax({
	         url : 'country_training_not_reported.php',
	         success : function(data){
	            	$("#content").hide();
	            	$("#content").after(data);
	         }
	    });
    }

function sortByCountryName(){

	var sort = $("#country_name_sort").val();

	if(sort == 'ASC'){
		var sort_key = "DESC";
		$("#country_name_sort").val('DESC');
	}else{
		var sort_key = "ASC";
		$("#country_name_sort").val('ASC');
	}

    $.ajax({
	    url: 'country_training_not_reported.php',
	    type: 'POST',
	    data:{
	    	sort: sort_key,
	    },
    	success: function(data){ 
 	    	$("#content").hide();
 	    	$("#custom_content").remove();
	        $("#content").after(data);
  		}
 });

}


function countryWithoutActualsCsv(){
	window.location.href = 'country_training_not_reported.php?type=csv';
}

function goalsReport(element){

	$("#content").hide();
     	
     	var str = '<div id="custom_content">';
		str += '<table id="custom_report"><tbody><tr><td>';
		str += '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back">';
		str += '<div class="moduleTitle"><h2> Trainers Who Submitted Goals First Time </h2><div class="clear"></div></div>';
		str += '<div class="edit view search basic" style=>';
		str += '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
		str += '<tbody><tr>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="start_date">Start Date</label></td>';
		str += '<td nowrap="nowrap" width="1%"><input class="datepicker" name="start_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="end_date"> End Date</label></td><td nowrap="nowrap" width="1%"><input class="datepicker" name="end_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td class="sumbitButtons"><input tabindex="2" title="Submit" onclick="goalsdatareport();" class="button" type="button" value="Submit"><input id="exp_csv" tabindex="2" title="CSV" onclick="goalscsv();" class="button" type="button" value="Export CSV" style="display:none;"></td>';
		str += '</tr></tbody>';
		str += '</table>';
		str += '</div>';
		str += '<div id="report-data"></div>';
		str += '</td></tr></tbody></table>';
		str += '</div>';
		$("#content").after(str);
		setformat();
}


function goalsdatareport(){
	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		$.ajax({
	            url : 'evaluate_goals_report.php',
	            type : 'POST',
	            data :
	            {
	                'start_date': start_date,
	                'end_date': end_date
	            },
	            success : function(data){
					if(data == 0){
						$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#report-data").html(data);
						$("#exp_csv").show();
					}
	            }
	  	});
	}else{
		$("#report-data").html('');
	}
}


function goalscsv(){
    var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		window.location.href = "goals_report_csv.php?date=" + start_date + "&date2=" + end_date ; 
		
	}
}



function sort_Training_goals_Report(columnName){
	if(columnName == 'first_name'){
		var sort = $("#first_name_sort").val();
	}
	else if(columnName == 'last_name'){
		var sort = $("#last_name_sort").val();
	}else if(columnName == 'y2016'){
		var sort = $("#y2016_sort").val();
	}else if(columnName == 'y2017'){
		var sort = $("#y2017_sort").val();
	}else if(columnName == 'y2018'){
		var sort = $("#y2018_sort").val();
	}else if(columnName == 'y2019'){
		var sort = $("#y2019_sort").val();
	}else if(columnName == 'y2020'){
		var sort = $("#y2020_sort").val();
	}else{
		var sort = $("#total_goals_sort").val();
	}
	
	if(sort == 'ASC'){
		var sort_key = "DESC";
		$("#first_name_sort").val('DESC');
		$("#last_name_sort").val('DESC');
		$("#y2016_sort").val('DESC');
		$("#y2017_sort").val('DESC');
		$("#y2018_sort").val('DESC');
		$("#y2019_sort").val('DESC');
		$("#y2020_sort").val('DESC');
		$("#total_goals_sort").val('DESC');
	}else{
		var sort_key = "ASC";
		$("#first_name_sort").val('ASC');
		$("#last_name_sort").val('ASC');
		$("#y2016_sort").val('ASC');
		$("#y2017_sort").val('ASC');
		$("#y2018_sort").val('ASC');
		$("#y2019_sort").val('ASC');
		$("#y2020_sort").val('ASC');
		$("#total_goals_sort").val('ASC');
	}

	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
    $.ajax({
	    url: 'evaluate_goals_report.php',
	    type: 'POST',
	    data:{
	    	column_name:columnName,
	    	sort:sort_key,
	    	start_date: start_date,
	    	end_date: end_date
	    },
    	success: function(data){
 	    	$("#report-data").html(data);
			$("#exp_csv").show();
  		}
 });

}

function callsReport(element){

	$("#content").hide();
     	
     	var str = '<div id="custom_content">';
		str += '<table id="custom_report"><tbody><tr><td>';
		str += '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back">';
		str += '<div class="moduleTitle"><h2> Calls Activities Summary Report </h2><div class="clear"></div></div>';
		str += '<div class="edit view search basic" style=>';
		str += '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
		str += '<tbody><tr>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="start_date">Start Date</label></td>';
		str += '<td nowrap="nowrap" width="1%"><input class="datepicker" name="start_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="end_date"> End Date</label></td><td nowrap="nowrap" width="1%"><input class="datepicker" name="end_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td class="sumbitButtons"><input tabindex="2" title="Submit" onclick="callsdatareport();" class="button" type="button" value="Submit"></td>';
		str += '</tr></tbody>';
		str += '</table>';
		str += '</div>';
		str += '<div id="report-data"></div>';
		str += '</td></tr></tbody></table>';
		str += '</div>';
		$("#content").after(str);
		setformat();
}

function callsdatareport(){
	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		$.ajax({
	            url : 'calls_report.php',
	            type : 'POST',
	            data :
	            {
	                'start_date': start_date,
	                'end_date': end_date
	            },
	            success : function(data){
					if(data == 0){
						$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#report-data").html(data);
						$("#exp_csv").show();
					}
	            }
	  	});
	}else{
		$("#report-data").html('');
	}
}

function meetingsReport(element){

	$("#content").hide();
     	
     	var str = '<div id="custom_content">';
		str += '<table id="custom_report"><tbody><tr><td>';
		str += '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back">';
		str += '<div class="moduleTitle"><h2> Meetings Activities Summary Report </h2><div class="clear"></div></div>';
		str += '<div class="edit view search basic" style=>';
		str += '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
		str += '<tbody><tr>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="start_date">Start Date</label></td>';
		str += '<td nowrap="nowrap" width="1%"><input class="datepicker" name="start_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="end_date"> End Date</label></td><td nowrap="nowrap" width="1%"><input class="datepicker" name="end_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td class="sumbitButtons"><input tabindex="2" title="Submit" onclick="meetingsdatareport();" class="button" type="button" value="Submit"></td>';
		str += '</tr></tbody>';
		str += '</table>';
		str += '</div>';
		str += '<div id="report-data"></div>';
		str += '</td></tr></tbody></table>';
		str += '</div>';
		$("#content").after(str);
		setformat();
}

function meetingsdatareport(){
	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		$.ajax({
	            url : 'meetings_report.php',
	            type : 'POST',
	            data :
	            {
	                'start_date': start_date,
	                'end_date': end_date
	            },
	            success : function(data){
					if(data == 0){
						$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#report-data").html(data);
						$("#exp_csv").show();
					}
	            }
	  	});
	}else{
		$("#report-data").html('');
	}
}

function tasksReport(element){

	$("#content").hide();
     	
     	var str = '<div id="custom_content">';
		str += '<table id="custom_report"><tbody><tr><td>';
		str += '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back">';
		str += '<div class="moduleTitle"><h2> Tasks Activities Summary Report </h2><div class="clear"></div></div>';
		str += '<div class="edit view search basic" style=>';
		str += '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
		str += '<tbody><tr>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="start_date">Start Date</label></td>';
		str += '<td nowrap="nowrap" width="1%"><input class="datepicker" name="start_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="end_date"> End Date</label></td><td nowrap="nowrap" width="1%"><input class="datepicker" name="end_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td class="sumbitButtons"><input tabindex="2" title="Submit" onclick="tasksdatareport();" class="button" type="button" value="Submit"></td>';
		str += '</tr></tbody>';
		str += '</table>';
		str += '</div>';
		str += '<div id="report-data"></div>';
		str += '</td></tr></tbody></table>';
		str += '</div>';
		$("#content").after(str);
		setformat();
}


function tasksdatareport(){
	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		$.ajax({
	            url : 'tasks_report.php',
	            type : 'POST',
	            data :
	            {
	                'start_date': start_date,
	                'end_date': end_date
	            },
	            success : function(data){
					if(data == 0){
						$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#report-data").html(data);
						$("#exp_csv").show();
					}
	            }
	  	});
	}else{
		$("#report-data").html('');
	}
}


function emailsReport(element){

	$("#content").hide();
     	
     	var str = '<div id="custom_content">';
		str += '<table id="custom_report"><tbody><tr><td>';
		str += '<input tabindex="2" onclick="goBack();" class="button" type="button" value="Go Back">';
		str += '<div class="moduleTitle"><h2> Emails Summary Report </h2><div class="clear"></div></div>';
		str += '<div class="edit view search basic" style=>';
		str += '<table width="100%" cellspacing="0" cellpadding="0" border="0">';
		str += '<tbody><tr>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="start_date">Start Date</label></td>';
		str += '<td nowrap="nowrap" width="1%"><input class="datepicker" name="start_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td scope="row" nowrap="nowrap" width="1%"><label for="end_date"> End Date</label></td><td nowrap="nowrap" width="1%"><input class="datepicker" name="end_date" size="25" placeholder="mm/dd/yyyy"></td>';
		str += '<td class="sumbitButtons"><input tabindex="2" title="Submit" onclick="emailsdatareport();" class="button" type="button" value="Submit"></td>';
		str += '</tr></tbody>';
		str += '</table>';
		str += '</div>';
		str += '<div id="report-data"></div>';
		str += '</td></tr></tbody></table>';
		str += '</div>';
		$("#content").after(str);
		setformat();
}


function emailsdatareport(){
	var start_date = $("input[name=start_date]").val();
	var end_date = $("input[name=end_date]").val();
	if(start_date != '' && end_date != ''){
		$.ajax({
	            url : 'emails_report.php',
	            type : 'POST',
	            data :
	            {
	                'start_date': start_date,
	                'end_date': end_date
	            },
	            success : function(data){
					if(data == 0){
						$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#report-data").html(data);
						$("#exp_csv").show();
					}
	            }
	  	});
	}else{
		$("#report-data").html('');
	}
}



function duplicatesReported(element){
		    $.ajax({
	         url : 'duplicate_accounts_report.php',
	         success : function(data){
	         	if(data == 0){
	         		$("#report-data").html('<div id="detailpanel_report"><h3 style="padding: 13px 0px 5px 17px;"> No Records Found. </h3></div>');
						$("#exp_csv").hide();
					}else{
						$("#content").hide();
	            	    $("#content").after(data);
                        $("#exp_csv").show();
					}
	            	
	         }
	    });
    }

    function duplicate_accounts_csv(element){
	window.location.href = 'duplicate_account_report_csv.php'; 
}
