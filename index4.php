<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href= "style.css" rel="stylesheet">
	<title>Заполнение анкеты</title> 
</head>
<body>
<div class="container" >
<form class="form" name="form1" action="index3.php" method="POST" enctype="multipart/form-data">
  <h2 class="form_title">Заполните форму товара</h2>

  <div class="form_group" >   
    <input class="form_text" type="text" name="product_name" maxlength="30" placeholder="Введите название товара"/>
    <!-- <label class="form_label">Введите Название Товара</label> -->
  </div>
  
  <div class="form_group" >
    <textarea class="form_commit"  name="commint" placeholder="Комментарии..."></textarea>
    <!-- <label class="form_label">Введите Описание Товара</label> -->
  </div>
  
  <div class="form_group form_group_2">
    <label class="form_label form_label_2" for="category">Выберите категорию</label><br><br>
    <select name="category">
      <option value="1">Аккумуляторный инструмент</option>
      <option value="2">Лазерные уровни, дальномеры</option>
      <option value="3">Сетевые дрели, шуруповёрты, миксеры</option>
      <option value="4">Перфораторы и отбойные молотки</option>
      <option value="5">Металлообработка</option>
      </select>

      <input class="form_text form_text_2" type="text" name="product_price" maxlength="15" placeholder="Введите цену товара"/>
  </div> 

  <div class="form_group" >
      <label class="form_label" for="fale">Загрузите картинку</label>
      <br><br><input class="form_file" type="file" name="img"/>
  </div>
  
  <input class="form_bottom" type="submit"  value="Отправить файл" name="input" />
</form>

</div>

</body>
</html>