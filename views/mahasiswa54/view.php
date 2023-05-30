<?php 
    use yii\widgets\DetailView;
?>
<?=
    DetailView::widget([
        'model' => $mahasiswa54,
        'attributes' => [
            'id',
            'no_induk_mahasiswa',
            'nama_mahasiswa',
            'kelas',
            'status',
        ],
    ]);
?>