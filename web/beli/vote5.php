<?php
//authhor by jhackofranklin.com
include "koneksivote.php";
$query ="SELECT * FROM links";
$sql = mysql_query($query);
$result = mysql_num_rows($sql);
?>
<html>
<head>
<title>Snack</title>
<style>
<!-- Untuk Style /percantik tampilan -->
body{width:500;}
.demo-table {width: 50%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table th {background: #EF008F;padding: 5px;text-align: left;color:#FFF;}
.demo-table td {border-bottom: #f0f0f0 1px solid;background-color: #eef2f1;padding: 5px;}
.demo-table td div.feed_title{text-decoration: none;color:#333;font-weight:bold;}
.demo-table ul{margin:0;padding:0;}
.demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
.demo-table .highlight, .demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}
.btn-votes {float:left; padding: 0px 5px;cursor:pointer;}
.btn-votes input[type="button"]{width:32px;height:32px;border:0;cursor:pointer;}
.up {background:url('up.png')}
.up:disabled {background:url('up_off.png')}
.down {background:url('down.png')}
.down:disabled {background:url('down_off.png')}
.label-votes {font-size:1.0em;color:#40CD22;width:32px;height:32px;text-align:center;font-weight:bold;}
.desc {float:right;color:#999;width:90%;}
<!-- END -->
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
/* script untuk menghitung votting dengan menggunakan ajax */
function addVote(id,vote_rank) {
	$.ajax({
	url: "add_vote.php",
	data:'id='+id+'&vote_rank='+vote_rank,
	type: "POST",
	beforeSend: function(){
		$('#links-'+id+' .btn-votes').html("<img src='LoaderIcon.gif' />");
	},
	success: function(vote_rank_status){
	var votes = parseInt($('#votes-'+id).val());
	var vote_rank_status;// = parseInt($('#vote_rank_status-'+id).val());
	switch(vote_rank) {
		case "1":
		votes = votes+1;
		//vote_rank_status = vote_rank_status+1;
		break;
		case "-1":
		votes = votes-1;
		//vote_rank_status = vote_rank_status-1;
		break;
	}
	$('#votes-'+id).val(votes);
	$('#vote_rank_status-'+id).val(vote_rank_status);
	
	var up,down;
	
	if(vote_rank_status == 1) {
		up="disabled";
		down="enabled";
	}
	if(vote_rank_status == -1) {
		up="enabled";
		down="disabled";
	}	
	var vote_button_html = '<input type="button" title="Up" class="up" onClick="addVote('+id+',\'1\')" '+up+' /><div class="label-votes">'+vote_rank_status+'</div><input type="button" title="Down" class="down"  onClick="addVote('+id+',\'-1\')" '+down+' />';	
	$('#links-'+id+' .btn-votes').html(vote_button_html);
	}
	});
}
</script>
</head>
<body>
<table class="demo-table">
<img class="crispy " src="5.jpg">

<tbody>
<tr>
<th><strong>Rating</strong></th>
</tr>
<?php
if(!empty($result)) {
$ip_address = $_SERVER['REMOTE_ADDR'];
while($links = mysql_fetch_assoc($sql)) {
?>
<tr>
<td valign="top">
<div class="feed_title"><?php echo $links["title"]; ?></div>
<div id="links-<?php echo $links["id"]; ?>">
<input type="hidden" id="votes-<?php echo $links["id"]; ?>" value="<?php echo $links["votes"]; ?>">
<?php
// Mengecek IP ini sudah perna ataw belum untuk disable/enabled
$vote_rank = 0;
$query ="SELECT SUM(vote_rank) as vote_rank FROM ipaddress_vote_map WHERE link_id = '" . $links["id"] . "' and ip_address = '" . $ip_address . "'";
$sql1 = mysql_query($query);
$row = mysql_fetch_array($sql1);
$up = "";
$down = "";
if(!empty($row["vote_rank"])) {
	$vote_rank = $row["vote_rank"];
	if($vote_rank == -1) {
	$up = "enabled";
	$down = "disabled";
	}
	if($vote_rank == 1) {
	$up = "disabled";
	$down = "enabled";
	}
}
?>
<input type="hidden" id="vote_rank_status-<?php echo $links["id"]; ?>" value="<?php echo $vote_rank; ?>">
<div class="btn-votes">
<input type="button" title="Up" class="up" onClick="addVote(<?php echo $links["id"]; ?>,'1')" <?php echo $up; ?> />
<div class="label-votes"><?php echo $links["votes"]; ?></div>
<input type="button" title="Down" class="down" onClick="addVote(<?php echo $links["id"]; ?>,'-1')" <?php echo $down; ?> />
</div>
</div>
<div class="desc"><?php echo $links["description"]; ?></div>
</td>
</tr>
<?php		
}
}
?>
</tbody>
</table>
<a div style="text-align: center;" href='index5.php'>kembali</a>
</body>
</html>