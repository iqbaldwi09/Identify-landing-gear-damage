<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>
<?php
include '../koneksi.php';
$id = $_GET['idDock'];
//var_dump($id);
$query = mysqli_query($konek,"SELECT * FROM tbberita where id = '$id'");
//var_dump($query);
$row = mysqli_fetch_array($query);
$pertanyaan = $row['docu'];
$jawab = $row['jawaban'];


?>

<h3>Penulisan Ulang Jawaban</h3>

<div>
  <form method="POST" action="editsim.php">
    <label for="pertanyaan">Pertanyaan</label>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="text" name="pertanyaan" value="<?=$pertanyaan?>">
    <input type="text" name="jawab" value="<?=$jawab?>">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
