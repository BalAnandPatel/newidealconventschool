<?php
include "include/header2.php";
?>


<div class="master-content">
    <div class="heding-mastr">
        <div class="inner-master" id="headtitle">

            <h1 class="mei-heding">


                Contact <span>Us</span>

            </h1>

        </div>

        <div class="master-cont">

            <div class="master_inn">

                <b>Contact Us by sending mail.</b><br />
                <br>
                <label for="fname">Full Name: </label><br>
                <input type="text" name="fname" style="width: 100%;height: 30px;">

                <div style="display: flex;">
                    <div style="width: 50%;">
                        <br><br>
                        <label for="contact">Contact: </label><br>
                        <input type="text" name="contact" style="width: 95%; height: 30px;">
                    </div>

                    <div style="width: 50%;">
                        <br><br>
                        <label for="email">Email: </label><br>
                        <input type="email" name="email" style="width: 95%; height: 30px;">
                    </div>
                </div>

                <br><br>
                <label for="message">Messaeg: </label><br>
                <textarea class="message" rows="10"></textarea>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<style>
    .message {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
}
</style>

<div><a href="#" class="back-to-top"></a></div>



<?php
include "include/footer2.php";
?>