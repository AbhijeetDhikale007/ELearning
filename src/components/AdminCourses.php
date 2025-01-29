<?php
// include 'src/components/dBconnection.php';
include 'Icons.php';

$Courses = [
    [ 'img' => 'public/CSS.png', 'Name' => 'Data Science: Transformers for Natural Language Processing', 'Info' => "ChatGPT, GPT-4, BERT, Deep Learning, Machine Learning, & NLP with Hugging Face, Attention in Python, Tensorflow, PyTorch", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Math 0-1: Calculus for Data Science & Machine Learning', 'Info' => "A Casual Guide for Artificial Intelligence, Deep Learning, and Python Programmers", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Financial Engineering and Artificial Intelligence in Python', 'Info' => "Financial Analysis, Time Series Analysis, Portfolio Optimization, CAPM, Algorithmic Trading, Q-Learning, and MORE!", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Learn C++', 'Info' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, corporis?", 'Prize' => "Rs. 100" ],
];
?>

<?php include 'AdminAside.php'; ?>
<div class='DashContent w-100% relative'>
    <h1 class='arsenal-sc'>Courses</h1>
    <button class='Button-AddCourse absolute'>Add Course +</button>

</div>