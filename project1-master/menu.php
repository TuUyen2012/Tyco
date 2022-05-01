
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<style>
#container-type {
	display: flex;
}

#container-type .item-type{
	padding: 2rem;
	background-color: red;
	margin: 1rem;
	width: 8rem;
	text-align: center;
	cursor: pointer;
	font-size: 12px;
}
</style>

<body>
<?php
  require 'connect.php';
  $sql = "select * from hang_san_xuat";
  $result = mysqli_query($connect,$sql);
?>


<div id="container-type">
	<?php foreach($result as $hang_san_xuat): ?>
	<div class="item-type">
		<a href="home.php?ma_hang_san_xuat=<?php echo $hang_san_xuat['ma_hang_san_xuat']?>"><?php echo $hang_san_xuat['ten_hang_san_xuat']?></a>
	
	</div>
	<?php endforeach ?>
</div>
</body>
</html>

