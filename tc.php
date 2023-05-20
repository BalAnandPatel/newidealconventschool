<?php
include "include/header2.php";
?>

<div class="master-content">
            <div class="heding-mastr">
                <div class="inner-master" id="headtitle">

                    <h1 class="mei-heding">
                        
    Transfer <span>Certificate</span>

                    </h1>

                </div>

                <div class="master-cont">
                    
    <script type="text/javascript" src="error.html"></script>


    <script type="text/javascript" language="javascript">
        function RefreshImage(valImageId) {
            var objImage = document.getElementById(valImageId)
            if (objImage == undefined) {
                return;
            }
            var now = new Date();
            objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
        }
        $(document).ready(function() {
            //var pandey = $(window).height();
            //$("#map").css("height", pandey);

            if ($(window).width() < 480) {
                var catable = $(".contact-add").width();
                //alert(catable);
                $(".rrrchh_contact").css("min-width", catable)
            }
            
            if ($(window).width() > 950) {
                $("table.contact_tbl").addClass("contactFormWidth")
            }
        })        
        function FuncWaterMark(txtName, event) 
        {
            var strVal = "Name *";
            //Name
            if (txtName.value.length == 0 & event.type == "blur") 
            {
                txtName.style.color = "Gray";//setting text color
                txtName.value = strVal; //setting default text in textbox
            }
           
            if (txtName.value == strVal & event.type == "focus") {
                txtName.style.color = "black";
                txtName.value = "";
            }
        }
        function funadd(txtAdd,event)
        {
            // Address
            if (txtAdd.value.length == 0 & event.type == "blur") 
            {
                txtAdd.style.color = "Gray";//setting text color
                txtAdd.value = "Address *"; //setting default text in textbox
            }
       
            if (txtAdd.value == "Address *" & event.type == "focus") {
                txtAdd.style.color = "black";
                txtAdd.value = "";
            }
        }
        //Phone
        function funPhone(txtPhone, event)
        {
            if (txtPhone.value.length == 0 & event.type == "blur") 
            {
                txtPhone.style.color = "Gray";//setting text color 
                //txtPhone.attr("placeholder", "Phone/Mob *");
                txtPhone.value = "Phone/Mob *";
              //  document.getElementById("txtPhone").placeholder = "Phone/Mob *"
            }
         
            if (txtPhone.value == "Phone/Mob *" & event.type == "focus") {
                txtPhone.style.color = "black";
                txtPhone.value = "";
            }
        }
        //Email
        function funEmail(txtemail, event)
        {
            if (txtemail.value.length == 0 & event.type == "blur")
            {
                txtemail.style.color = "Gray";//setting text color
                txtemail.value = "Email *"; //setting default text in textbox
            }
         
            if (txtemail.value == "Email *" & event.type == "focus") {
                txtemail.style.color = "black";
                txtemail.value = "";
            }
        }
        //Subject
        function funsubject(txtsubject, event)
        {
            if (txtsubject.value.length == 0 & event.type == "blur") 
            {
                txtsubject.style.color = "Gray";//setting text color
                txtsubject.value = "Subject *"; //setting default text in textbox
            } 
            if (txtsubject.value == "Subject *" & event.type == "focus") {
                txtsubject.style.color = "black";
                txtsubject.value = "";
            }
        }
            //Msg
        function funMsg(txtMsg, event)
            {
            if (txtMsg.value.length == 0 & event.type == "blur")
                {
                txtMsg.style.color = "Gray";//setting text color
                txtMsg.value = "Message"; //setting default text in textbox
                }
       
            if (txtMsg.value == "Message" & event.type == "focus") {
                txtMsg.style.color = "black";
                txtMsg.value = "";
                }
            }
                //Catpcha
        function funCaptcha(txtCaptcha, event)
            {
                if (txtCaptcha.value.length == 0 & event.type == "blur")
                {
                    txtCaptcha.style.color = "Gray";//setting text color
                    txtCaptcha.value = "Enter the code *"; //setting default text in textbox
                }
       
                if (txtCaptcha.value == "Enter the code *" & event.type == "focus") {
                    txtCaptcha.style.color = "black";
                    txtCaptcha.value = "";
                }
            }
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if ((charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>

<style>
.amit{position: ABSOLUTE; RIGHT: -10px; margin-top: -24px;}
.AMIT1{position: relative; RIGHT: 0; top: 9px;}

#map {height: 100%;border: 0px solid #c0c0c0;min-height:385px; width: 600px;float: right; margin-top: 40px;}
.invalidCall {border-bottom: 1px solid red!important;display: inline;}
.tRight1{ text-align:right;color: #a5a5a5;font-size: 12px;}
    @media only screen and (max-width: 1024px) {
        .butSubmit22 {
            padding: 5px 0 10px 0px;
            text-align: center;
        }
    }
    @media only screen and (min-width: 991px) and (max-width: 1024px) {
        span#ctl00_ContentPlaceHolder1_LBLMssg1 {
            float: left;
            width: 100%;
        }
    }
@media screen and (min-width:0px) and (max-width:750px)
{
span#ctl00_ContentPlaceHolder1_lblcap { text-align: left; display: block;  width: 100%;  float: left; padding: 0 0 0 0px;}
}
.page_master p{ color:#fff; }

.master-cont p {
text-align: center;
font-size: 22px;
text-transform: none;
color: #fff;
}

</style>
   
    
 

 
       <div class="MailUs">
            
       <div class="contactInfo">
         
           <br />
    
           <div>
             <form class="form-inline" method="post" action="http://www.kidsacademyprayagraj.com/web.php?pageurl=tc">
    <input type="text" name="title" class="form-control" placeholder="Search Admission no..">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
           
        </div>  
          <br>
          <hr>
           
        
       </div>    
     

  
   
 
     
    
      <script>
          var $inputItem = $(".js-inputWrapper");
          $inputItem.length && $inputItem.each(function () {
              var $this = $(this),
                  $input = $this.find(".formRow--input"),
                  placeholderTxt = $input.attr("placeholder"),
                  $placeholder;

              $input.after('<span class="placeholder">' + placeholderTxt + "</span>"),
              $input.attr("placeholder", ""),
              $placeholder = $this.find(".placeholder"),

              $input.val().length ? $this.addClass("active") : $this.removeClass("active"),

              $input.on("focusout", function () {
                  $input.val().length ? $this.addClass("active") : $this.removeClass("active");
              }).on("focus", function () {
                  $this.addClass("active");
              });
          });
    </script>
    <script language="javascript" type="text/javascript">
        $.getScript("js/Validate.js");

        function validation() {
            ValidateHtmlControls('ContactUs', 'invalidCall');
            return Page_ClientValidate("ContactUs");
            
        }
    </script>
    
    <script>
        function initMap() {
            var uluru = { lat: 29.194964, lng: 79.4665575 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });
          //  var contentString = '<div id="content">' + '<center> <div class="reach_logo"><span class="mapSname"> Mahendra Pratap Singh Public School</span> <br> <span class="mapAdd"> Grand Trunk Road , Andawa, Jhunsi, Allahabad, UP 211003.</span><br><span class="mapPh">Ph:7317002022, 7317002023</span>  <br> <span class="mapEmail">Email:mpspsofficial@gmail.com</span> </div> </center>'; '</div>';
            var contentString = '<div id="content">' + '<center> <div class="reach_logo"><img src="/images/Reach-Detail.jpg"/> </div> </center>'; '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: uluru,
                // icon: "images/schools_maps.png",
                animation: google.maps.Animation.BOUNCE,
                map: map
            });


            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });

        }
    </script>

    <script async defer src="https://www.google.co.in/maps/api/js?key=AIzaSyBRdFxBTPSAORNcRKyn9Q2bsKKRrnZeFlw&amp;callback=initMap"> </script>    

