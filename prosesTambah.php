<?php
            include("basisdata.php");

            $nama_mobil =$_POST['nama_mobil']; 
            $jenis_mobil = $_POST['jenis_mobil']; 
            $grade_mesin = $_POST['grade_mesin'];
            $grade_interior = $_POST['grade_interior'];
            $grade_eksterior = $_POST['grade_eksterior'];
            $usia_mobil = $_POST['usia_mobil']; 
            $cc_mobil = $_POST['cc_mobil']; 
            $harga_mobil = $_POST['harga_mobil']; 

            //bobot mesin
            if($grade_mesin=='A'){
                $bobot_mesin = 5;
            }else if($grade_mesin=='B'){
                $bobot_mesin = 4;
            }else if($grade_mesin=='C'){
                $bobot_mesin = 3;    
            }else if($grade_mesin=='D'){
                $bobot_mesin = 2;
            }else{
                $bobot_mesin = 1;
            }

            //bobot interior
            if($grade_interior=='A'){
                $bobot_interior = 5;
            }else if($grade_interior=='B'){
                $bobot_interior = 4;
            }else if($grade_interior=='C'){
                $bobot_interior = 3;    
            }else if($grade_interior=='D'){
                $bobot_interior = 2;
            }else{
                $bobot_interior = 1;
            }

            //bobot eksterior
            if($grade_eksterior=='A'){
                $bobot_eksterior = 5;
            }else if($grade_eksterior=='B'){
                $bobot_eksterior = 4;
            }else if($grade_eksterior=='C'){
                $bobot_eksterior = 3;    
            }else if($grade_eksterior=='D'){
                $bobot_eksterior = 2;
            }else{
                $bobot_eksterior = 1;
            }

            //bobot usia
            if($usia_mobil<1){
                $bobot_usia = 5;
            }else if($usia_mobil>=1 && $usia_mobil <=3){
                $bobot_usia = 4;
            }else if($usia_mobil>=4 && $usia_mobil <=7){
                $bobot_usia = 3;    
            }else if($usia_mobil>=8 && $usia_mobil <=12){
                $bobot_usia = 2;
            }else{
                $bobot_usia = 1;
            }

            //bobot cc
            if($cc_mobil>4000){
                $bobot_cc = 5;
            }else if($cc_mobil<=4000 && $cc_mobil >2500){
                $bobot_cc = 4;
            }else if($cc_mobil<=2500 && $cc_mobil >1500){
                $bobot_cc = 3;    
            }else if($cc_mobil<=1500 && $cc_mobil >1000){
                $bobot_cc = 2;
            }else{
                $bobot_cc = 1;
            }

            //bobot harga
            if($harga_mobil>=1000000000){
                $bobot_harga = 5;
            }else if($harga_mobil<1000000000 && $harga_mobil >=700000000){
                $bobot_harga = 4;
            }else if($harga_mobil<700000000 && $harga_mobil >=300000000){
                $bobot_harga = 3;    
            }else if($harga_mobil<300000000 && $harga_mobil >=100000000){
                $bobot_harga = 2;
            }else{
                $bobot_harga = 1;
            }

            //nilai bobot kriteria
            $c1 = 5; //grade mesin
            $c2 = 4; //grade interior
            $c3 = 4; //grade eksterior
            $c4 = 3; //usia
            $c5 = 3; //cc
            $c6 = 2; //harga
            $total_c = $c1 + $c2 + $c3 + $c4 + $c5 + $c6; 

            //perbaikan bobot kriteria
            $w1 = $c1 / $total_c;            
            $w2 = $c2 / $total_c;           
            $w3 = $c3 / $total_c;            
            $w4 = $c4 / $total_c;            
            $w5 = $c5 / $total_c;
            $w6 = -($c6 / $total_c);

            $w1 = round($w1,2);
            $w2 = round($w2,2);
            $w3 = round($w3,2);
            $w4 = round($w4,2);
            $w5 = round($w5,2);
            $w6 = round($w6,2);


            //perhitungan vektor (S)
            $vektor_s = (pow($bobot_mesin,$w1))*(pow($bobot_interior,$w2))*(pow($bobot_eksterior,$w3))*(pow($bobot_usia,$w4))*(pow($bobot_cc,$w5))*(pow($bobot_harga,$w6));



            //input kedalam database tabel data_mobil            
            $query1 = "INSERT INTO  data_mobil (nama,jenis,grade_mesin,grade_interior,grade_eksterior,usia,besar_cc,harga,vektor_s)"; 
            $query1 .= "VALUES ('$nama_mobil','$jenis_mobil','$grade_mesin','$grade_interior','$grade_eksterior','$usia_mobil','$cc_mobil','$harga_mobil','$vektor_s')"; 
            $hasil_mysql = mysqli_query($sambungan, $query1); 
                

            //input kedalam database tabel bobot_data
            $query = "SELECT * FROM data_mobil";
            $hasil_mysql = mysqli_query($sambungan, $query) or die (mysqli_error($sambungan));
            while($baris = mysqli_fetch_row($hasil_mysql)) 
            {
                $id_mobil = $baris[0];
            }

            $query2 = "INSERT INTO  bobot_data (id_mobil,grade_mesin,grade_interior,grade_eksterior,usia,besar_cc,harga)"; 
            $query2 .= "VALUES ('$id_mobil','$bobot_mesin','$bobot_interior','$bobot_eksterior','$bobot_usia','$bobot_cc','$bobot_harga')"; 
            $hasil_mysql = mysqli_query($sambungan, $query2);
   
            header("location:hasil.php?sort=semua");
            
?>
