         

<?php
	function GetGameTheme() {
	$con=mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
	$query= "SELECT * FROM themes WHERE active=1";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
	$CSS_LINK = $row['css_link'];
	echo '<link rel="stylesheet" type="text/css" media="all" href="../wow/static/Themes/'.$CSS_LINK.'/local-common/css/common.css?v4">';
	echo '<link rel="stylesheet"  href="../wow/static/Themes/'.$CSS_LINK.'/css/wow.css?v4">';
	echo '<link rel="stylesheet" href="../wow/static/Themes/'.$CSS_LINK.'/css/game/game-index.css?v4"/>';
	echo '<link rel="stylesheet" href="../wow/static/Themes/'.$CSS_LINK.'/css/wiki/wiki.css?v4"/>';
	
}
}
