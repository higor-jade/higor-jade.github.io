<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Login</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__forms">
                    <form id="loginForm" action="login.php" method="post">
                        <h1 class="login__title">Login</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Nome" class="login__input" id="username" name="username" required>
                        </div>
                            <br>
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Senha" class="login__input" id="password" name="password" required>
                        </div>
                        <?php
                        session_start();
                        if (isset($_SESSION['error'])) {
                            echo '<h5 style="color: red; text-align= center;">' . htmlspecialchars($_SESSION['error']) . '</h2>';
                            unset($_SESSION['error']); // Remover a mensagem de erro da sessão para evitar exibi-la novamente
                        }
                        ?>
                        <a href="#" onclick="document.getElementById('loginForm').submit();" class="login__button" type="submit">Entrar</a>
                    </form>
                </div>
            </div>
        </div>
        <!--===== MAIN JS =====-->
        <script src="assets/js/script.js"></script>
    </body>
</html>