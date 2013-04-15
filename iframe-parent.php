<?php
	$login_url = 'https://susi.uni-sofia.bg/ISSU/forms/Login.aspx';

	$susi = file_get_contents($login_url);

	// in iframe-child
	$susi = str_replace('</body>', '<iframe src="' . $login_url . '#hash" width="800" height="300"></iframe><script>
		window.onload = function(){
			console.log(document.getElementsByTagName("iframe")[0].contentDocument.body);
			function hash_changed(){
				if(window.location.hash.length < 1){
					console.log(window.location.hash.substr(1));
				}
			}

			setInterval(hash_changed, 1000);
		};
	</script></body>', $susi);

	echo $susi;
