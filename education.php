<?php
include('./header.php');
?>

<div class="container mt-4 pt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card  bg-transparent  p-4" style="height: 22rem;">

                <div class="d-flex justify-content-center">
                    <img src="./asset/img/national_high.jpg" alt="" class="img-thumbnail " style="height: 7rem;">
                </div>
                <div class="card-body">
                    <p class="text-center"><strong>Paliparan National High School</strong></p>
                    <hr class="border-secondary my-3">
                    <p class="card-text"><small class="text-body-secondary">2014 - 2018</small></p>
    
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card  bg-transparent p-4" style="height: 22rem;">

                <div class="d-flex justify-content-center">
                    <img src="./asset/img/senior_high.jpg" alt="" class="img-thumbnail " style="height: 7rem;">
                </div>
                <div class="card-body">
                    <p class="text-center"><strong>Paliparan III Senior High School</strong></p>
                    <hr class="border-secondary my-3">
                    <p class="card-text">Computer System Servicing</p>
                    <p class="card-text"><small class="text-body-secondary">2018 - 2020</small></p>
    
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card  bg-transparent  p-4 " style="height: 22rem;">

                <div class="d-flex justify-content-center">
                    <img src="./asset/img/sti.png" alt="" class="img-thumbnail img-fluid" style="height: 7rem;">
                </div>
                <div class="card-body">
                    <p class="text-center"><strong>STI College Dasmariñas</strong></p>
                    <hr class="border-secondary my-3">
                    <p class="card-text">Batchelor of Science in Information technology</p>
                    <p class="card-text"><small class="text-body-secondary">2020 - Present</small></p>
    
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".card-text").addClass('text-center');

        $(".img-thumbnail").addClass('bg-dark rounded-circle');
    });
</script>
<?php
include('./footer.php');
?>