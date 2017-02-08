<div class="comments table ">

<?php foreach($allComments as $comment): ?>


<div class="well">
                <p><?=  $comment['id']; ?>. Дата:<?=  $comment['data']; ?></p>
                <p ><?= $comment['name']; ?> (<?= $comment['email']; ?>)</p>
                <p ><?= $comment['description']; ?></p>

</div>


<?php endforeach;  ?>

</div>
