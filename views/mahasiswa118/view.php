<?php
    use yii\widgets\DetailView;
?>
<?=
    DetailView::widget([
        'model' => $mahasiswa118,
        'attributes' => [
            'id118',
            'no_induk_mahasiswa118',
            'nama_mahasiswa118',
            'kelas118',
            'status118',
        ],
    ]);
?>