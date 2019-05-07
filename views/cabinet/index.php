<?php include ROOT . '/views/layouts/header.php'; ?>


        <div id="user">

            <h1>Кабинет пользователя</h1>
            
            <h3>Привет, <?php echo $user['name'];?>!</h3>
            <p><a href="/cabinet/edit">Редактировать данные</a></p>
            <p><a href="/user/logout/">Выйти</a></p>
            
        </div>
</wpapper>

<?php include ROOT . '/views/layouts/footer.php'; ?>