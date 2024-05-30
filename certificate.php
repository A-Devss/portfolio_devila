<?php
include('./header.php');
?>
<link rel="stylesheet" href="./asset/css/certificate.css">

<div class="container mt-4">
    <div class="d-flex justify-content-center mb-4">
        <div class="cards">
            <div class="card">
                <p class="second-text"><img src="./asset/img/certificate/pic_1.PNG" alt="" class="img-fluid"></p>
            </div>
            <div class="card ">
                <p class="second-text"><img src="./asset/img/certificate/pic_2.PNG" alt="" class="img-fluid"></p>
            </div>
            <div class="card ">
                <p class="second-text"><img src="./asset/img/certificate/pic_3.PNG" alt="" class="img-fluid"></p>
            </div>
            <div class="card ">
                <p class="second-text"><img src="./asset/img/certificate/pic_4.PNG" alt="" class="img-fluid"></p>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('.second-text').addClass(' mb-0');
        
    });
</script>
<?php
include('./footer.php');
?>