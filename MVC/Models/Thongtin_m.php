<?php
    class Thongtin_m extends connectDB{
        function tim($m){
            $sql="SELECT * From thongtin WHERE Manv = '$m'";                     
           return mysqli_query($this->con,$sql);
        }
        function timkiem($m){
            $sql="SELECT * From thongtin WHERE Manv like '%$m%'OR Tennv like '%$m%'";                     
           return mysqli_query($this->con,$sql);
        }
        function them($m,$t,$gt,$ns,$qq,$sdt){
            $sql="INSERT INTO thongtin
            (`Manv`, `Tennv`, `Gioitinh`, `Ngaysinh`, `Quequan`, `Sdt   `) VALUES
             ('$m','$t','$gt','$ns','$qq','$sdt')";
             return mysqli_query($this->con,$sql);
        }
        function sua($m,$t,$gt,$ns,$qq,$sdt){
           $sql=" UPDATE `thongtin` SET 
            `Tennv`='$t',`Gioitinh`='$gt',
            `Ngaysinh`='$ns',`Quequan`='$qq',`Sdt`='$sdt' WHERE Manv='$m' ";
            return mysqli_query($this->con,$sql);
        }
        function xoa($m){
            $sql="DELETE FROM thongtin WHERE Manv='$m' ";
            $sql1="  DELETE FROM phanca WHERE Manv='$m' ";mysqli_query($this->con,$sql1);
            $sql2="  DELETE FROM tinhluong WHERE Manv='$m' ";mysqli_query($this->con,$sql2);
            return mysqli_query($this->con,$sql);
        }
        function trungma($mnv){
            $sql=" SELECT * FROM thongtin WHERE MAnv='$mnv' ";
            $dl= mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)>0){
                $kq=true;
            }
            return $kq;
        }
    }
?>