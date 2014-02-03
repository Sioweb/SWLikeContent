var removeMsg = false;
function increase_this (element){
	var Element = $(element);

	if(removeMsg)
		clearTimeout(removeMsg);

	$.ajax(
	{
		type: "POST",
		url:  "ajax.php",
		data: { isAjaxRequest: 1, increase_like: 1, id: Element.data('id'), REQUEST_TOKEN: Contao.request_token},
		success: function(result)
		{
			console.log(result);
			var span = false;
			result = $.parseJSON(result).content;
			Element.children('.msg').remove();
			Element.append('<span class="msg">'+result.msg+'</span>');
			span = Element.children('.msg');

			if(result.code == '0')
				span.addClass('like_error');
			if(result.code == '10')
				span.addClass('like_successfull');
			
			removeMsg = setTimeout(function(){span.remove();},2000);
		}
	});
	return false;
}