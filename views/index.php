<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<div class="container">
    <form action="" id="ajax_form" name="ajax_form" method="post" class="well form-horizontal" enctype="multipart/form-data" >
        <fieldset>
        <h1>Test Work</h1>
        <div class="form-group">
            <label for="InputEmail1" class="col-md-2 control-label"></label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputName" class="col-md-2 control-label"></label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="name" placeholder="ФИО" name="name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input type="number" class="form-control" id="telephone" placeholder="Телефон" name="tel">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputComments" class="col-md-2 inputGroupContainer"></label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <textarea class="form-control" id="comments" rows="4" name="comment"
                              placeholder="Ваши комментари"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile" class="col-md-2"></label>
            <div class="col-md-8"">
                <input type="file" id="file" name="file">
                <p class="sendMsg"></p>
            </div>
        </div>
        <div class="alert alert-success" role="alert" id="success_message">Success <i
                class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.
        </div>
            <div class="form-group">
            <div id="messages" class="col-md-8 col-md-offset-2"></div>
                </div>
        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-8">

                <button type="submit" class="btn btn-warning" value="Отправить" id="btn_submit" name="btn_submit">
                    Отправить
                </button>
            </div>
        </div>
</fieldset>
    </form>
    <?php include(ROOT . '/views/result.php') ?>
    <div id="result">
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="../js/ajax_validation.js"></script>

</body>

</html>