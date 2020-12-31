<?php
/* @var $this yii\web\View */
?>


<?php
    foreach($news as $blog){
        echo '<h2>'.'<a href='.'index.php?r=news%2Fnews-detail&id_news='.$blog->id_news.'>'.$blog->Judul.'</a>'.'</h2>';
        echo '<p><span class="label label-danger">'.$blog->Tanggal_Pembuatan.'</span></p>';
        echo '<p>'.$blog->Konten.'</p>';
        echo '<br>';

    }
?>