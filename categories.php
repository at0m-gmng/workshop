<?  
    $id_category = $_GET['id'];
    setcookie ("id_category", $id_category );
    // // echo $_COOKIE['id_category'];
    // setcookie ("category_num", $_POST['category']);
    // // echo $_COOKIE['category_num'];
    // if($num = (isset ($_COOKIE["category_num"]))) {
    //     $category = $_COOKIE["category_num"];
    // }
    // else {
    //     $category = "Выберите сортировку";
    // }
    $category_katalog = $_POST['category']; 
    // $category = $_POST['category'];
    echo $category_katalog;

    if ( empty($category_katalog)   ) {
        $category = $_COOKIE['sort_name'];
    } else {
        $category  = $category_katalog;
        // setcookie ("sort_name",  $category);
    }


    // $category =  $_COOKIE['sort_name'];
    // echo $category;

    $server = $_SERVER['SERVER_ADDR'];
    $username = 'root';
    $password = '';
    $db_name= 'my_first';
    $charset = 'utf8';

    $connection = new mysqli ($server, $username, $password, $db_name);
    
    // $category = $_POST['category'];
    switch($category) {
        case 'Название А-Я':
            $sql = "ORDER BY `product_name` ASC";
            break;
        case 'Название Я-А':
            $sql = "ORDER BY `product_name` DESC";
            break;
        case 'Цена А-Я':
            $sql = "ORDER BY `product_price` ASC";
            break;
        case 'Цена Я-А':
            $sql = "ORDER BY `product_price` DESC";
            break;
        // default:  $sql = "SELECT * FROM `products` ";
        // $category = "Выберите сортировку";
    }
    // $result = $connection->query($sql);   
                  

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link href= "style.css" rel="stylesheet">
    <link href= "style.css" rel="stylesheet" media=" (max_width:1024px)">
</head>
<body>
<header class="header">
        <ul class="header_menu">
            <li><a href="" class=""><b>О магазине</b></a></li>
            <li><a href="" class=""><b>Помощь</b></a></li>
            <li><a href="" class=""><b>Новости</b></a></li>
            <li><a href="" class=""><b>Гарантия</b></a></li>
            <li><a href="" class=""><b>Сервис</b></a></li>
            <li><a href="" class=""><b>Вопрос - Ответ</b></a></li>
            <li><a href="" class=""><b>Обратная связь</b></a></li>
            <li><a href="" class=""><b>Оплата и Доставка</b></a></li>
            <li><a href="" class=""><b>Правила дистанционной торговли</b></a></li>
        </ul>
    <div class="header_content">
        
        <dib class=""><a href="index.php">
            <img src="images/logo100x110.jpg" alt="" class="header_content_logo" url="">
            </a>
        </dib>
        <div class="header_content_name"><p>интернет-магазин<br>электроинструмента</p>
        </div>
        <div class="header_content_location"><br><h1>Барнаул</h1><p>+7 (3852) 223-322<br>Работаем 10-19, вых. воскр<br>заказ на сайте круглосуточно</p>
        </div>
        <div class="header_content_all">
            <div class="a">
                <a href="" class="">Регистрация</a>  |
                <a href="" class="">Вход</a>
            </div>
            <div class="b">
                <a href="" class="">Ваша корзина пуста</a>
            </div>
            <div class="c">
                <p><input type="search" name="search" placeholder="поиск по сайту"> <input type="submit" value="искать"></p>
            </div>
        </div>
        
    </div>
