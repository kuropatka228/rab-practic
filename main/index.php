<?php require_once '../functions/connect.php';?>
<?php
$sql = $pdo->prepare("SELECT * FROM header");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);

$sql2 = $pdo->prepare("SELECT * FROM partners");
$sql2->execute();
$partners = $sql2->fetchAll(PDO::FETCH_OBJ);

$sql3 = $pdo->prepare("SELECT * FROM contacts");
$sql3->execute();
$contacts = $sql3->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Забайкальский Экологический центр</title>
    <style>

a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: none;
    color: inherit; /* Унаследуем цвет от родителя */
}

h-left { 
    position: relative;  
} 

h-left::after { 
    margin-bottom: -3px; 
    content: ""; 
    position: absolute; 
    bottom: 0; 
    left: 50%; 
    transform: translateX(-50%); 
    width: 0; 
    height: 1px; 
    background-color: #fff; 
    transition: width 0.3s ease-in-out;  
} 

.menu-left { 
    max-width: 630px; 
    margin-left: 50px; 
    margin-right: 50px; 
    color: white; 
    font-family: "Inter", sans-serif; 
    font-optical-sizing: auto; 
    font-weight: 300; 
    font-size: 15px; 
    font-style: normal; 
    display: flex; 
    flex-direction: row; 
    gap: 13px; 
}

.menu-link {
    text-decoration: none; /* Убираем подчеркивание */
    color: inherit; /* Унаследуем цвет от родителя */
    font-family: "Inter Tight", sans-serif;
}

.menu-link:hover {
    text-decoration: none; /* Добавляем подчеркивание при наведении */
}


.social-icon, .menu {
    color: white;
}

.social-icon, .menu {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
    padding: 0 0 0 0;
    font-family: "Inter Tight", sans-serif;
}

.h-second-services{
margin-top: 20px;
}

.first-services, .second-services, .third-services, .fourth-services {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 430px;
    text-align: center;
}

    </style>

    <link rel="stylesheet" href="./style.css">
    <!-- шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head> 
<body>

    <div class="main-page">
        <div class="back-color">
        <div class="header">
            <div class="menu-right">
            <h-right><a href="../main/">ЭКО ЦЕНТР</a></h-right> 
                <div class="logo">
                    <img src="/image/logo.png" alt="листочек" style="width: 40px; height: auto;"><a href="https://framer.com/projects/ZABECO--HKS5v1FLW2hsQY1HRCuY-H4Pz8?node=CA8UDd1hr"></a>
                </div>
            </div>
    <div class="menu-left">  
        <h-left>
        <a class="menu-link" href="../about-us/about-us-index.html"><?php echo $res["about"]; ?></a>  
        </h-left>
        <h-left>
        <a class="menu-link" href="../services1/services1-index.html"><?php echo $res["services"]; ?></a>   
        </h-left>  
        <h-left>
        <a class="menu-link" href="../contact/contact-index.html"><?php echo $res["contact"]; ?></a>  
        </h-left>
        <h-left>
        <a class="menu-link" href="../documents/documents-index.html"><?php echo $res["documents"]; ?></a> 
        </h-left>
    </div>


        </div>
    </div>
        <div class="first-screen">
            <div class="name">
                <h-name>ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ <br> УЧРЕЖДЕНИЕ «ЗАБАЙКАЛЬСКИЙ КРАЕВОЙ <br> ЭКОЛОГИЧЕСКИЙ ЦЕНТР»</h-name>
            </div>
            <div class="buttons-contact"> 
                <div class="contact"> 
                    <h1><?php echo $contacts["phone"]?></h1> 
                </div> 
 
                <div class="email"> 
                    <h2><?php echo $contacts["email"]?></h2> 
                </div> 
            </div>
        


