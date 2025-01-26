<?php
$Courses = [
    [ 'img' => 'public/CSS.png', 'Name' => 'Learn C++', 'Info' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, corporis?", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Learn C++', 'Info' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, corporis?", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Learn C++', 'Info' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, corporis?", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Learn C++', 'Info' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, corporis?", 'Prize' => "Rs. 100" ],
];
?>

<div class='PopularCourses flex flex-wrap justify-center p-10'>
    <?php foreach($Courses as $courses): ?>
        <div class='PCourses-Div'>
            <img src="<?= $courses['img'] ?>" alt="Course Image">
            <div class='PCourses-Text'>
                <p class='text-xl'><?= $courses['Name'] ?></p>
                <p class='mt-2'><?= $courses['Info'] ?></p>
            </div>
            <div class="Price">
                <p><?= $courses['Prize'] ?></p>
                <button>Enroll</button>
            </div>
        </div>
    <?php endforeach ?>
</div>