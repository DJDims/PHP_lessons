<?php
include_once('header.php');
?>
<form action="sendForm.php" method="POST">
    <div class="form_element">    
        <label for="name">Имя</label>    
        <input type="text" name="name" placeholder="Ваше имя" required>
    </div>
    <div class="form_element">
        <label for="adress">Адрес</label>
        <input type="text" name="adress" placeholder="Введите ваш адрес" required>
    </div>
    <div class="form_element">
        <label for="phone">Телефон</label>
        <input type="text" name="phone" placeholder="Ваш телефон" required>
    </div>
    <div class="form_element">
        <label for="quantity">Количество</label>
        <input type="number" name="quantity" min="1" max="10" value="1" required>
    </div>
    <div class="form_element">
        <label for="product">Суши</label>
        <select name="product">
            <?php
                include_once('array.php');
                foreach ($sushiArray as $key => $value) {
                    echo '<option value="'.$key.'">'.$value['name'].' '.$value['quantity'].'шт. '.$value['price'].'€</option>';
                }
            ?>
        </select>
    </div>
    <div class="form_element">
        <input type="submit" name="send" id="submit" value="Оформить заказ">
    </div>
</form>
<?php
include_once('footer.php');
?>