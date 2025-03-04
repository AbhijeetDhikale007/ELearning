<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if(!$result) {
    die("Query Failed: ". $conn->error);
}

$Courses = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Courses[] = [
            // 'id' => $row['id'],
            'Name' => $row['cname'],
            // 'img' => $row['pictureurl'],
            // 'video' => $row['videourl'],
            // 'Info' => $row['cinfo'],
            'Prize' => $row['prize'],
            'Discount' => $row['discount']
        ];
    }
}
?>

<!------------- Courses Content ------------->

<div class='DashContent w-100% relative'>
    <h1 class='josefin-sans'>Your Courses</h1>
    <!-- <div class='flex justify-end w-94'>
        <button class='Button-AddCourse'>Add Course +</button>
    </div> -->
    <div class='Courses flex flex-col gap-16px w-94'>
        <div class='CourseContainer flex justify-between p-2 text-[1.2vw]'>
            <p>Courses</p>
            <p>Prize</p>
            <p>Discount</p>
        </div>
        <?php foreach($Courses as $courses): ?>
            <div class='CourseContainer flex justify-between text-[1.2vw] p-3'>
                <p><?= $courses['Name'] ?></p>
                <p><?= $courses['Prize'] ?> &#8377;</p>
                <p><?= $courses['Discount'] ?> %</p>
            </div>
        <?php endforeach ?>
    </div>
</div>