
<link rel="stylesheet" type="text/css" href="css/style.css">

<a href="index.html" class="arrow_box">на головну</a></br></br>

<form method="post">
    <h2 style="color:red">Введіть текст англійською</h2>
    <h3>Слова з тексту будуть відсортовані за алфавітом</br>
        Повторювані слова не виводяться</h3>
    <p> <textarea rows="10" cols="85" type="textarea" name="text" required ></textarea></p>
    <p><input  type="submit" value="Сортувати"/></p>
</form>


<?php
if(!$_POST['text']) {

}else{
    $text = $_POST['text'];
    $text = preg_replace("|[^\d\w ]+|i","",strtolower($text));//забираємо символи та перетворюємо в нижній регістр
    $text = preg_replace("|[\s]+|i"," ",$text);//забираємо зайві пробіли
    $text = preg_replace('/\d/','',$text);//забираємо цифри
    $pieces = explode(" ", $text);//перетворення в масив
    $pieces = array_unique($pieces);//залишаємо унікальні значення
    natcasesort($pieces);//сортування в алфавітному порядку

    foreach($pieces as $piece) {
        echo $piece, "</br>";
    }
}
?>