<script type="text/javascript" src="www.google.co.in/recaptcha/api85f185f1.html?onload=onloadCallback&amp;render=explicit"async defer></script>
<script type="text/javascript">
    var onloadCallback = function () {
        debugger;
        grecaptcha.render('dvCaptcha', {

            'sitekey': '6Lft8TIUAAAAAL_nOAHLTe4ZQ3xRFLpE-zEXTzAC',
            'callback': function (response) {
                $.ajax({
                    type: "POST",
                    url: "Mail-us.aspx/VerifyCaptcha",
                    data: "{response: '" + response + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (r) {
                        $('#txtCaptcha').val("");
                        var captchaResponse = jQuery.parseJSON(r.d);
                        if (captchaResponse.success) {
                            $("[id*=txtCaptcha]").val(captchaResponse.success);
                            $("[id*=rfvCaptcha]").hide();

                        } else {
                            $("[id*=txtCaptcha]").val("");
                            $("[id*=rfvCaptcha]").show();
                            var error = captchaResponse["error-codes"][0];
                            $("[id*=rfvCaptcha]").html("RECaptcha error. " + error);
                        }
                    }
                });
            }
        });
    };
</script>
      <div>
        <span id="ctl00_ContentPlaceHolder1_lblPopUp"></span>
        <div id="ctl00_ContentPlaceHolder1_pnlAlert" class="popup-s" style="background-color:White;border-color:LightGrey;border-width:3px;border-style:Solid;display: none; border-radius: 7px; width: auto; min-height: 40px;">
    
            <div id="ctl00_ContentPlaceHolder1_updatePanel">
        
                    <div id="ctl00_ContentPlaceHolder1_pnlDetail">
            
                        <table style="width: 100%; border-radius: 4px; background-color: #f2f2f2; font-family:'Open Sans',sans-serif; font-size: 14px; padding: 5px;">
                            <tr>
                                <td align="left" style="width: 30px;" valign="top">
                                    <img id="ctl00_ContentPlaceHolder1_imgIcon" class="icon-img" src="error.html" style="height:25px;border-width:0px; margin-left: 83px;" />
                                </td>
                                <td>
                                    <span id="ctl00_ContentPlaceHolder1_lblAlertType" style="color:threeddarkshadow;font-weight:bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <span id="ctl00_ContentPlaceHolder1_lblAlertMsg"></span>
                                </td>
                            </tr>
                            <tr>
                                <th align="center" colspan="2">
                                    <input type="image" name="ctl00$ContentPlaceHolder1$btnOK" id="ctl00_ContentPlaceHolder1_btnOK" src="error.html" style="width:60px;border-width:0px;" />
                                
                                </th>
                            </tr>
                        </table>
                    
        </div>
                
    </div>
            <center>
                <div id="ctl00_ContentPlaceHolder1_UpdateProgress2" style="display:none;">
        
                        <img src="error.html" alt="" />
                    
    </div>
            </center>
        
