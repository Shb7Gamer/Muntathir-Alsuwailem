<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/dbClose.php';
?>

<?php include_once './parts/header.php'; ?>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" id="headbg">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <img src="images/2.jpg" alt="" width=200 height=200>
            <h1 class="display-4 fw-normal">السحب على هاتف</h1>
            <p class="lead fw-normal">انضم معنا قبل انتهاء الوقت وكن من المختارين للحصول على افضل الجوائز</p>
            <h3 id="countdown"></h3>
        </div>
        <div class="container">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">آيفون 16 برو</li>
                <li class="list-group-item">معالج قوي يقدم أفضل اداء للهاتف تسريع عملية التحكم والتعدد بين النوافذ والتنقل بين التطبيقات وتعزيز وتسريع الالعاب</li>
                <li class="list-group-item">مظهر خارجي من التيتانيوم مع الوان مطلية بماء الفضة مع وزن خفيف</li>
                <li class="list-group-item">المكالمات من الجيل السادس والجيل الخامس والجيل الثاني</li>
                <li class="list-group-item">المقاومة ضد الماء</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h2>الرجاء ادخل معلوماتك</h2>
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="firstName" class="form-label"><h4>الاسم الأول</h4></label>
                        <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>" >
                        <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label"><h4>الاسم الأخير</h4></label>
                        <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>" >
                        <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><h4>البريد الالكتروني</h4></label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>" >
                        <div class="form-text error"><?php echo $errors['emailError'] ?></div>
                    </div>

                    <button type="submit" name="submit" class="learn-more">إرسال المعلومات</button>
                </form>
            </div>
        </div>
    </div>

    <!---->
    <div id="confetti"></div>
    <div class="loader-con">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas> 
            
        </div>
    </div>


        <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto my-5">
        <button class="learn-more" id="winner"> أظهر الرابح
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade " id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
                    <button type="button" class="btn-close" id="confetti" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <?php foreach($users as $user): ?>
                    <h1 class="display-6 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' .  htmlspecialchars($user['lastName']) .'<br>'?></h1>
                    <?php endforeach; ?> 
                </div>
            </div>
        </div>
    </div>
    <div class="confetti" id="confetti"></div>
    <?php include_once './parts/footer.php'; ?>