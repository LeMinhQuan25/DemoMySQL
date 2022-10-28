<?php include 'header.php';
$lop_hoc = mysqli_query($conn,"SELECT * FROM lop_hoc");
?>
<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Danh sách lớp học</h3>
      </div>
      <table class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Tên lóp</th>
                  <th>Trạng thái</th>
              </tr>
          </thead>
          <tbody>
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
