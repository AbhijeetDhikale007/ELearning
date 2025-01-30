<?php
// include 'src/components/dBconnection.php';
include 'Icons.php';

$Courses = [
    [ 'img' => 'public/CSS.png', 'Name' => 'Data Science: Transformers for Natural Language Processing', 'Info' => "ChatGPT, GPT-4, BERT, Deep Learning, Machine Learning, & NLP with Hugging Face, Attention in Python, Tensorflow, PyTorch", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Math 0-1: Calculus for Data Science & Machine Learning', 'Info' => "A Casual Guide for Artificial Intelligence, Deep Learning, and Python Programmers", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'Financial Engineering and Artificial Intelligence in Python', 'Info' => "Financial Analysis, Time Series Analysis, Portfolio Optimization, CAPM, Algorithmic Trading, Q-Learning, and MORE!", 'Prize' => "Rs. 100" ],
    [ 'img' => 'public/CSS.png', 'Name' => 'C++ Crash Course', 'Info' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, corporis?", 'Prize' => "Rs. 100" ],
];
?>

<?php include 'AdminAside.php'; ?>
<div class='DashContent w-100% relative'>
    <h1 class='arsenal-sc'>Courses</h1>
    <div class='flex justify-end w-94'>
        <button class='EditButton Button-AddCourse'>Add Course +</button>
    </div>
    <div class='flex flex-col gap-16px w-94'>
        <?php foreach($Courses as $courses): ?>
            <div class='CourseContainer flex justify-between p-3'>
                <p><?= $courses['Name'] ?></p>
                <div class='flex gap-15px'>
                    <button><?php echo $Icon_Delete ?></button>
                    <button><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class='ProfileChange flex items-center justify-center absolute w-100 h-100'>
    <form action="adminCourses.php" method="post">
        <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="course">Course Name</label>
                <input type="text" name="course">
            </div>
            <div>
                <label for="Img">Picture url</label>
                <input type="text" name="Img">
            </div>
            <div>
                <label for="video">Video url</label>
                <input type="text" name="video">
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="details">Course Description</label>
                <input type="text" name="details">
            </div>
            <div>
                <label for="prize">Prize</label>
                <input type="number" name="prize">
            </div>
            <div>
                <label for="discount">Discount</label>
                <input type="number" name="discount">
            </div>
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit">Submit</button>
        </div>
    </form>
</div>

<script>
    const EditButton = document.querySelector('.EditButton');
    const CloseButton = document.querySelector('.CloseButton');
    const Profile = document.querySelector('.ProfileChange');

    EditButton.addEventListener('click', ()=> {
        Profile.classList.add('Active');
    });

    CloseButton.addEventListener('click', ()=> {
        Profile.classList.remove('Active');
    });
</script>