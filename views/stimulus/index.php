<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
?>

    <p>
        <?= Html::button('tambah data', ['class' => 'btn btn-primary']) ?>
    </p>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'kode_bagian',
            'teks',
            'catatan',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
            ],
        ]
    ])
?>