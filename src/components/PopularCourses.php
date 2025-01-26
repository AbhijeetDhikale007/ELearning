<?php
$Courses = [
    [ 'img' => 'public/CSS.png', 'Name' => 'Data Science: Transformers for Natural Language Processing', 'Info' => "ChatGPT, GPT-4, BERT, Deep Learning, Machine Learning, & NLP with Hugging Face, Attention in Python, Tensorflow, PyTorch", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Math 0-1: Calculus for Data Science & Machine Learning', 'Info' => "A Casual Guide for Artificial Intelligence, Deep Learning, and Python Programmers", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Financial Engineering and Artificial Intelligence in Python', 'Info' => "Financial Analysis, Time Series Analysis, Portfolio Optimization, CAPM, Algorithmic Trading, Q-Learning, and MORE!", 'Prize' => "Rs. 100" ],
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