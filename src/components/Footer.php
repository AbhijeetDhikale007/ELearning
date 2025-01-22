<?php
include 'src/components/Icons.php';
?>

<head>
    <link rel="stylesheet" href="src/styles/footer.css">
</head>

<footer class='flex flex-col justify-between items-center'>
    <div class='FooterBanner flex justify-between items-center w-100%'>
        <a href='' target='_blank'>
            <?php echo $Icon_Instagram; ?>
            <p>Instagram</p>
        </a>
        <a href='' target='_blank'>
            <?php echo $Icon_X; ?>
            <p>X</p>
        </a>
        <a href='' target='_blank'>
            <?php echo $Icon_Facebook; ?>
            <p>Facebook</p>
        </a>
        <a href='' target='_blank'>
            <?php echo $Icon_WhatsApp; ?>
            <p>WhatsApp</p>
        </a>
    </div>
    <div class='LinksDiv flex justify-between'>
        <div>
            <h1 class='text-3xl'>E-Learning</h1>
        </div>
        <div>
            <h3>Links</h3>
            <a class='Button' href="">Courses</a>
            <a class='Button' href="">Contact</a>
        </div>
        <div>
            <h3>Get in touch</h3>
            <a class='Button' href="">YouTube</a>
            <a class='Button' href="">LinkedIn</a>
            <a class='Button' href="">X</a>
            <a class='Button' href="">Facebook</a>
            <a class='Button' href="">Instagram</a>
        </div>
    </div>
    <hr>
    <div class='FooterCopyright'>
        <p>&copy; E-Learning.in</p>
        <a href="">Privacy Policies</a>
    </div>
</footer>