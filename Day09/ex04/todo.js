$(window).on('load', function() {
	$.post('select.php', function(data) {
		if (data)
		{
			var res = data.split("\n");
			for(var i = 0; i < res.length; i++)
			{
				var tag = res[i].split(";");
				if (tag[1])
				{
					var elem = $('<div id="' + tag[0] + '">' + '\u2666 ' + tag[1] + '</div>');
					elem.attr("class", 'stl');
					$('#ft_list').prepend(elem);
				}
			}
		}
	});
});

$(function() {
	$("#ft_list").on('click', '.stl', function() {
		if (confirm("Do you really want to remove TO DO ?"))
		{
			var date = new Date(0);
			var id = $(this).attr("id");
			$.get('delete.php?key=' + id);
			$(this).remove();
		}
	});

	function ft_appear_top(task)
	{
			var date = new Date(new Date().getTime() + 1800 * 1000);
			var id = "child" + new Date().getTime();
			var elem = $('<div id="' + id + '">' + '\u2666 ' + task + '</div>');
			elem.attr("class", 'stl');
			$('#ft_list').prepend(elem);
			$.get('insert.php?key=' + id + '&value=' + task);
	}

	$("#new").click(function() {
		var task = prompt("Create new TO DO");
		if (task && !task.match(/^\s+$/))
			ft_appear_top(task);
	});
});
