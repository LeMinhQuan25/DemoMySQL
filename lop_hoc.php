<?php 
include 'connect.php';
$lop_hoc = mysqli_query($conn,"SELECT * FROM lop_hoc");
?>
<div class="panel panel-primary">
      <table border="2" class="table table-bordered table-hover">        
          <thead>
              <tr>
                  <th colspan="3">Danh sách lớp học</th>
              </tr>
              <tr>
                  <th>ID</th>
                  <th>Tên lóp</th>
                  <th>Trạng thái</th>
              </tr>
          </thead>
          <tbody>
        <!-- duyệt dữ liệu sử dụng vòng lặp foreach -->
        <?php foreach($lop_hoc as $lop) : ?>
              <tr>
                  <td><?php echo $lop['id'];?></td>
                  <td><?php echo $lop['name'];?></td>
                  <td><?php echo $lop['id'] == 1 ? 'Đang học' : 'Đã kết thúc';?></td>
              </tr>
        <?php endforeach;?>
          </tbody>
      </table>
</div>

