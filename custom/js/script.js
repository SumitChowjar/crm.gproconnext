
$(document).ready(function () {
	var url = window.location.href;
	var Id = url.substring(url.lastIndexOf('=') + 1);
	var str = $("#drop-nav").find("a")['0'];
	str = str.toString();
	var user_id = str.substring(str.lastIndexOf("=") + 1);
	if(url.includes("module=Contacts")){
		//debugger;
		var user = $("#assigned_user_name").val();
		$.ajax({
			cache: false,
			url:'get.php',
			type: 'post',
			data: {'Id': Id, 'UserId': user_id},
			success: function (data){
				var result = jQuery.parseJSON(data);
				var name = result.array1;
				var user_name = result.array2;
			$("#parent_type").val("Contacts").prop('selected', true);
				$('#parent_name').val(name);
				$('#parent_id').val(Id);

				if(user == '')
				{

					$('#assigned_user_name').val(user_name);
					$('#assigned_user_id').val(user_id);

				}
			}
		})
		
	}
});
