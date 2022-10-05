<html> 
    <head>
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 5</title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head>
    <body> 
         <h1>Магазин "Автозапчасти" (база данных)</h1> 
         <h2>Удаление заказа</h2> 
         <?php 
         $idzakaz = $_REQUEST['idzakaz']; 
        $handle = new mysqli('localhost', 'm96218kt_w', 'QLs7cK&9', 'm96218kt_w');
         $query = "DELETE FROM zakaz WHERE idzakaz=$idzakaz"; 
         $result = $handle->query($query); 
         if ($result) echo "Данные удалены"; 
         if (!$result) echo "Ошибка удаления данных"; 
         echo "<p><a href='index.php'>Принятые заказы</a>"; 
         ?> 
    </body> 
</html> 