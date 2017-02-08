<?php

class Comments
{
    public static function getComments()
    {
        $pdo = Db::getConnection();
        $sth = $pdo->query("SELECT * FROM comment");
        $sth->execute();
        $allComments= $sth->fetchAll();
        return $allComments;
    }
    public static function addComments()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $comment = $_POST['comment'];
        $pdo = Db::getConnection();
        $sth = $pdo->prepare("INSERT INTO comment (email,name,telephone, description) VALUES (:email, :name,:telephone,:description)");
        $sth->bindParam(':email', $email);
        $sth->bindParam(':name', $name);
        $sth->bindParam(':telephone', $tel);
        $sth->bindParam(':description', $comment);
        return  $sth->execute();
    }
    public static function uploadFile(){
        $uploaddir = (ROOT . '/uploads/');
        $file_name =date('Y-m-d H-i-s') .'_' . $_FILES['file']['name'];
        $uploadFile = $uploaddir . basename($file_name);
        $uploadFile = iconv("utf-8", 'cp1251', $uploadFile);
       return move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    }
    public static function getLastComment() {
        $pdo = Db::getConnection();
        $sth = $pdo->query(" SELECT * FROM comment ORDER BY id DESC LIMIT 1 ");
        $sth->execute();
        $allComments = $sth->fetchAll();
        return $allComments;
    }
    public static function sendComment(){
        $email = $_POST['email'];//Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Форма рассылки'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>
                        <p>Спасибо за ваше сообщение, с Вами свяжутся)))</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@myEmail.com>\r\n"; //Наименование и почта отправителя
       return mail($email, $subject, $message, $headers); //Отправка письма с помощью функции mail
    }
}
