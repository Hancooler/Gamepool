<?php
/* @var $this yii\web\View */
use yii\widget\LinkPager;
?>



<?php
    foreach($news as $blog){
        echo '<h2>'.'<a href='.'index.php?r=news%2Fnews-detail&id_news='.$blog->id_news.'>'.$blog->Judul.'</a>'.'</h2>';
        echo '<p><span class="label label-danger">'.$blog->Tanggal_Pembuatan.'</span></p>';
        echo '<p>'.substr($blog->Konten,0,100).'....</p>';
        echo '<a class="btn btn-success" href='.'index.php?r=news%2Fnews-detail&id_news='.$blog->id_news.'>'.'lanjutkan membaca'.'</a>';
        echo '<br>';
        echo '<hr>';
    }
    
?>