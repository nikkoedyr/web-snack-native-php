<?php
//author by jhackofranklin.com
if(!empty($_POST['id'])) {
	include "koneksi.php";
	$query = "INSERT INTO ipaddress_vote_map (ip_address,link_id,vote_rank) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "','" . $_POST['id'] . "','" . $_POST['vote_rank'] . "')";
	$result = mysql_query($query);
	if(!empty($result)) {
		$query = "SELECT SUM(vote_rank) as vote_rank FROM ipaddress_vote_map  WHERE link_id = '" . $_POST['id'] . "' and ip_address = '" . $_SERVER['REMOTE_ADDR'] . "'";
		$row1 =mysql_query($query);
		$row = mysql_fetch_array($row1);
		switch($_POST["vote_rank"]) {
			case "1":
				$update_query ="UPDATE links SET votes = votes+1 WHERE id='" . $_POST['id'] . "'";
			break;
			case "-1":
				$update_query ="UPDATE links SET votes = votes-1 WHERE id='" . $_POST['id'] . "'";
			break;
		}
		
		$result = mysql_query($update_query);	
		print $row['vote_rank'];
	}
}
?>