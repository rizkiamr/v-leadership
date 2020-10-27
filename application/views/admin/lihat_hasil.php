

<link rel="stylesheet" href="<?= base_url('assets/css/admin/lihat_hasil.css');?>">


    </head>
        <body>

<!-- admin sidebar -->
<nav class="nav m-auto    text-body" style="height: 68px; width:100% !important; background:  #fff; position:relative;">
             
          
             <a href="<?= base_url('admin/logout'); ?>" class="mr-5 text-body" style="text-decoration:none;  line-height: 70px; right:10px; position:absolute;"> <i class="fas fa-sign-out-alt"></i> logout </a>
         
 
         </nav>
           
             <div class="row" >
                 <div class="col-md-2">
             
                     <div class="wrapper">
 
                         <nav id="sidebar" style="  background: #fff;">
 
                             <div class="side-brand mt-3">
                                 <img src="<?= base_url() ?>assets/resources/home/icon-app.png" class="ml-4 mr-3" width="25px" height="25px" style="border-radius:100p; float:left" alt="" srcset="">
                                 <p class="brand-name">V-Leadership</p>
 
                             </div>
                             <hr class="mt-4">
                             <!-- Sidebar Header -->
                             <div class="sidebar-header text-body  mt-5" style="width: 100%;">
                                 <img src="<?= base_url() ?>assets/resources/home/icon-app.png" class="ml-4 mr-3" width="60px" height="60px" style="float:left; border-radius:100px;" alt="" srcset="">
                             
                                 <p class="mb-4">
                                 <span style="margin-top: -20px; font-weight:bold; font-size:24px">Admin</span>
                                     <!-- <br> -->
                                     <!-- <br>
                                     <br> -->
                                 <span style="font-size: 14px;">administrator</span>
                                 </p>
 
                                 
 
                                 <hr class="bg-white" style="width: 80%;">
                             </div>
 
                             <div class="sub-title ml-4 mb-3">
                                 <p class="content-subtitle" style="color:#AEAEAE; font-size:16px;" >
                                     Core
                                 </p>
                             </div>
 
                             <!-- Sidebar Links -->
                             <ul class="list-unstyled components">
                                 <li class=" item"><a href="<?= base_url() ?>admin"> <i class="fas fa-chart-line mr-3"></i>Dashboard</a></li>
                                 <li class="item"><a href="<?= base_url() ?>admin/daftar_kandidat" ><i class="fas fa-user-graduate mr-3"></i>Daftar Kandidat</a></li>
                                 <!-- Link with dropdown items -->
                                 
                                 <li class="active item"><a href="<?= base_url(); ?>admin/lihat_hasil" ><i class="fas fa-poll mr-3"></i>Lihat Hasil</a></li>
                                
                             </ul>
                         </nav>
 
                         <div id="content">
                             <button type="button" id="sidebarCollapse" class="navbar-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </button>
                         </div>
 
                     </div>
                 </div>  
                

                <div class="col-md-10 ">
                    <div class="content-container" style="margin-top: 120px; margin-left: 100px;">

                    <h2>Daftar Kandidat</h2>
                    <hr class="mb-5 bg-dark-10">

                    <div class="card-container ketua-1">
                        <!-- card -->
                        <div class="card" style="min-width:19rem; max-width:19rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $ketua_1[0]['foto'] ?>" style="width:100%; height:300px;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $ketua_1[0]['nama'] ?></h4>
                            
                                <p class="card-text "><h1 class="text-center jumlah"><?= $ketua_1[0]['jumlah'] ?></h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_1/<?= $ketua_1[0]['id'] ?>" class="btn detail btn-success" style="width: 90%;">Lihat Detail</a>
                            </div>
                        
                        </div>


                        <!-- card 2 -->

                        <div class="card" style="min-width:19rem; max-width:19rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $ketua_1[1]['foto'] ?>" style="width:100%; height:300px; background-position: center center;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $ketua_1[1]['nama'] ?></h4>
                            
                                <p class="card-text "><h1 class="text-center jumlah2"><?= $ketua_1[1]['jumlah'] ?></h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_1/${pemilih[i]['id']}" class="btn detail btn-success" style="width: 90%; ">Lihat Detail</a>
                            </div>
                        
                        </div>

                        <div class="card" style="min-width:19rem; max-width:19rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $ketua_1[2]['foto'] ?>" style="width:100%; height:300px; background-position: center 10%;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $ketua_1[2]['nama'] ?></h4>
                            
                                <p class="card-text "><h1 class="text-center jumlah3"><?= $ketua_1[2]['jumlah'] ?></h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_1/${pemilih[i]['id']}" class="btn detail btn-success" style="width: 90%; ">Lihat Detail</a>
                            </div>
                        
                        </div>

                        <div class="card" style="min-width:19rem; max-width:19rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $ketua_1[3]['foto'] ?>" style="width:100%; height:300px; background-position: center 10%;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $ketua_1[3]['nama'] ?></h4>
                            
                                <p class="card-text "><h1 class="text-center jumlah4"><?= $ketua_1[3]['jumlah'] ?></h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_1/${pemilih[i]['id']}" class="btn detail btn-success" style="width: 90%;">Lihat Detail</a>
                            </div>
                        
                        </div>



                    </div>

                  

                    </div>
                </div>
            </div>

            <hr style="width: 100%; margin-top:200px;"> 
            <footer class=" justify-content-center   text-center mt-4" style="padding: 0px 0px 25px 0; ">
                    <h6 cl><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
                    <div class="social-media">
                        <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
                        <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
                    </div>
            </footer>

          
          
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <style>
                    html{
                        overflow-x: scroll;
                    }

                    .detail{
                        position: absolute;
                        left: 50%;
                        transform: translateX(-50%);
                        bottom: 30px;
                    }
                    .card{
                        padding-bottom: 50px;
                        margin-right: 20px;
                    }

                    .card-container{
                        display: flex;
                    }

                    @media only screen and ( max-width : 768px){
                        .card-container{
                            display: flex;
                            flex-direction: column;
                            width: 100%;
                            
                        }

                        .card{
                            margin-top: 50px;
                            
                        }
                    }


            </style>
            <script>
                window.onload = function(){
                    const render_image = () =>{
                        let image = document.querySelectorAll('.img')
                        image.forEach(img => {
                            let bg_img = img.getAttribute('bg-image');
                            img.style.backgroundImage = `url('${bg_img}')`;
                            img.style.backgroundSize = 'cover';
                            
                        })
                    }

                    render_image();


                  
            function get_pemilih(){
                var xhr = new XMLHttpRequest();
                var el = document.querySelector('.jumlah')
                var el2 = document.querySelector('.jumlah2')
                var el3 = document.querySelector('.jumlah3')
                var el4 = document.querySelector('.jumlah4')
                // var el2 = document.querySelector('.masih')
                //             url : "",
                var url = '<?= base_url('admin/showHasil'); ?>';
                xhr.open("GET" , url , true);
                xhr.send()
                xhr.onload = function(){
                    if(this.readyState == 4 && this.status == 200){
                        // var i;
                         var obj = this.response
                         pemilih = JSON.parse(obj)
                        // console.log(pemilih.length)

                     
                      
                            //  console.log(pemilih[i]['jumlah'])
                             el.innerHTML = `<h1 class="text-center jumlah">${pemilih[0]['jumlah']}</h1>`
                             el2.innerHTML = `<h1 class="text-center jumlah">${pemilih[1]['jumlah']}</h1>`
                             el3.innerHTML = `<h1 class="text-center jumlah">${pemilih[2]['jumlah']}</h1>`
                             el4.innerHTML = `<h1 class="text-center jumlah">${pemilih[3]['jumlah']}</h1>`
                             
                            
                  
                        
                    
                }
            }

         
                }
            setInterval(  function(){
                 get_pemilih()

            }, 2000 )

                }

            </script>
            <script src="<?= base_url('assets/js/admin/lihat_hasil.js'); ?>">