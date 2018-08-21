function check_cookie() {
	if (document.cookie)
	{
		var arr = document.cookie.split(";");
		for (var i = 0; i < arr.length; i++) {
	  		tag = arr[i].split("=");
	  		var elem = document.createElement('div');
			elem.setAttribute('id', tag[0]);
			elem.setAttribute('class', 'stl');
			elem.setAttribute('onclick', 'remove_if(this.id)');
			elem.innerHTML = '\u2666  ' + tag[1];
			ft_list.insertBefore(elem, ft_list.firstChild);
		}
	}
}

function ft_appear_top(task)
{
	var date = new Date(new Date().getTime() + 1800 * 1000);
	document.cookie = "child" + new Date().getTime() + "=" + task + "; path=/; expires=" + date.toUTCString() + ";";
	var elem = document.createElement('div');
	elem.setAttribute('id', 'child' + new Date().getTime());
	elem.setAttribute('class', 'stl');
	elem.setAttribute('onclick', 'remove_if(this.id)');
	elem.innerHTML = '\u2666  ' + task;
	ft_list.insertBefore(elem, ft_list.firstChild);
}

function create_new_task() {
	var task = prompt("Create new TO DO");
	if (task && !task.match(/^\s+$/))
		ft_appear_top(task);
}

function remove_if(id) {
	if (confirm("Do you really want remove to TO DO ?"))
	{
		var date = new Date(0);
		document.cookie = id + "=; path=/; expires=" + date.toUTCString();
		ft_list.removeChild(document.getElementById(id));
	}
}
