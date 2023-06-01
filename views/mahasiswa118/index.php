<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?=
    Html::a('Tambah Mahasiswa',['create'],['class' => 'btn btn-primary']);
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id118',
            'no_induk_mahasiswa118',
            'nama_mahasiswa118',
            'kelas118',
            'status118',
            ['class' => ActionColumn::className()]   
        ]
    ]);
?>