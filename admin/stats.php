


<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>



<?php include 'session.php';?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">


      <body class=" layout-fluid">


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
    <?php include 'admin_header.php'?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push
             data-responsive-width="992px"
             class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Statistics</li>
                    </ol>
                    <h1 class="h2">Statistics</h1>


                    <div class="row">

                        <div class="col-lg-12">



<?php 
$query_lecturer = mysqli_query($conn,"select * from lecturer")or die(mysqli_error());
$count_lecturer = mysqli_num_rows($query_lecturer);

$query_reg_lecturer = mysqli_query($conn, "select * from lecturer  where status='Activated'  ") or die(mysqli_error());
$count_reg_lecturer = mysqli_num_rows($query_reg_lecturer);


$query_deac_lecturer = mysqli_query($conn, "select * from lecturer where status='Deactivate'  ") or die(mysqli_error());
$count_deac_lecturer = mysqli_num_rows($query_deac_lecturer);

$query_student = mysqli_query($conn, "select * from student") or die(mysqli_error());
$count_student = mysqli_num_rows($query_student);

$query_course = mysqli_query($conn, "select * from course") or die(mysqli_error());
$count_course = mysqli_num_rows($query_course);
?>


                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                              
                                <div class="col-lg-12">
                                    <div class="chart">
                                    <canvas id="ordersChart"
                                                        class="chart-canvas"
                                                        data-chart-line-background-color="primary"></canvas>
                                          
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>



                        </div>

                    </div>

                </div>

            </div>

<?php include 'admin_side.php'?>

        </div>


<?php include '../script.php'?>


<script >

! function(e) { var t = {};

    function r(n) { if (t[n]) return t[n].exports; var a = t[n] = { i: n, l: !1, exports: {} }; return e[n].call(a.exports, a, a.exports, r), a.l = !0, a.exports }
    r.m = e, r.c = t, r.d = function(e, t, n) { r.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n }) }, r.r = function(e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, r.t = function(e, t) { if (1 & t && (e = r(e)), 8 & t) return e; if (4 & t && "object" == typeof e && e && e.__esModule) return e; var n = Object.create(null); if (r.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e)
            for (var a in e) r.d(n, a, function(t) {
                 return e[t] }.bind(null, a)); return n }, r.n = function(e) { var t = e && e.__esModule ? function() { return e.default } : function() { return e }; return r.d(t, "a", t), t }, r.o = function(e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, r.p = "/", r(r.s = 244) }({ 244: function(e, t, r) { e.exports = r(245) }, 245: function(e, t) {! function() { "use strict"; var e = function(e) { var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "line",
                        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                        n = { labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], datasets: [{ label: "Performance", data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40] }] };
                    Charts.create(e, t, r, n) },
                t = function(e) { 
                    var 
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "roundedBar",
                    r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                    r = Chart.helpers.merge({ barRoundness: 1.2 }, r); 
                    var 
                    n = { labels: ["Activated lecturer Number","lecturer Number", "Student ", "courses"],
                         datasets: [{ label: "Statistic", data: [<?php echo $count_reg_lecturer; ?>,<?php echo $count_lecturer; ?>,<?php echo $count_student; ?> ,<?php echo $count_course; ?>  ],
                         barPercentage: .5,
                         barThickness : 73
                       
                        }] };
                    Charts.create(e, t, r, n) };
            t("#ordersChart"),
                ("#devicesChart"),
                function(e) { var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "radar",
                        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                    r = Chart.helpers.merge({ elements: { point: { pointStyle: "circle", radius: 4, hoverRadius: 5, borderWidth: 7 } }, scale: { ticks: { display: !1, beginAtZero: !0, maxTicksLimit: 4 }, gridLines: { color: settings.colors.gray[300] }, angleLines: { color: settings.colors.gray[300] }, pointLabels: { fontSize: 14 } } }, r); var n = { labels: ["JavaScript", "HTML", "Flinto", "Vue.js", "Sketch", "Priciple", "CSS", "Angular"], datasets: [{ label: "Experience IQ", data: [30, 35, 33, 32, 31, 30, 28, 36], pointHoverBorderColor: settings.colors.success[400], pointHoverBackgroundColor: settings.colors.white, borderJoinStyle: "bevel", lineTension: .1 }] };
                    Charts.create(e, t, r, n) }("#topicIqChart"), $('[data-toggle="chart"]:checked').each((function(e, t) { Charts.add($(t)) })) }() } });
                    </script>

</html>
