<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
</head>

<body>
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <h1>Projecten</h1>
    </header>

    <section id="projects">
        <div class="buttons">
            <button id='all'>Alles</button>
            <button id='btn-websites'>Websites</button>
            <button id='btn-city'>Naam</button>
            <button id='btn-nature'>Naam</button>
        </div>

        <div class="projectShuffle">
            <?php foreach ($projects as $row) : ?>
                <div class="picture-item" data-groups='["<?php echo $row['categorie']; ?>"]'>
                    <img src="https://mk0designbombsg12amh.kinstacdn.com/wp-content/uploads/2018/04/kuon-yagi.jpg" alt="" srcset="">
                    <?php echo $row['projectnaam'] ?>
                </div>
            <?php endforeach; ?>

            <div class="col-1@sm my-sizer-element"></div>
        </div>
    </section>

    <?php if ($this->section('footer')) : ?>
        <?php echo $this->section('footer') ?>
    <?php else : ?>
        <?php echo $this->fetch('_footer') ?>
    <?php endif ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.2.3/shuffle.min.js"></script>
    <script src="<?php echo site_url('/js/shuffle.js') ?>"></script>
</body>

</html>