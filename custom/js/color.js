$(document).ready(function(){

        //hide "reports to" for referral dropdown
        var contact_id = $("div .moduleTitle").children("h2").children("a").attr('href');
        if( contact_id )
        {
                contact_id = contact_id.split("record=").pop();
                var lead_source = $("select[name='lead_source']").val();
                if( lead_source == "Referral" )
                {
                        $("td #report_to_name_label").show();
                        $("td #report_to_name_label").next("td").show();
                }
                else
                {
                        $("td #report_to_name_label").hide();
                        $("td #report_to_name_label").next("td").hide();
                }
                
        }
        else
        {
                $("td #report_to_name_label").hide();
                $("td #report_to_name_label").next("td").hide();
        }
        

        var url = window.location.href;
        if(url.includes("connex")){
                $('#pastoral_journey_c_label').css('font-size','12px');
                $('#pastoral_journey_c_label').css('font-weight','Bold');
                $('#pastoral_journey_c_label').css('color','#0b578f');
                $('#pastoral_journey_c').css('font-weight','Bold');
                $('#pastoral_journey_c').css('font-size','12px');
                $('#pastoral_journey_c').css('color','#0b578f');

                //disable options in salutation dropdown
                $("#salutation option[value='english'], option[value='french'], option[value='spanish'], option[value='portuguese']").attr('disabled', true);
        }


        $("#lead_source").on("change", function(){
                var selected_lead_source = $(this).val();
                //console.log(selected_lead_source);
                if( selected_lead_source == "Referral" )
                {
                        $("td #report_to_name_label").show();
                        $("td #report_to_name_label").next("td").show();
                }
                else
                {
                        $("td #report_to_name_label").hide();
                        $("td #report_to_name_label").next("td").hide();
                        $("input[name='report_to_name'], input[name='reports_to_id']").val("");
                }
        });


});