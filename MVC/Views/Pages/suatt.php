<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/quanlysieuthi/Public/css/CDT/SuaTT.css">

    
</head>
<body>
    <form method="post" action="http://localhost/quanlysieuthi/Thongtin/sua">
       
        <div class="khoi">
              <?php 
            if(isset($data['dulieu'])&& mysqli_num_rows($data['dulieu'])>0){
                while($row=mysqli_fetch_array($data['dulieu'])){
            ?> 
            <div class="khoi1">

            <label >Mã NV</label>
            <input readonly type="text" class="form-control dd2" name="txtma" 
            value="<?php echo $row['Manv'] ?>">

            </div>
            <div class="khoi1">

             <label >Họ Và Tên </label>         
            <input type="text" class="form-control dd2" name="txtten" 
            value="<?php echo $row['Tennv'] ?>">
            </div>
          
            <div class="khoi1">

              <label >Ngày Sinh</label>
              <input type="date" class="form-control dd2" name="txtns" 
                value="<?php echo $row['Ngaysinh'] ?>">

            </div>
           
            <div class="khoi1">
             <label >Giới Tính</label>
            <select name="ddlgt" class="form-control dd2">
                <option value="">------ Giới Tính ------</option>
                <option value="Nam" <?php if($row['Gioitinh']=='Nam') echo 'selected' ?>>Nam</option>
                <option value="Nữ" <?php if($row['Gioitinh']=='Nữ') echo 'selected' ?>>Nữ</option>
                <option value="Khác" <?php if($row['Gioitinh']=='Khác') echo 'selected' ?>>Khác</option>
            </select>


            </div>
          
            <div class="khoi1">
            <label >Phone</label>
            <input type="tel" class="form-control dd2" name="txtsdt" 
            value="<?php echo $row['Sdt'] ?>">
            </div>
          
            <div class="khoi1">
                <label >Địa Chỉ</label>
            <input type="text" class="form-control dd2" name="txtdc" 
            value="<?php echo $row['Quequan'] ?>">
        


            </div>
          
            <?php        
                }
            }
            ?>   
            <div class="nut">

            <button type="submit" class="btn btn-primary" name="btnSua">Sửa</button>
            <a href="http://localhost/quanlysieuthi/Thongtin">Hủy</a>

            </div>
        </div>         
    </form>
</body>
</html>