</header>
<div class="body">
    <div>
        <div class="body_body">
            <div class="body_tovar">
                <div class="Rec0">
                    <b class="Rec">Рекомендуем</b>
                    <div class="sorting">
                        <form class="form_sorting" name="form1" action="" method="POST" enctype="multipart/form-data">
                            <b>Сортировать по:</b>
                            <label class="form_label form_label_2" for="category"></label>
                            <select name="category"> 
                                <option ><?php echo $category; ?></option>
                                <option value="Название А-Я"  >Название А-Я</option>
                                <option value="Название Я-А"  >Название Я-А</option>
                                <option value="Цена А-Я"  >Цена А-Я</option>
                                <option value="Цена Я-А"  >Цена Я-А</option>
                            </select>
                            <input class="form_bottom bottom-sorting" type="submit"  value="Выбрать"/>    
                        </form>
                    </div>
                    <div class="add">
                        <a href="index4.php" class=""><b>Добавить элемент</b></a>
                    </div>
                </div>
                <div class="body_tovar_stroka_1">
                    <!-- Циклом выводим файлы из массива -->
                    <?php
                    //               ВЫВОД ИЗ ФАЙЛА
					// $products= file ('my_form_reports.txt');
                        // foreach ($products as $key => $value)
                            // {
                                // $PRODUCTS[] = array (explode (", ", $products[$key])); }
                                // for($i=1;$i<=$key; $i++):

                        // switch($id_category) {
                        //     case '1':
                                // $sql0 = "SELECT * FROM `products` WHERE `id_category` = 1";
                            //     $sql0 = "SELECT * FROM `products` WHERE `id_category` = $id_category $sql";
                            //     break;
                            // case '2':
                            //     $sql0 = "SELECT * FROM `products` WHERE `id_category` = $id_category $sql";
                            //     break;
                            // case '3':
                            //     $sql0 = "SELECT * FROM `products` WHERE `id_category` = $id_category $sql";
                            //     break;
                            // case '4':
                            //     $sql0 = "SELECT * FROM `products` WHERE `id_category` = $id_category $sql";
                            //     break;
                            // case '5':
                            //     $sql0 = "SELECT * FROM `products` WHERE `id_category` = $id_category $sql";
                            //     break;
                            // default:  $sql0 = "SELECT * FROM `products` ";
                        
                        // }

                        if ($id_category) {
                            $sql0 = "SELECT * FROM `products` WHERE `id_category` = $id_category $sql";
                        }

                            $result0 = $connection->query($sql0);
 
                            // while (   ($row = $result->fetch_assoc()) || ($row= $result0->fetch_assoc() ) ) {
                            while (   ($row = $result0->fetch_assoc()) ) {
                    ?>
                        <div class="tovar_0">
                            <a><p class="banner"><?php echo $row['product_name']; ?></p></a> 
                            
                            <div class="banner_length">
                            <img src="images_min/<?php echo $row['product_image']; ?>"> 
                                <!--  Первичный вариант - ВЫВОД ЧЕРЕЗ ФУНКЦИЮ: $result_set = $connection->query("SELECT `product_image` FROM `products` WHERE `id`='$i' "); printResult($result_set); 
                                        ВЫВОД ИЗ ФАЙЛ:          echo $PRODUCTS[$i][0][2]; -->
                            <div class="div_commit">
                            <p class="commit"><?php
                                $string = $row['product_commit'];
                                $string = substr($string, 0, 115);
                                $string = rtrim($string, " !*/?,.-");
                                $string = substr($string, 0, strrpos($string, ' '));
                                if ($string==true){
                                echo $string."... "; }
                                else {
                                    echo $row['product_commit'];
                                }
                            ?>
                            </p>
                            </div>
                            </div>
                            <div class="t_0">
                                <p class="t"><b><?php echo $row['product_price']; ?> руб</b></p>
                                <button class="bottom-sorting">
                                    <p>В корзину</p>
                                    <!-- <a class="kor1"><p class="kor0">В корзину</p></a> -->
                                </button>
                            </div>  
                        </div>
                    <?php   
                        } // endfor;
                    ?>
                    <!-- Вот до сюда -->
                </div>
            </div>
            <div class="body_text">
                    <h1 class="body_magazine_banner">О магазине</h1>
                    <div class="body_magazine">
                        <p style="margin: 0;">УВАЖАЕМЫЕ ПОСЕТИТЕЛИ!<br> Наша компания занимается продажей профессионального, любительского инструмента и оборудования более 15 лет. Сегодня ассортимент компании насчитывает более 10 тысяч наименований высококачественной техники и расходных материалов. У нас Вы можете приобрести: Аккумуляторный инструмент: Дрели-шуруповерты, Ударные винтоверты, Перфораторы, Угловые шлифовальные машины (Болгарки), Эксцентриковые шлифовальные машины, Сабельные и дисковые пилы, Плиткорезы, Краскопульты, Пистолеты для герметика, Лазерные уровни и дальномеры. Сетевые дрели и шуруповерты, перфораторы и отбойные молотки, углошлифовальные машины, монтажные пилы, полировальные машины, фрезеры, рубанки, вибрационные и ленточные шлифмашины, лобзиковые, дисковые и сабельные пилы, торцовочные пилы, распиловочные станки, плиткорезы, штроборезы, технические фены, пылесосы, краскопульты. Садово-парковая техника: Газонокосилки, Триммеры, Мотокосы, Культиваторы, Электро и Бензопилы, Пылесосы, Опрыскиватели. Все товары сертифицированы, на них распространяется гарантия производителя.
                        </p>
                    </div>
            </div>
        </div>
        <div class="body_menu">
            <ul><h1 class="Kat">Каталог</h1>
                <div class="body_menu_li">
                <?php
                    $sql3 = "SELECT * FROM `categories`";

                    $result3 = $connection->query($sql3); 
                    while ( $row = $result3->fetch_assoc() ) {
                ?>
                <li><a class="category" href="categories.php?id=<?=$row['id_category'];?>"><?php echo $row['category']; ?></a></li>
                <? } ?>
                </div>
            </ul>
        </div>
    </div>
</div>
    <div class="footer">
    <div class="footet_logo1">
        <img src="images/visa_logo_40x13.png" alt="">
    </div>
    <div class="footet_logo2">
        <img src="images/mastercard_logo_40x24.png" alt="">
    </div>
    </div>
</body>
</html>