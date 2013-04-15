<?php
	$login_url = 'https://susi.uni-sofia.bg/ISSU/forms/Login.aspx';
	$replace = 'Login.aspx';

	$susi = file_get_contents($login_url);

	$susi = str_replace('</body>', '<script>
		window.onload = function(){
			var u = prompt("Username");
			var p = prompt("Password");

			document.getElementById("txtUserName").value = u;
			document.getElementById("txtPassword").value = p;

			if(u && p){
				window.top.location.href = window.top.location.href.split("#")[0] + "#on";
				document.getElementById("btnSubmit").click();
			}
		};
	</script></body>', $susi);

	$susi = str_replace($replace, $login_url, $susi);

	echo $susi;
