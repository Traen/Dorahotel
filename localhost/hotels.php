<?php

    $db = new PDO("mysql:host=localhost;dbname=hotel_dora;",
    "root", "root");

    $info = [];

    if ($query = $db->query("SELECT * FROM numbers")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
     } else{
        print_r($db->errorInfo());
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/hotels.css">
    <link rel="icon" href="data:,">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>  
    <link rel="stylesheet" href="hotels.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="head-container">
            <div class="logo">
                Hotel’s Dora
            </div>
                <ul class="main-menu"> 
                    <li class="text-menu"> <a href="index.php"> О нас</a> </li>
                    <li class="text-menu"> <a href="#">Посетителю</a>  </li>
                    <li class="text-menu"> <a href="#">Отзывы</a>  </li>
                    <li class="text-menu"> <a href="#">Вопросы</a>  </li>
                    <li class="text-menu"> <a href="#">Заявка</a>  </li>
                </ul>
           </div>
       </div>
    </header>
    <main>
        <div class="container-hotel">
            <ul class="hotels-number">
                <?php foreach ($info as $data): ?>
                    <li class="spisok">
                        <div class="img-hotel-number">
                            <img src="<?php echo $data['img']; ?>" alt="room1" width="554" height="421">
                        </div>
                        <div class="text-hotel">
                            <div class="header-text">
                                <div class="vid">
                                <?php echo $data['views_number']; ?>
                                </div>
                                <div class="komnati">
                                <?php echo $data['rooms']; ?>
                                </div>
                            </div>
                            <div class="description">
                            <div class="opic">
                                Описание:
                            </div>
                            <div class="text-desc">
                            <?php echo $data['description']; ?>
                            </div>   
                            </div>
                            <div class="sum-cont">
                                <div class="vue">
                                    <div id="app-<?php echo $data['vue_number']; ?>">
                                        <div id="show-modal" @click="showModal = true">Подробнее</div>
                                        <script type="text/x-template" id="modal-template"> 
                                            <transition name="modal">
                                            <div class="modal-mask">
                                                    <div class="modal-wrapper">
                                                    <div class="modal-container">
                                                        <div class="img-hotel-number">
                                                            <div class="vid-nomera">
                                                                Люкс номер
                                                            </div>
                                                            <img src="<?php echo $data['img']; ?>" alt="" width="550" height="450">
                                                        </div>
                                                        <div class="text--hotel">
                                                            <div class="text-desc-new">
                                                                <div class="vid-nomera">Описание:</div>
                                                                <div class="description">
                                                                    Двухъярусный номер 1 категории. В 1-й комнате двуспальная кровать, в другой комнате - диван, мини-кухня, санузел с ванной. Led TV, холодильник, микроволновая печь, чайный набор, чайник, кондиционер, сейф, фен, телефон, тапочки и халаты. Номера с французским 
                                                                </div>
                                                                <ul class="uslugi"> <div class="glav">Входящие услуги:</div>
                                                                    
                                                                    <li>Бесплатный завтрак, обед и ужин.</li>
                                                                    <li>
                                                                    Вход в зону отдыха
                                                                    </li>
                                                                    <li>
                                                                    Обслуживание персонала
                                                                    </li>
                                                                    <li>
                                                                    Консультация по вашим вопросам в любое время суток.
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="footer-cont-hotel">
                                                                <div class="favor">
                                                                    <i class="fa-regular fa-star" id="icon" style="padding-right: 15px;"></i>  Добавить в избарнное
                                                                </div>
                                                                <div class="bronir"> 
                                                                    <div class="price-num">
                                                                        <?php echo $data['price']; ?>
                                                                    </div>
                                                                    <button class="bron">
                                                                        Забронировать
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <img src="svg/highlight_off_black_24dp.svg" alt="baseline_highlight_off_black_24dp.png" class="modal-default-button" width="60" height="60" @click="$emit('close')">
                                                        </slot>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                            </transition>
                                        </script>
                                        <modal v-if="showModal" @close="showModal = false">
                                        <h3 slot="header">custom header</h3>
                                        </modal>
                                    </div>
                                </div>
                                <div class="price">
                                <?php echo $data['price']; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="vue/app.js"></script>
    <script src="https://kit.fontawesome.com/b5d1fe00f3.js" crossorigin="anonymous"></script>
    <script src="libs/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>