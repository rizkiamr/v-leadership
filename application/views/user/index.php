<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<body>
        <div class="top-bar shadow justify-content-left fixed-top text-body" style=" width: 100% ; height: 90px;  background: #fff; ">
            <div class="container top-content">
                <div class="atas">
                    <div class="image" ></div> 
                    <h5 class="ml-2 mt-1 " > V-Leadership</h5> 
                </div>   
                
            </div>
        </div>

    <div class="container mt-5">
    <h2 style="margin-top: 150px; color:#fff;">Pilih Kandidat calon Ketua </h2>
            <hr style="height: 1px; background-color:#fff;">
        <div class="content-container">
           
            <?php foreach($ketua_1 as $daftar): ?>
            <div class="card   border-0 shadow-sm" style="width: 18rem;" data-aos="fade-left">
            <div bg-img="<?= base_url();?>/assets/resources/kandidat/<?= $daftar['foto'];?>" class="card-img-top img" > </div>
            <div class="card-body">
                <h5 class="card-title"><?= $daftar['nama']; ?></h5>
                <p class="card-text text-body"><?= $daftar['kelas'];?></p>

                <div id="collapse" style="display: none;">
                    <p ><?= $daftar['visi']?></p>
                </div>

            
                <a href="<?= base_url();?>user/detail_ketua_1/<?= $daftar['id']; ?>" class="btn btn-success">pilih</a>
            </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
<!-- footer -->
    <footer class=" justify-content-center text-center mt-4" style="padding: 20px; width:100%; background: #fff;">
    <div class="footer-container" >
        <div class="social-media">
        <h6 class="text-body mt-4" ><i class="far fa-copyright"></i> Satria Herman 2020  </h6>
            <a href="https://www.facebook.com/satria.herman.9465"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
            <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
        </div>
    </div>
</footer>

<style>
    body{
        background:#2ab7ca;
        font-family: 'poppins' , sans-serif;
        overflow: scroll;
    }

    
     /* top nav */
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


    .content-container{
        margin-top: 70px;
        display: flex;
    }

    .img{
        width: 100%;
        height: 270px;
    }
    .card{
        position: relative;
        padding-bottom: 40px;
        margin-left: 40px;
    }

    .btn{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        bottom: 20px;
    }

    @media only screen and ( max-width : 768px){
        .content-container{
            display: flex;
            flex-direction: column;
            margin: auto;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .card{
            margin-top: 20px;
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }
</style>

    <script>

        AOS.init({
            once : true,
            delay : 200,
            duration: 600
        });
        
        window.onload = function(){
            const render_image = () => {
                let image = document.querySelectorAll('.img');
                image.forEach( img => {
                    let bg_img = img.getAttribute('bg-img');
                    img.style.backgroundImage = `url('${bg_img}')`;
                    img.style.backgroundPosition = 'center center';
                    img.style.backgroundSize = 'cover';
                } )
            }

            render_image();
        }
    </script>

