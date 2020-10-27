

</head>
<?php 

    function kode($leng){
        $kode_kehadiran = '';

        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        for($i = 0 ; $i <  $leng; $i++ ){
            $pos = rand( 0 , strlen($char)-1);
            $kode_kehadiran .= $char[$pos]; 
        }

        return $kode_kehadiran;
    }
       

?>




<body >
            <div class="top-bar shadow justify-content-left fixed-top text-body" style=" width: 100% ; height: 90px;  background: #fff; ">
                <div class="container top-content">
                    <div class="atas">
                        <div class="image" ></div> 
                        <h5 class="ml-2 mt-1 " > V-Leadership</h5> 
                    </div>   
                    
                </div>
            </div>


    <div class="container ">
        <div class="content mx-auto" >
           <div class="isi " style="margin-top: 70px;">
                <h2><i class="far fa-check-circle mr-1 text-success"></i>Terima Kasih sudah memilih</h2>
                <p class="mt-4 mb-3" >ini kode kehadiran anda</p>

                

                <h3 style="padding: 20px; width:100%; background:#ededed; margin:0 auto;"><?= kode(10); ?></h3>
                <br>
                <a href="<?= base_url(); ?>" >Kembali ke home</a>
           </div>
        </div>


        
    </div>
<!-- 

    <footer class=" justify-content-center  text-center bg-0" style="padding: 20px; width:100%; position:fixed; ">
        <div class="footer-container" >
            <div class="social-media">
            <h6 class="text-body mt-4" ><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
                <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
                <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
            </div>
        </div>
    </footer> -->


<style>

    body{
        font-family: 'poppins' , sans-serif;
        background: #2ab7ca;
    }

    h2{
        font-family: Arial, Helvetica, sans-serif;
        font-weight: normal;
    }



    .content{
        text-align: center;
        margin-top: 250px;
        width: 100%;
        height: 800px;
        background: #fff;
        box-sizing: border-box;
        padding: 50px;
        margin-bottom: 90px;
        border-radius: 20px;

    }

    footer{
        bottom:30px;
    }

    .atas{
        margin-bottom: auto;
        margin-top: auto ;
        display: flex;
        }

    .image{
        height: 30px;
        width: 30px;
        background-image: url('<?= base_url(); ?>assets/resources/home/icon-app.png');
        background-position: center center;
        background-size: cover;
        margin-bottom: auto;
    }
                
        

    .top-content{
        padding: 30px;
    }

    @media screen and ( max-width:780px){
        .content{
            /* text-align: left; */
            /* margin-left: 20px; */
            margin-top: 35%;
        }

        h2{
            font-size: 28px;
        }
        
        footer{
            bottom:0px;
        }

        .content{
            width: 95%;
            height: 600px;
            padding: 20px;
            border-radius: 10px;
        }

        h2{
            font-size: 26px;
        }

        
    }
</style>