<?php

require_once (ROOT . '/model/Comments.php');


class commentsController
{
    public function actionView () {
        $allComments = Comments::getComments ();
        require_once (ROOT . '/views/index.php');
        return true;
    }
    public function actionAjax()
    {
        if (isset($_FILES['file']) ) {
            $uploadFile = Comments::uploadFile();
    }
        else {
            $_FILES['file']='Файл не загружен';
        }
        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['comment'])) {
            $newComments = Comments::addComments();
            $allComments = Comments::getLastComment();
            $sendComments = Comments::sendComment();
            require_once (ROOT . '/views/result.php');
        }
        return true;
        }

}