</div>
        </div>
        <div class="block-one">
            <div class="avatar">
                <div class="organization">
                        <img class="photo-organizator" src="/image/organizator.png">
    
                    <div class="location">
                        <img src="/image/Geo.png" alt="геолокация">
                        <h-location>Богомягкова, 23 <br> ​Центральный район, Чита <br> 672027</h-location>
                    </div>
                </div>
            </div>
                <div class="our-organization">
                    <div class="organizator-name">
                        <h-our>
                            Наша организация
                        </h-our>
                        <h-organizator>
                            Директор <br> Жигарев Дмитрий Владимирович
                        </h-organizator>
                    </div>
                    <div class="description">
                        <h-description>
                            Деятельность Учреждения регулируется Конституцией Российской Федерации, Гражданским кодексом Российской Федерации, Федеральным законом «Об охране окружающей среды». 
                            <br>
                            <br>
                            Учреждение находится в ведомственном подчинении Министерства природных ресурсов Забайкальского края.
                            <br>
                            <br>
                            Учреждение создано в целях выполнения работ, оказания услуг в целях обеспечения реализации предусмотренных законодательством Российской Федерации полномочий Минприроды Забайкальского края:
                            <br>
                            <br>
                            В сфере охраны окружающей среды
                            <br>
                            <br>
                            В сфере охраны атмосферного воздуха
                            <br>
                            <br>
                            В сфере обращения с отходами производства и потребления
                            <br>
                            <br>
                            В области безопасности гидротехнических сооружений, находящихся в собственности Забайкальского края
                            <br>
                            <br>
                            В области государственного мониторинга водных объектов
                        </h-description>
                    </div>
                    <div class="more">
                        <h1><a class="menu-link" href="../about-us/about-us-index.html">Подробнее</a></h1>
                    </div>
                </div>
        </div>
 
        </div>
        <div class="services">
            <div class="description-services">
                <h-services>
                    Услуги
                </h-services>
                <h-desc-services>
                    Наша организация занимается услугами в области экологического проектирования: <br> разработка проектов НДВ, ПНООЛРО, расчет платы за негативное воздействие на окружающую среду и т.д.
                </h-desc-services>
            </div>
        </div>
        <div class="four-services"> 
            <div class="first-services"> 
                <div class="image-wrapper">
                <a href="../services1/services1-index.html" class="a-services">
                        <img src="/image/menu_1.png" alt="" > 
                        <img src="/image/menu_hover1.png" alt="" class="hover-image"> 
                    </div>
                    <h-first-services>РАЗРАБОТКА ПРОЕКТОВ НДВ</h-first-services> 
                </a>
            </div> 
            <div class="second-services"> 
                <div class="image-wrapper">
                <a href="../services2/services2-index.html" class="a-services">
                    <img src="/image/menu_2.png" alt="" > 
                    <img src="/image/menu_hover2.png" alt="" class="hover-image"> 
                </div>
                <h-second-services>РАСЧЕТ ЗА НЕГАТИВНОЕ ВОЗДЕЙСТВИЕ <br> НА ОКРУЖАЮЩУЮ СРЕДУ</h-second-services> 
                </a>
            </div> 
            <div class="third-services"> 
                <div class="image-wrapper">
                <a href="../services3/services3-index.html" class="a-services">
                    <img src="/image/menu_3.png" alt="" style="width: 89px; height: 90px;"> 
                    <img src="/image/menu_hover3.png" alt="" class="hover-image"> 
                </div>
                <h-third-services>РАЗРАБОТКА ПНООЛРО</h-third-services> 
                </a>
            </div> 
            <div class="fourth-services"> 
                <div class="image-wrapper">
                <a href="../services4/services4-index.html" class="a-services">
                    <img src="/image/menu_4.png" alt=""> 
                    <img src="/image/menu_hover4.png" alt="" class="hover-image"> 
                </div>
                <h-fourth-services>ЭКОЛОГИЧЕСКИЙ АУТСОРСИНГ</h-fourth-services> 
                </a>
            </div> 
        </div>

        <?php
                    if ($partners) {
                        echo '<div class="partners">';
                        echo '<div class="heading-partners">';
                        echo '<h-heading-partners>Наши партнеры</h-heading-partners>';
                        echo '<h-partners-desc>Мы гордимся тем, что работаем в тесном сотрудничестве с ведущими организациями в нашей отрасли.</h-partners-desc>';
                        echo '</div>';
                        echo '<div class="list-partners">';
                
                        foreach ($partners as $partner) {
                            echo '<div class="area-and-description">';
                            echo '<div class="area">';
                            echo '<img src="/image/' . htmlspecialchars($partner->filename) . '" alt="' . htmlspecialchars($partner->title) . '">';
                            echo '</div>';
                            echo '<h-area>' . htmlspecialchars($partner->title) . '</h-area>'; // Используем заголовок из базы данных
                            echo '</div>';
                        }
                
                        echo '</div>'; // Закрываем div.list-partners
                        echo '</div>'; // Закрываем div.partners
                    } else {
                        echo "Нет результатов.";
                    }
                    ?>


        <div class="faq">
            <h-faq>Часто задаваемые вопросы</h-faq>
            <div class="container-faq"> 
                <div class="question" onclick="toggleAnswer(this)"> 
                    <span class="plus-icon">+</span> 
                    Что за отчет 2 ТП отходы и кто должен его сдавать? 
                </div> 
                <div class="answer"> 
                    <p>Здравствуйте! Экологическая отчетность 2-ТП (отходы) — это сведения об образовании, обработке, утилизации и размещении отходов производства и потребления. И хотя форма утверждена приказом Росстата № 627 от 09.10.2020, сдавать отчетность необходимо в Росприроднадзор. Отчётность по форме «2-ТП (Отходы)» предоставляют юридические лица, индивидуальные предприниматели, осуществляющие деятельность в области обращения с отходами производства и потребления. Учету подлежат все виды отходов производства и потребления, находящиеся в обращении у респондента, кроме радиоактивных. Предельный срок сдачи в территориальное отделение РПН — до 1 февраля</p> 
                </div> 
                <div class="question" onclick="toggleAnswer(this)"> 
                    <span class="plus-icon">+</span> 
                    Можно ли сдавать в электронном виде отчет по кадастру? 
                </div> 
                <div class="answer"> 
                    <p>Формы по региональному кадастру отходов предоставляются только на бумажном носителе в 2-х экземплярах.</p> 
                </div> 
                <div class="question" onclick="toggleAnswer(this)"> 
                    <span class="plus-icon">+</span> 
                    Можете ли вы разработать паспорта на опасные отходы? 
                </div> 
                <div class="answer"> 
                    <p>Здравствуйте, да конечно. Телефоны для связи со специалистами 35-67-91, 32-46-39.</p> 
                </div>
                <div class="question" onclick="toggleAnswer(this)"> 
                    <span class="plus-icon">+</span> 
                    Какие документы нужны для оформления вашего заключения, при оформлении документов на дом? 
                </div> 
                <div class="answer"> 
                    <p>Здравствуйте! Для уточнения Вашего вопроса и консультации позвоните по тел. 32-46-39.</p> 
                </div> 
            </div>
        </div>
        <div class="map"> 
            <div class="header-map">
                <h-map>
                    Также мы будем рады видеть вас в <br> нашем офисе в  будние дни
                </h-map>
                <div class="business-hours">
                    <div class="full-map">
                        <div class="work-day">
                            <h-hours>Часы работы</h-hours>
                            <div class="lunch">
                                <h3>Обед</h3> 
                                <h4>13:00 - 14:00</h4>
                            </div>
                            <div class="full-map line"></div>
                            <div class="first-day">
                                <h3>Понедельник</h3> 
                                <h4>08:45 - 18:00</h4>
                            </div>
                            <div class="first-day">
                                <h3>Вторник</h3> 
                                <h4>08:45 - 18:00</h4>
                            </div>
                            <div class="first-day">
                                <h3>Среда</h3> 
                                <h4>08:45 - 18:00</h4>
                            </div>
                            <div class="first-day">
                                <h3>Четверг</h3> 
                                <h4>08:45 - 18:00</h4>
                            </div>
                            <div class="first-day">
                                <h3>Пятница</h3> 
                                <h4>08:45 - 16:45</h4>
                            </div>
                            <div class="weekends-saturday">
                                <h3>Суббота</h3> 
                                <h4>Закрыто</h4>
                            </div>
                            <div class="weekends-sunday">
                                <h3>Воскресенье</h3> 
                                <h4>Закрыто</h4>
                            </div>
                        </div>
                        <div class="geo-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d613.5619477159626!2d113.49061178337388!3d52.03879977782493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTLCsDAyJzIwLjMiTiAxMTPCsDI5JzI0LjciRQ!5e0!3m2!1sru!2sru!4v1723978682102!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <ul class="social-icon">
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
        </ul>
        <ul class="menu">
          <li class="menu__item"><a href="../about-us/about-us-index.html" class="menu__link" href="#">О нас</a></li>
          <li class="menu__item"><a href="../services1/services1-index.html" class="menu__link" href="#">Услуги</a></li>
          <li class="menu__item"><a href="../contact/contact-index.html" class="menu__link" href="#">Контакты</a></li>
          <li class="menu__item"><a href="../documents/documents-index.html" class="menu__link" href="#">Документы</a></li>
    
        </ul>
        <p>&copy;ecofondchita@yandex.ru | 8 (3022) 32 10 07 </p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="qwe.js"> </script> 
</body>
</html>