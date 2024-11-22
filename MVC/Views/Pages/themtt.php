<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/quanlysieuthi/Public/css/CDT/suaTT.css">

</head>  
   <body>  

    <form method="post" action="http://localhost/quanlysieuthi/Thongtin/them">
         <div class="khoi">

            <div class="khoi1">
                 <label >Mã NV  </label>
            <input type="text"  placeholder="    Mã Nhân Viên"  name="txtma" value=<?php if( isset($data['mnv']) ) echo $data['mnv'] ?> >
            </div>
           
            <div class="khoi1">
            <label >Họ Và Tên</label>
            <input type="text" placeholder="    Họ và Tên" name="txtten" value=<?php if( isset($data['mca']) ) echo $data['mca'] ?> >
            </div>
          
            <div class="khoi1">
            <label >Ngày Sinh</label>
            <input id="ns" type="date"  name="txtns" value=<?php if( isset($data['ns']) ) echo $data['ns'] ?> >
            </div>
       <div class="khoi1">
            <label >Giới Tính</label>
            <select name="ddlgt" >
                <option value="">---Chọn giới tính---</option>
                <option value="Nam" <?php if( isset($data['gt']) && $data['gt']=="Nam")  echo 'Selected' ?>>Nam</option>  
                <option value="Nữ" <?php if( isset($data['gt']) && $data['gt']=="Nữ")  echo 'Selected' ?> >Nữ</option>
                <option value="Khác" <?php if( isset($data['gt']) && $data['gt']=="Khác")  echo 'Selected' ?> >Khác</option>
            </select>
       </div>
            
            <div class="khoi1">
                <label >Phone</label>
            <input type="number"  placeholder="    Số Điện Thoại" name="txtsdt" value=<?php if( isset($data['sdt']) ) echo $data['sdt'] ?> >
            </div>  
            <div class="khoi1">
                   <label >Địa Chỉ</label>
            <input type="text" placeholder="     Địa Chỉ" name="txtdc" value=<?php if( isset($data['qq']) ) echo $data['qq'] ?> >
            </div>
          <div class="nut">
            <button type="submit" class="btn btn-primary" name="btnThem">Thêm</button>
            <a href="http://localhost/quanlysieuthi/Thongtin">Hủy</a>
          </div> 
               </div>

    </form>

</body>
</html>