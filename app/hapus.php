<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM toilet WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);
if (isset($id) > 0){
    echo "
    <script>
    alert('data berhasil di hapus');
    document.location.href = 'ind_toilet.php';
    </script>
    ";
    exit();
} else {
    echo "error adding record:" . mysqli_error($conn);
}
?>