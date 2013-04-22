$(document).ready(function(){
	var targetUrl = 'https://susi.uni-sofia.bg/ISSU/forms/students/home.aspx',
		sourceUrl = 'http://localhost/susi-wiredrawer/ping.php';

	if(window.location.href == targetUrl){
		$.post(sourceUrl, {
			names: $('#StudentInfo1_lblUserName').text(),
			fn: $('#StudentInfo1_lblFacultyNumber').text(),
			spec: $('#StudentInfo1_lblEducationPlan').text(),
			course: $('#StudentInfo1_lblCourse').text(),
			group: $('#StudentInfo1_lblGroup').text()
		});
	}
});
