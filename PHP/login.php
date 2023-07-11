<?php
    session_start();

    require_once "connect.php";

    $connect = @new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($connect -> connect_errno != 0)
    {
        echo "error: ".$connect -> connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['password'];
        $email = $_POST['email'];

        $sql = "SELECT * FROM users WHERE userName='$login' AND userPassword='$haslo' AND userEmail='$email'";

        if($results = $connect -> query($sql))
        {
            $ile_user = $results -> num_rows;

            if($ile_user > 0)
            {
                $_SESSION['zalogowany'] = true;

                $row = $results -> fetch_assoc();
                $_SESSION['userId'] = $row['userId'];
                $_SESSION['userName'] = $row['userName'];

                $results -> close();
                header('Location: ../index.php');
            }
            else
            {
                $_SESSION['fail'] = '<span style="color: red">nieprawidlowy login lub haslo</span>';
                header('Location: ../login_form.php');
                $connect -> close();
            }
        }
        $connect -> close();
    }
?>