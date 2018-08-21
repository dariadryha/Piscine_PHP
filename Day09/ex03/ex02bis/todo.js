$(function() {
	function ft_appear_top(task)
	{
		var date = new Date(new Date().getTime() + 1800 * 1000);
		document.cookie = "child" + new Date().getTime() + "=" + task + "; path=/; expires=" + date.toUTCString() + ";";
		var elem = $('<div id="' + "child" + new Date().getTime() + '">' + '\u2666 ' + task + '</div>');
		elem.attr("class", 'stl');
		$('#ft_list').prepend(elem);
	}

	$("#new").click(function() {
		var task = prompt("Create new TO DO");
		if (task && !task.match(/^\s+$/))
			ft_appear_top(task);
	});

	$(".stl").click(function(){
		if (confirm("Do you really want to remove TO DO ?"))
		{
			var date = new Date(0);
			var id = $(this).attr("id");
			document.cookie = id + "=; path=/; expires=" + date.toUTCString();
			$(this).remove();
		}
	});
});

function check_cookie() {
	if (document.cookie)
	{
		var arr = document.cookie.split(";");
		for (var i = 0; i < arr.length; i++) {
	  		tag = arr[i].split("=");
	  		var elem = $('<div id="' + tag[0] + '">' + '\u2666 ' + tag[1] + '</div>');
	  		elem.attr("class", 'stl');
	  		$('#ft_list').prepend(elem);
		}
	}
}