</div>
        
    </div>
      <script>
          function checkvalidation() {
              debugger;
              $('#ctl00_ContentPlaceHolder1_txtName').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtAdd').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtPhone').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtemail').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtsubject').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtMsg').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtMsg').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_txtCaptcha').val('').removeClass('invalidCall');
              $('#ctl00_ContentPlaceHolder1_RequiredFieldValidator8').text('');

              
              return true;
          }

    </script>
    <script type="text/javascript" language="javascript">
        function RefreshImage(valImageId) {
            var objImage = document.getElementById(valImageId)
            if (objImage == undefined) {
                return;
            }
            var now = new Date();
            objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
        }

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if ((charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>

    <script type='text/javascript'>

        $(function () {
            $('#ctl00_ContentPlaceHolder1_txtMsg').keyup(function () {
                var desc = $('#ctl00_ContentPlaceHolder1_txtMsg').val();
                var len = desc.length;
                if (desc.length >= 500) {
                    this.value = this.value.substring(0, 500);
                }
                $('#spntxt').text(500 - len);
            });
        });
</script>

   


                </div>
            </div>
        </div>
            
        
                    </div>
                </div>
        </div>
     


        <div><a href="#" class="back-to-top"></a></div>
        <?php
        include "include/footer2.php";
        ?>