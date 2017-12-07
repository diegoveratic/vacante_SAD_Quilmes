function goLogin(){
	window.alert("se preciono ENTER");
}

function runScriptLogin(e){
	alert('entro');
	if (e.keycode == 13) {
		goLogin();
	}
}