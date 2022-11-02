<?php 
include 'connect.php';
// Truy vấn dữ liệu bảng sinh_vien
$sql = "SELECT sinh_vien.*,lop_hoc.name as 'lop' FROM sinh_vien JOIN lop_hoc ON sinh_vien.lop_hoc_id = lop_hoc.id";
$sinhvien = mysqli_query($conn,$sql);
?>

<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Danh sách sinh viên</h3>
      </div>
      <table border="2" class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Họ tên</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Lớp học</th>
                  <th>Trạng thái</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach($sinhvien as $sv) : ?>
              <tr>
                  <td><?php echo $sv['id'];?></td>
                  <td><?php echo $sv['name'];?></td>
                  <td><?php echo $sv['email'];?></td>
                  <td><?php echo $sv['phone'];?></td>
                  <td><?php echo $sv['lop'];?></td>
                  <td><?php echo $sv['status'] == 1 ? 'Đang học' : 'Đã tốt nhiệp' ;?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
      </table>
</div>

