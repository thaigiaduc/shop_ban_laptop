<?php 
include("connect.php");
session_start();

//cong

//xoa tat ca


if(isset($_POST['themgiohang'])){
    
   $id=$_GET['ID'];
   $soluong=1;
   $sql="SELECT * from sanpham WHERE ID='".$id."' LIMIT 1";
   $query=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($query);
   if($row){
       $newproduct=array(array('Tensp'=>$row['Tensp'],'ID'=>$id,'soluong'=>$soluong,'Gia'=>$row['Gia'],'Hinh'=>$row['Hinh']));
       if(isset($_SESSION['cart'])){
            $found=false;
            foreach($_SESSION['cart'] as $cartitem){
                if($cartitem['ID']==$id){
                    $product[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong']+1,'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
                    $found=true;
                }else{
                    $product[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
                }
            }

            if($found==false){
                $_SESSION['cart']=array_merge($product,$newproduct);
            }else{
                $_SESSION['cart']=$product;
            }
       }else{ 
            $_SESSION['cart']= $newproduct;
       }
   }
   print_r($_SESSION['cart']);
   if (isset($_SERVER["HTTP_REFERER"])) {
       header("Location: " . $_SERVER["HTTP_REFERER"]);
   }
}


?>