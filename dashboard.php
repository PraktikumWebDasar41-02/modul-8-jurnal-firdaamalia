<?php 
$conek=mysqli_connect('localhost','root','','modul8');

if(isset($_GET['nim'])){
	mysqli_query($conek, "DELETE FROM jurnal WHERE nim= '".$_GET['nim']."' ");
	header("Location: file.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form>
			<table border="5">
 		<thead>
 			<td>Nama Depan</td>
 			<td>Nama Belakang</td>
 			<td>NIM</td>
			<td>Kelas</td>
			<td>Hobi</td>
			<td>Genre Film</td>
			<td>Temapt Wisata</td>
			<td>Tanggal Lahir</td>
		</thead>

		<tbody>
 			<?php 
 			$hsl;
 			if (isset($_POST['submit'])){
 				$hsl= mysqli_query($conek, "SELECT * FROM jurnal WHERE nim LIKE '%".$_POST['mencari']."%'");
 			}else{
 				$hsl = mysqli_query($conek, "SELECT * FROM jurnal");
 			}


 			$i = 1;
 			while($arr2 = mysqli_fetch_array($hsl)){
 				echo "<tr>";
 				echo "<td>$i</td>";
 				echo "<td>".$arr2['nama_depan']."</td>";
 				echo "<td>".$arr2['nama_belakang']."</td>";
 				echo "<td>".$arr2['nim']."</td>";
 				echo "<td>".$arr2['kelas']."</td>";
 				echo "<td>".$arr2['hobi']."</td>";
 				echo "<td>".$arr2['genre_film']."</td>";
 				echo "<td>".$arr2['tempat_wisata']."</td>";
 				echo "<td>".$arr2['tgl_lahir']."</td>";
 				echo "<td><a href='file.php?nim=".$arr2['nim']."'>hapus</a></td>";
 				echo "</tr>";
 				$i++;
 			}



 			 ?>

 		</tbody>


		</form>

	</table>

</body>
</html>