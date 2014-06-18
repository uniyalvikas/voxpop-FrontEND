<?php

mysql_connect('localhost', 'root', 'admin') or die();
mysql_select_db('voxpopdb');

$offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
$postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();


$run = mysql_query("SELECT * FROM user_reports ur, user_comments uc WHERE ur.ureport_verified='1' AND uc.ucomment_verified='1'
AND ur.user_id=uc.ucomment_user_id ORDER BY ur.ureport_id DESC LIMIT ".$postnumbers." OFFSET ".$offset);


while($row = mysql_fetch_array($run)) {
    
/*    echo '<h1><a href="'.$row['ureport_id'].'">'.$row['ureport_title'].'</a></h1><hr />';
    $content = substr(strip_tags($row['ureport_description']), 0, 500);
	echo '<p>'.$content.'</p><br />';
    echo '<p>'.$row['ureport_dateTime'].'</p>';
    echo '<p>'.$row['ucomment_comment'].'</p>';
    echo '<p>'.$row['ucomment_dateTime'].'</p><hr />';
*/$content = substr(strip_tags($row['ureport_description']), 0, 500);
   echo '<div class="reportBox" style="margin-top:25px;">'.
       '<h1  style="margin-top:10px;"><a href="'.$row['ureport_id'].'">'.$row['ureport_title'].'</a></h1>'
       .'<p>'.$content.'</p><br />'.$row['ureport_dateTime'].'<div style="background-color:#555454;">'.'  Comments:  '.$row['ucomment_comment'].'</div>'
       
       
       .'</div>';
    

}

?>