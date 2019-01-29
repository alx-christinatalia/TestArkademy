<html>
<head>
	<title>SOAL 7</title>
</head>
<body>
	<h1><center>Categories and Hobbies</center></h1>
<style>
h1{
	margin-top:90px;
	font-family: sans-serif;
}
.table1{
	border-collapse: collapse;
	margin-top:50px;
	font-family: sans-serif;
    color: #444;
    width: 50%; 
    border: 2px solid #f2f5f7;
}
 
.table1 tr th{
	align: center;
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 20px 100px;
    text-align: center !important;
    border-collapse: collapse;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>

	<table border="5px" align="center" class="table1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Kategori</th>
				<th>Nama Hobby</th>
			</tr>
		</thead>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"
										SELECT s.ID,firstname AS `categories`, 
										GROUP_CONCAT(p.name ORDER BY p.name SEPARATOR ', ' ) AS hobbies
										FROM hobbies_having sp, categories s, hobbies p 
										WHERE sp.categories_id = s.ID AND sp.hobbies_id = p.ID
										GROUP BY sp.categories_id ORDER BY s.firstname 
									  ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tbody>
			<tr>
				<td style="padding-top:50px; text-align: center; "><?php echo $no++; ?></td>
				<td style="padding-top:50px; text-align: center;"><?php echo $d['categories']; ?></td>
				<td style="padding-top:50px; text-align: center;"><?php echo $d['hobbies']; ?></td>
			</tr>
		</tbody>
			<?php 
		}
		?>
	</table>
</body>
</html>