
<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>



<?php include('../session.php'); ?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">

<style>
    
    body {
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-line-pack: center;
        align-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    min-height: 100vh;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    font-family: 'Raleway';
}

.payment-title {
    width: 100%;
    text-align: center;
}

.form-container .field-container:first-of-type {
    grid-area: name;
}

.form-container .field-container:nth-of-type(2) {
    grid-area: number;
}

.form-container .field-container:nth-of-type(3) {
    grid-area: expiration;
}

.form-container .field-container:nth-of-type(4) {
    grid-area: security;
}

.field-container input {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.field-container {
    position: relative;
}

.form-container {
    display: grid;
    grid-column-gap: 10px;
    grid-template-columns: auto auto;
    grid-template-rows: 90px 90px 90px;
    grid-template-areas: "name name""number number""expiration security";
    max-width: 400px;
    padding: 20px;
    color: #707070;
}

label {
    padding-bottom: 5px;
    font-size: 13px;
}

input {
    margin-top: 3px;
    padding: 15px;
    font-size: 16px;
    width: 100%;
    border-radius: 3px;
    border: 1px solid #dcdcdc;
}

.ccicon {
    height: 38px;
    position: absolute;
    right: 6px;
    top: calc(50% - 17px);
    width: 60px;
}

/* CREDIT CARD IMAGE STYLING */
.preload * {
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -ms-transition: none !important;
    -o-transition: none !important;
}

.container {
    width: 100%;
    max-width: 400px;
    max-height: 251px;
    height: 54vw;
    padding: 20px;
}

#ccsingle {
    position: absolute;
    right: 15px;
    top: 20px;
}

#ccsingle svg {
    width: 100px;
    max-height: 60px;
}

.creditcard svg#cardfront,
.creditcard svg#cardback {
    width: 100%;
    -webkit-box-shadow: 1px 5px 6px 0px black;
    box-shadow: 1px 5px 6px 0px black;
    border-radius: 22px;
}

#generatecard{
    cursor: pointer;
    float: right;
    font-size: 12px;
    color: #fff;
    padding: 2px 4px;
    background-color: #909090;
    border-radius: 4px;
    cursor: pointer;
    float:right;
}

/* CHANGEABLE CARD ELEMENTS */
.creditcard .lightcolor,
.creditcard .darkcolor {
    -webkit-transition: fill .5s;
    transition: fill .5s;
}

.creditcard .lightblue {
    fill: #03A9F4;
}

.creditcard .lightbluedark {
    fill: #0288D1;
}

.creditcard .red {
    fill: #ef5350;
}

.creditcard .reddark {
    fill: #d32f2f;
}

.creditcard .purple {
    fill: #ab47bc;
}

.creditcard .purpledark {
    fill: #7b1fa2;
}

.creditcard .cyan {
    fill: #26c6da;
}

.creditcard .cyandark {
    fill: #0097a7;
}

.creditcard .green {
    fill: #66bb6a;
}

.creditcard .greendark {
    fill: #388e3c;
}

.creditcard .lime {
    fill: #d4e157;
}

.creditcard .limedark {
    fill: #afb42b;
}

.creditcard .yellow {
    fill: #ffeb3b;
}

.creditcard .yellowdark {
    fill: #f9a825;
}

.creditcard .orange {
    fill: #ff9800;
}

.creditcard .orangedark {
    fill: #ef6c00;
}

.creditcard .grey {
    fill: #bdbdbd;
}

.creditcard .greydark {
    fill: #616161;
}

/* FRONT OF CARD */
#svgname {
    text-transform: uppercase;
}

#cardfront .st2 {
    fill: #FFFFFF;
}

#cardfront .st3 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 600;
}

#cardfront .st4 {
    font-size: 54.7817px;
}

#cardfront .st5 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 400;
}

#cardfront .st6 {
    font-size: 33.1112px;
}

#cardfront .st7 {
    opacity: 0.6;
    fill: #FFFFFF;
}

#cardfront .st8 {
    font-size: 24px;
}

#cardfront .st9 {
    font-size: 36.5498px;
}

#cardfront .st10 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 300;
}

#cardfront .st11 {
    font-size: 16.1716px;
}

#cardfront .st12 {
    fill: #4C4C4C;
}

/* BACK OF CARD */
#cardback .st0 {
    fill: none;
    stroke: #0F0F0F;
    stroke-miterlimit: 10;
}

#cardback .st2 {
    fill: #111111;
}

#cardback .st3 {
    fill: #F2F2F2;
}

#cardback .st4 {
    fill: #D8D2DB;
}

#cardback .st5 {
    fill: #C4C4C4;
}

#cardback .st6 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 400;
}

#cardback .st7 {
    font-size: 27px;
}

#cardback .st8 {
    opacity: 0.6;
}

#cardback .st9 {
    fill: #FFFFFF;
}

#cardback .st10 {
    font-size: 24px;
}

#cardback .st11 {
    fill: #EAEAEA;
}

#cardback .st12 {
    font-family: 'Rock Salt', cursive;
}

#cardback .st13 {
    font-size: 37.769px;
}

/* FLIP ANIMATION */
.container {
    perspective: 1000px;
}

.creditcard {
    width: 100%;
    max-width: 400px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: -webkit-transform 0.6s;
    -webkit-transition: -webkit-transform 0.6s;
    transition: transform 0.6s;
    transition: transform 0.6s, -webkit-transform 0.6s;
    cursor: pointer;
}

.creditcard .front,
.creditcard .back {
    position: absolute;
    width: 100%;
    max-width: 400px;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-font-smoothing: antialiased;
    color: #47525d;
}

.creditcard .back {
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.creditcard.flipped {
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
}
    </style>
      <body class=" layout-fluid">


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
    <?php include 'student_header.php' ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push
             data-responsive-width="992px"
             class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Payment</li>
                    </ol>

                    <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body">
                            
                            
    <div class="payment-title">
        <h1>Payment Information</h1>
    </div>
    <div class="container preload">
        <div class="creditcard">
            <img src="../assets/images/visa.png" width="100%" /><br/>
        </div>
    </div>
    <div class="form-container">
        <div class="field-container">
            <label>Name</label>
            <input>
        </div>
        <div class="field-container">
            <label>Card Number</label>
            <input>
        </div>
        <div class="field-container">
            <label>Expire (mm/yy)</label>
            <input>
        </div>
        <div class="field-container">
            <label>Security Code</label>
            <input>
        </div>
    </div>
               <br/><hr/>
                <button class="btn btn-primary btn-block">Add Visa</button>             
                            
                            
                            
                        </div>
                    </div>
                    
                </div>

            </div>

<?php include 'student_side.php'?>

        </div>

      <?php include '../script.php'?>
</html>