<?php include ROOT . '/views/layouts/header.php'; ?>
		<div id="user">
			                 
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    
                        <h2>Регистрация на сайте</h2>
                        <form action="#" method="post">
                            <p><input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/></p><br>
                            <p><input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/></p><br>
                            <p><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></p><br>
                            <p><input type="submit" name="submit" class="btn btn-default" value="Регистрация" /></p>
                        </form>
                   
                
                <?php endif; ?>
                </div>
</wrapper>
<?php include ROOT . '/views/layouts/footer.php'; ?>