<?php
define("SERVER","localhost");
	define("USER","root");
	define("PASS","");
	define("DB","test");
	$conn = mysqli_connect(SERVER,USER,PASS,DB) or die("Invalid database");
	session_start();
	if(isset($_POST['submit']))
	{
	$item = $_POST['name'];
	$quantity = $_POST['pass'];
	$pr = $_POST['pri'];
	$sql = "INSERT INTO `list` (`items`, `quantity`, `price`) VALUES ( '$item', '$quantity', '$pr')";
	$res = mysqli_query($conn,$sql);
			if(isset($res)){
				echo "inserted";
			}
			else{
				echo "not found";
			}
    }
?>
<?php
if(isset($_POST['view'])){
	?>
	<table>
	<thead>
	<th>
	Id</th>
	<th>
	Item Name</th>
	<th>Quantity</th>
	<th>Price</th>
	</thead>
	<tbody>
	<?php
	$sqll = "SELECT * FROM `list` ";
	$resl = mysqli_query($conn,$sqll);
	while($rest = mysqli_fetch_array($resl))
	{
?><tr>
		<td>
		<?php echo $rest['ID'];?></td>
		<td>
		<?php echo $rest['items'];?></td>
		<td>
		<?php echo $rest['quantity'];?></td>
		<td>
		<?php echo $rest['price'];?></td></tr>
		<?php
		//$i = $i + 1;
	}
	?>
	</tbody>
	</table>
	<?php
}
?>	