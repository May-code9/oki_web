<?php
$title = "Equipments | OKI Equipments";
$equipments = "active";

require_once("includes/header.inc.php");
?>

<!-- Single product-->
<section class="section section-md bg-white">
  <div class="shell">
    <div class="layout-horizontal layout-horizontal_1">
      <div class="layout-horizontal__aside">
        <div class="reveal-flex">
          <!-- Thumb Zoe-->
          <a class="">
            <img class="thumb-zoe__image" src="../images/equipment1.png" alt="" width="226" height="284"/>
          </a>
        </div>
      </div>
      <div class="layout-horizontal__main">
        <article class="single-product">
          <div class="single-product__header">
            <h3 class="single-product__title">Hamm Tandem Roller</h3>
            <!-- <p class="single-product__price"><sup>$</sup><span>137</span><sup>00</sup></p> -->
          </div>
          <div class="single-product__main">
            <!-- Tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line">
              <!-- Nav tabs-->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tabs-product-1" data-toggle="tab">Description</a></li>
                <!-- <li><a href="#tabs-product-2" data-toggle="tab">Cost &amp; It's Uses</a></li> -->
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade in active" id="tabs-product-1">
                  <p>
                    <span class="just">Model: </span><br>DYNAPAC CA 250D, CP 221, CC 222 CHF, CG 233 HF, LP6500<br>
                    HAMM AG D-95643, BOMAG BW65H, BOMAG BW 9AD<br>
                    <span class="just">Number Owned: </span><br>11 <br>
                    <span class="just">Capacity: </span><br>OPERATING WEIGHT: 10800kg, 8300kg, 7180kg, 757kg<br>
                    CENTRIFUGAL FORCE: 246kN, 78kN <br>
                    ENGINE POWER: 6.8kW, 98 kW, 5.3kW, 62kW <br>
                    <span class="just">Specification: </span><br>VIBRATORY SMOOTH DRUM ROLLER, HAND ROLLER <br>
                    VIBRATORY HAND ROLLER, STEEL ROLLER, <br>
                    PNEUMATIC TYRED ROLLER, COMBINATION ROLLER
                  </p>
                </div>
                <!-- <div class="tab-pane fade" id="tabs-product-2">
                  <p>Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment Cost and Use of equipment .</p>
                </div> -->
              </div>
            </div>
            <div class="group group-buttons group-middle"><a class="button button-darker" href="contacts.php">get a quote</a>
              <p>or</p><a class="button button-primary" href="#">get price list</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/footer.inc.php") ?>
