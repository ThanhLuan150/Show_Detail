<?php
        $mysqli =new mysqli("localhost","root","", "THOITRANG");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="INSERT INTO THOITRANG(id,img,names,price) VALUES
        ('1','https://butuni.com/wp-content/uploads/2021/01/DSC3674-600x900.jpg','Áo sơ mi nam','150.000'),
        ('2','https://khohangsilami.vn/wp-content/uploads/2021/05/ao-so-mi-soc-cara-tay-dai-nam-mau-3.jpg','Áo sơ mi nam','250.000'),
        ('3','https://routine.vn/media/catalog/product/cache/5de180fdba0e830d350bd2803a0413e8/m/a/mausac_black_10s21shl033_1__1.jpg','Áo sơ mi nam','350.000'),
        ('4','https://tqq.com.vn/hm_content/uploads/seo/so-mi-nam-tre-trung.jpg','Áo sơ mi nam','150.000'),
        ('5','https://product.hstatic.net/1000102419/product/ao_so_mi_nam_dai_tay_mau_trang_merriman_ma_thmol370-1_252f428c40504c7f8d0270befa0a240a_master.png','Áo sơ mi nam','350.000'),
        ('6','https://t012.gokisoft.com/uploads/2021/07/p-7536-ao-so-mi-nam-dai-tay-ke-caro.jpg','Áo sơ mi nam','450.000'),
        ('7','https://bizweb.dktcdn.net/100/018/683/files/ao-so-mi-nam-masculine.jpg?v=1594283180429','Áo sơ mi nam','300.000'),
        ('8','https://bizweb.dktcdn.net/thumb/1024x1024/100/447/649/products/so-mi-nam-enkoni-ke-xanh-c2222.jpg','Áo sơ mi nam','200.000'),
        ('9','https://laforce.vn/wp-content/uploads/2022/07/phoi-do-voi-ao-so-mi-nam.jpg','Áo sơ mi nam','250.000'),
        ('10','https://routine.vn/media/catalog/product/cache/5de180fdba0e830d350bd2803a0413e8/1/0/10f22shl038_blue_wing_teal_2__1.jpg','Áo sơ mi nam','400.000'),
        ('11','https://routine.vn/media/catalog/product/cache/5de180fdba0e830d350bd2803a0413e8/1/0/10f22shl038_blue_wing_teal_2__1.jpg','Áo sơ mi nam','400.000'),
        ('12','https://thuvienmuasam.com/uploads/default/original/2X/e/ebace14de8c553f414a830be6bb2b3c13a1194e6.jpeg','Áo sơ mi nam','250.000'),
        ('13','https://salt.tikicdn.com/cache/w1200/ts/product/a6/1b/7d/65e02c91b8a2072236d4b65d84952f31.jpg','Áo sơ mi nam','350.000'),
        ('14','https://product.hstatic.net/200000341513/product/ao-so-mi-nam-dai-tay-luxury-belluni-adl-2-b5__2__3e0442d0d72c4bd8a5423f1fe33d66b8_large.jpg','Áo sơ mi nam','550.000'),
        ('15','https://product.hstatic.net/1000392339/product/4-01-01_149ff7b901c24a0f97b8fdc0bc821896_master.jpg','Áo sơ mi nam','350.000'),
        ('16','https://somitrungnien.com/wp-content/uploads/2020/07/566-e1595392403908-2.jpg','Áo sơ mi nam','250.000')
        ";

        if($mysqli ->query($sql) === true){
            echo"Records inserted successfully.";
        }
        else{
            echo"ERROR:Could not able to execute $sql.".$mysqli->error;
        }
        //close
        $mysqli ->close();
?>