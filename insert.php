<center><br><br><br><br><br><br><br><br><br>
<?php
include_once('conn.php');
   if (empty ($_POST['group'])){
	echo "กรุณากรอกข้อมูลให้ครบถ้วน";
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='insert_group.php';
			</script>";
        exit();
    } else {
        $group = mysqli_real_escape_string($conn, $_POST['group']); /*คำสั่งนี้ mysqli_real_escape_string เป็นการกันระบบสำหรับคนที่ไม่หวังดีมาทำลาย*/
}
$group= $_POST['group'];
$status = $_POST['pro_status'];
$sql = "insert into groupp (name_g,status_g) values('$group','$status')";
  //echo $sql."<BR>";
    $result= mysqli_query($conn, $sql);	
    if ($result) { 
        echo "เพิ่มข้อมูลเรียบร้อย";
    } else {
        echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($conn);
}
mysqli_close($conn);

?>
<br><br><a href='select.php'>ข้อมูลกลุ่มเรียน</a></center>