<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="script/aframe.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        a-box {
            color: rgb(98, 98, 98);
        }
    </style>
    <title>assignment</title>
</head>

<body>
    <a-scene>
        <a-assets>
            <img src="textures/floor.png" id="floor">
            <img src="textures/Wall_Stone_025_ambientOcclusion.png" id="wsa">
            <img src="textures/Wall_Stone_025_basecolor.png" id="wsbc">
            <img src="textures/Wall_Stone_025_height.png" id="wsh">
            <img src="textures/Wall_Stone_025_normal.png" id="wsn">
            <img src="textures/Wall_Stone_025_roughness.png" id="wsr">
            <img src="textures/Wall_Stone_025_ambientOcclusion.png" id="Tiles" alt="">
            <img src="textures/table-chair sticks.png" id="sticks" alt="">
            <img src="textures/Milo logo.png" id="Milo" alt="">
            <img src="textures/Milk logo.png" id="Milk" alt="">
            <img src="textures/Table mat.png" id="table-mat" alt="">
            <img src="textures/Fabric_Jute_001_basecolor.png" id="surface" alt="">
            <img src="textures/Table-middle mat.png" id="middle-mat" alt="">
            <img src="textures/sand.png" id="grass" alt="">
            <img src="textures/tv.png" id="tv" alt="">
            <img src="textures/thomas.png" id="thomas" alt="">
            <img src="textures/vee.png" id="vee" alt="">
            <img src="textures/windows11.jpg" id="windows11" alt="">
            <img src="textures/forest.jpg" id="forest" alt="">
        </a-assets>

        <a-sky src="#forest" rotation="0 45 0"></a-sky>

        <a-plane material="src: #grass; color:#ffffff; normal-map: #wsn; normal-texture-repeat: 50 50; repeat:50 50" roughness="2" shader="flat" rotation="-90 0 0" scale="500 500 1" position="0 -0.9 0 ">

        </a-plane>



        <a-box position="17 0.1 -4" color="rgba(225, 225, 225, 0.149)" repeat="20 30" rotation="0 0 90" width="0.1" height="5" depth="5" scale="1 10 9.6" src="#floor">
        </a-box>
        <a-box position="17 17.5 -4" color="#fff" repeat="30 30" rotation="0 0 90" width="0.1" height="5" depth="5" scale="1 11 11">
        </a-box>
        <!-- <a-cone position="17 24 -4" segments-radial="4" color="rgba(225, 225, 225, 0.149)" repeat="30 30" rotation="0 45 0" width="0.1" height="7" depth="5" radius-top="20" radius-bottom="40" scale="" src="#floor">
        </a-cone> -->
        <!-- <a-box position="17 25.5 -18.2" color="rgba(225, 225, 225, 0.149)" repeat="30 30" rotation="0 90 60" width="0.1" height="4.65" depth="4" scale="1 7 11" src="#floor">
        </a-box>
        <a-box position="17 25.5 10" color="rgba(225, 225, 225, 0.149)" repeat="30 30" rotation="0 -90 60" width="0.1" height="4.65" depth="4" scale="1 7 11" src="#floor">
        </a-box> -->

        <a-box position="17 -0.1 -4" color="rgba(225, 225, 225, 0.149)" repeat="30 30" rotation="0 0 90" width="0.1" height="5" depth="5" scale="1 11 11" src="#wsbc">
        </a-box>
        <!-- grass -->
        <a-box position="29 -0.4 1"  repeat="20 20" rotation="0 0 90" width="0.5" height="5" depth="5" scale="1 21 15" src="#wsbc">
        </a-box>
        <!-- ferns -->
        <a-box color=" rgba(227, 214, 193, 0.149)" height="7" width="41" depth="0.5" scale="2 1 1" position="25 0.5 -36" rotation="0 0 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="15" width="52" depth="0.5" scale="2 1 1" position="29 0.5 38.5" rotation="0 0 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="15" width="2.05" depth="0.5" scale="37 1 1" position="-23.3 0.5 1" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="15" width="2.05" depth="0.5" scale="37.1 1 1" position="80.2 0.5 1" rotation="0 -90 0"></a-box>

        <!-- front mesh -->
        <?php for ($i = -15; $i < 67; $i++) {
            if ($i%9==0){
               ?> <a-cylinder radius="0.8" color=" rgb(172, 166, 166)" height="8" position="<?php echo $i . " " ?> 4 -36" rotation="0 -90 0"></a-cylinder>

            <?php }
            else{
            ?>
                <a-cylinder radius="0.1" color=" rgb(98, 98, 98)" height="7" position="<?php echo $i . " ".(sin($i )+6) ?> -36" rotation="0 -90 0"></a-cylinder>
                <a-sphere radius="0.2" color=" rgb(98, 98, 98)" position="<?php echo $i . " ".(sin($i)+9.5) ?>  -36" rotation="0 -90 0"></a-sphere>
            <?php }}
        ?>

        <!-- beds Prof. , Thomas, Obaa -->

        <a-box position="13 1 16" rotation="0 -90 -90" width="1" height="1" depth="1" scale="2 6 9" src="#surface"></a-box>
        <a-box position="13 1.8 16" rotation="0 -90 -90" width="1" height="1" depth="1" scale="1 6 9" ></a-box>

        <a-box position="-4 0.7 -2.5" rotation="0 0 90" width="1" height="1" depth="1" scale="1 7 9" src="#surface"></a-box>
        <a-box position="-4 2 -2.5" rotation="0 0 90" width="1" height="1" depth="1" scale="0.2 7 9"></a-box>

        <a-box position="39 1 15.5" rotation="0 0 90" width="1" height="1" depth="1" scale="2 6 9" src="#surface"></a-box>
        <a-box position="39 2 15.5" rotation="0 0 90" width="1" height="1" depth="1" scale="2 6 9" ></a-box>
        <!-- Fridge -->
        <a-box position="8.5 2.6 -13.5" rotation="0 0 90" width="1" height="1" depth="1" scale="5 3 2" src="#" color="gray"></a-box>
        <a-box position="-4.7 3 -14.5" rotation="0 0 90" width="1" height="1" depth="1" scale="7 6 0.1" src="#surface"></a-box>

        <!-- sulphers -->
        <a-box position="27.15 0.7 -7" rotation="0 -90 -90" width="1.2" height="0.4" depth="0.8" scale="1.5 6 9" src="#surface"></a-box>
        <a-box position="28.5 0.7 -17" rotation="0 -90 -90" width="1.2" height="0.4" depth="1.1" scale="1.5 6 9" src="#surface"></a-box>
        <a-box position="24.95 0.7 -12" rotation="0 0 90" width="1.2" height="0.4" depth="1" scale="1.5 7 9" src="#surface"></a-box>

        <a-cylinder radius="0.2" position="25.06 2 -5.84" rotation="0 0 -90" width="1.5" height="0.15" depth="0.8" scale="1.7 20 2" src="#surface"></a-cylinder>
        <a-box position="25.06 0.8 -6" rotation="0 0 -90" width="1.5" height="0.15" depth="0.8" scale="1.4 20 0.48" src="#surface"></a-box>
        <a-cylinder radius="0.2" position="33.34 2 -17.2" rotation="90 0 0" width="1.5" height="0.15" depth="0.8" scale="2 13 2" src="#surface"></a-cylinder>
        <a-box position="33.2 0.8 -17.2" rotation="0 0 0" width="0.5" height="2.5" depth="1.93" scale="1 1 1" src="#surface"></a-box>

        <a-box position="28.5 2.3 -17.75" rotation="0 -90 -90" width="1.5" height="0.15" depth="1.1" scale="1 6 9" src="#surface"></a-box>
        <a-box position="24.08 2.3 -11.65" rotation="0 0 90" width="1.5" height="0.15" depth="1.3" scale="1 7 9" src="#surface"></a-box>

        <a-box position="41.9 7 -11" rotation="0 0 0" width="0.1" height="4" depth="1" scale="1 1 7" color="" src="#tv"></a-box>
        <a-box position="41.9 11 -5" rotation="0 0 0" width="0.1" height="4" depth="1" scale="1 1 3" src="#thomas"></a-box>
        <a-box position="41.9 11 -17" rotation="0 0 0" width="0.1" height="4" depth="1" scale="1 1 3" src="#vee"></a-box>


        <!-- Walls -->
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 14" position="-8  8.7 -1">
        </a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 16" position="42  8.7 -4">
        </a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 8.7" position="29 8.7 -28" rotation="0 -90 0">
        </a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 8" position="4 8.7 -15" rotation="0 -90 0">
        </a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="2.2" scale="1 3.5 6" position="16 8.7 -21.5"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 8" position="4 8.7 -22" rotation="0 -90 0"></a-box>

        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="4.3" scale="1 3.5 4" position="10 8.7 -6.5"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 10" position="7 8.7 2" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="2" scale="1 3.5 3" position="4  8.7 5"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 4" position="36 8.7 2" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 4" position="-2 8.7 11" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 16.7" position="17 8.7 8" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="2" scale="1 3.5 5.9" position="18  8.7 13.8"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="1.5" scale="1 3.5 5.9" position="3.9 8.7 15.5"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="2" scale="1 3.5 4" position="22 8.7 14" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="1" scale="1 3.5 5.9" position="25.9 8.7 17"></a-box>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="5" width="0.2" depth="3" scale="1 3.5 16.7" position="17 8.7 20" rotation="0 -90 0"></a-box>

        <a-box color=" rgba(135, 129, 118, 0.15)" height="5" width="0.2" depth="55" scale="1 1 1" position="17 17.7 -32" rotation="0 -90 0"></a-box>
        <a-box color=" rgba(135, 129, 118, 0.15)" height="5" width="0.2" depth="56" scale="1 1 1" position="-10.5 17.7 -4" rotation="0 0 0"></a-box>
        <a-box color=" rgba(135, 129, 118, 0.15)" height="5" width="0.2" depth="56" scale="1 1 1" position="44.5 17.7 -4" rotation="0 0 0"></a-box>
        <a-box color=" rgba(135, 129, 118, 0.15)" height="5" width="0.2" depth="55" scale="1 1 1" position="17 17.7 24" rotation="0 -90 0"></a-box>



        <!-- pillers -->
        <a-box color=" rgba(227, 214, 193, 0.149)" height="1" width="24" depth="0.2" scale="1 1 1" position="4.5 0.4 -28" rotation="0 0 0"></a-box>
        <a-cylinder color="rgb(98, 98, 98)" height="23.7" radius="0.2" position="4 7 -27.87" rotation="0 0 90"></a-cylinder>
        <a-box color=" rgba(227, 214, 193, 0.149)" height="1" width="0.2" depth="5.7" scale="1 1 1" position="-8 0.4 -24.5" rotation="0 0 0"></a-box>

        <!-- Mettal Mesh -->
        <?php for ($i = -6; $i < 16; $i++) {

        ?>
            <a-cylinder radius="0.1" color=" rgb(98, 98, 98)" height="7" position="<?php echo $i . " " ?> 4 -28" rotation="0 -90 0"></a-cylinder>
            <a-sphere radius="0.2" color=" rgb(98, 98, 98)" position="<?php echo $i . " " ?> 7.5 -28" rotation="0 -90 0"></a-sphere>
        <?php }
        ?>
        <a-cylinder radius="0.5" color="rgba(227, 214, 193, 0.149)" height="17.5" position="-7.7 8.7 -27.6" rotation="0 -90 0"></a-cylinder>

        <!-- dinning table -->
        <a-box position="16 1.47 -1.3" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <a-box position="13 1.47 -4.4" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <a-box position="13 1.47 -1.3" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <a-box position="16 1.47 -4.4" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>

        <!-- table surface -->
        <a-box position="14.5 2.8 -2.9" rotation="0 0 90" width="0.1" height="4" scale="-1.4 1 8" src="#surface"></a-box>

        <!-- table mat middle -->
        <a-plane position="14.4 2.9 -2.8" rotation="-90 0 0" width="0.15" height="0.27" rep shadow src="#middle-mat" color="#ffffff" normal-map="#Tiles" scale="5 5 1" roughness="-1"></a-plane>

        <!-- Study Table -->
        <a-box position="36 1.47 2.8" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <a-box position="34 1.47 2.8" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <a-box position="36 1.47 4.4" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <a-box position="34 1.47 4.4" height="1.3" width="0.15" scale="-2 2 0.25" src="#sticks"></a-box>
        <!-- table surface -->
        <a-box position="35 2.8 3.5" rotation="0 0 90" width="0.1" height="4.4" scale="-1.4 1 3" src="#surface"></a-box>
        <!-- table mat middle -->
        <a-plane position="36 2.9 3.5" rotation="-90 0 0" width="0.15" height="0.27" rep shadow src="#middle-mat" color="#ffffff" normal-map="#Tiles" scale="5 5 1" roughness="-1"></a-plane>
        <!-- study chair -->
        <a-box position="35 1.5 5.2" rotation="0 0 90" width="0.1" height="1.1" scale="-1.4 1 1.5" src="#surface"></a-box>
        <a-box position="35.5 0.7 4.6" height="1" width="0.15" scale="1 1.6 0.25" src="#sticks"></a-box>
        <a-box position="34.5 0.7 4.6" height="1" width="0.15" scale="1 1.6 0.25" src="#sticks"></a-box>
        <a-box position="35.5 2 6" height="1.3" width="0.15" scale="1 3 0.25" src="#sticks"></a-box>
        <a-box position="34.5 2 6" height="1.3" width="0.15" scale="1 3 0.25" src="#sticks"></a-box>

        <!-- PC -->
        <!-- monitor -->
        <a-box rotation="0 90 0" position="35 4 3" height="1.6" width="0.03" depth="2.4" scale="1 1 1" src="#windows11"></a-box>
        <a-box rotation="0 90 0" position="35 4 2.9" height="1.6" width="0.15" depth="2.4" scale="1 1 1" color="black"></a-box>
        <a-box rotation="0 90 0" position="35 3 3" height="0.5" width="0.15" depth="0.3" scale="1 1 1" color="black"></a-box>
        <a-box rotation="0 90 0" position="35 2.9 3" height="0.1" width="0.6" depth="0.7" scale="1 1 1" color="black"></a-box>
        <!-- system unit -->
        <a-box rotation="0 90 0" position="36 2.95 3" height="0.2" width="0.6" depth="0.7" scale="1 1 1" color="black"></a-box>

        <!-- keyboard -->
        <a-box rotation="0 90 0" position="35 2.95 4" height="0.07" width="0.4" depth="1.5" scale="1 1 1" color="black"></a-box>


        <!-- shelf -->
        <a-box rotation="0 90 0" position="41.5 8 2.2" height="12" width="0.15" scale="1 1 1"></a-box>
        <?php
        $colors = ["red", "yellow", "blue", "green", "gray", "pink", "cyan", "magenta", "orange", "lightgreen"];
        for ($i = 0; $i <= 12; $i++) {
            if ($i % 3 == 0) {
                if ($i == 0 || $i == 12) {
        ?>
                    <a-box rotation="0 0 -90" position="41.5 <?php echo 2.07 + $i ?> 4" height="1" width="0.15" depth="4.1" scale="1 1 1"></a-box>
                    <?php $F = 0;
                    for ($W = 0; $W < 2; $W += 0.2) {
                    ?>
                        <a-box color="<?php echo $colors[$F] ?> " rotation="0 0 -90" position="41.5 <?php echo 2.25 + $W ?> 2.85" height="1" width="0.15" depth="1" scale="1 1 1"></a-box>
                    <?php $F++;
                    }
                } else {
                    ?>
                    <a-box rotation="0 0 -90" position="41.5 <?php echo 2.07 + $i ?> 2.85" height="1" width="0.15" depth="1.45" scale="1 1 1"></a-box>
                    <?php $q = 0;
                    for ($s = 0; $s < 1; $s += 0.2) {
                    ?>
                        <a-box color="<?php echo $colors[$q] ?> " rotation="95 0 90" position="41.5 <?php echo (2.85 + $i) . " " . (2.4 + $s) ?> " height="1" width="0.15" depth="1.45" scale="1 1 1"></a-box>
                    <?php $q++;
                    }
                }
            } elseif ($i % 2 == 0) {
                $colors2 = ["pink", "cyan", "magenta", "orange", "lightgreen"];
                $F = 0;
                for ($W = 0; $W <= 1; $W += 0.2) {
                    ?>
                    <a-box color="<?php echo $colors2[$F] ?> " rotation="0 0 -90" position="41.5 <?php echo (2.25 + $i + $W) . " " ?> 5.5" height="1" width="0.15" depth="1" scale="1 1 1"></a-box>
                <?php $F++;
                }
                $q = 0;
                for ($s = 0; $s < 1; $s += 0.2) {
                ?>
                    <a-box color="<?php echo $colors2[$q] ?> " rotation="95 0 90" position="41.5 <?php echo (2.8 + $i) . " " . (3.9 + $s) ?> " height="1" width="0.15" depth="1.45" scale="1 1 1"></a-box>
                <?php $q++;
                } ?>
                <a-box rotation="0 0 -90" position="41.5 <?php echo 2.07 + $i ?> 4.8" height="1" width="0.15" depth="2.45" scale="1 1 1"></a-box>
        <?php
            }
        } ?>
        <a-box rotation="0 90 0" position="41.5 8 3.5" height="12" width="0.15" scale="1 1 1"></a-box>
        <a-box rotation="0 90 0" position="41.5 8 6" height="12" width="0.15" scale="1 1 1"></a-box>

        <!--table stick  -->
        <a-box position="16.0 2.55 -2.9" position="0 0 90" height="1.7" width="0.2" scale="-0.2 0.3 3.0" src="#sticks"></a-box>
        <a-box position="13 2.55 -2.9" position="0 0 90" height="1.7" width="0.2" scale="-0.2 0.3 3.0" src="#sticks"></a-box>
        <a-box position="14.4 2.55 -1.2" rotation="0 90 0" height="1.7" width="0.2" scale="-0.2 0.3 2.9" src="#sticks"></a-box>
        <a-box position="14.4 2.55 -4.5" rotation="0 90 0" height="1.7" width="0.2" scale="-0.2 0.3 2.9" src="#sticks"></a-box>
        <a-box position="14.4 0 -2.6" rotation="0 0 0" height="0.2" depth="9" width="8" src="#surface">

            <?php $X_space = 1;
            for ($i = 0; $i <= 6; $i++) {
                if ($i % 2 == 0) {
            ?>
                    <a-plane position="1 2.9 <?php echo " " . (-3 + $i); ?>" rotation="-90 0 0" width="0.14" height="0.2" rep shadow src="#table-mat" color="#ffffff" normal-map="#Tiles" normal-texture-repeat="3 2" scale="6 6 1" repeat=" 2" roughness="-1"></a-plane>
                    <a-plane position="-1 2.9 <?php echo " " . (-3 + $i); ?>" rotation="-90 0 0" width="0.14" height="0.2" rep shadow src="#table-mat" color="#ffffff" normal-map="#Tiles" normal-texture-repeat="3 2" scale="6 6 1" repeat=" 2" roughness="-1"></a-plane>

                    <!-- chair 1 -->
                    <a-box position="2.3 1 <?php echo " " . (4 - $i); ?>" position="0 0 0" height="0.7" width="0.1" scale="-2 2 0.1" material="src: #sticks; color:#ffffff; normal-map: #sticks; normal-texture-repeat: 100 100; repeat:100 100"></a-box>
                    <a-box position="3.8 2 <?php echo " " . (4 - $i); ?>" position="0 0 0" height="1.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="2.3 1 <?php echo " " . (2.9 - $i); ?>" position="0 0 0" height="0.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="3.8 2 <?php echo " " . (2.9 - $i); ?>" position="0 0 0" height="1.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="3 1.7 <?php echo " " . (3.45 - $i); ?>" rotation="0 0 -90" width="0.15" height="1.8" scale="-1 0.9 1.23" src="#surface"></a-box>
                    <a-box position="3.8 2.5 <?php echo " " . (3.49 - $i); ?>" height="0.2" width="0.1" scale="-1 1 1.1" src="#sticks"></a-box>
                    <a-box position="3.8 3.5 <?php echo " " . (3.49 - $i); ?>" height="0.2" width="0.1" scale="-1 1 1.1" src="#sticks"></a-box>
                    <!-- chair 2 -->
                    <a-box position="-2 1 <?php echo " " . (4 - $i); ?>" position="0 0 0" height="0.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="-3.6 2 <?php echo " " . (4 - $i); ?>" position="0 0 0" height="1.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="-2 1 <?php echo " " . (2.9 - $i); ?>" position="0 0 0" height="0.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="-3.6 2 <?php echo " " . (2.9 - $i); ?>" position="0 0 0" height="1.7" width="0.1" scale="-2 2 0.1" src="#sticks"></a-box>
                    <a-box position="-2.7 1.7 <?php echo " " . (3.45 - $i); ?>" rotation="0 0 -90" width="0.15" height="1.8" scale="-1 0.9 1.23" src="#surface"></a-box>
                    <a-box position="-3.6 2.6 <?php echo " " . (3.49 - $i); ?>" height="0.2" width="0.1" scale="-1 1 1.1" src="#sticks"></a-box>
                    <a-box position="-3.6 3.5 <?php echo " " . (3.49 - $i); ?>" height="0.2" width="0.1" scale="-1 1 1.1" src="#sticks"></a-box>
            <?php
                }
            } ?>
        </a-box>

        <!-- Milo tin -->
        <a-cylinder position="14.4 3.3 -3" height="0.7" radius="0.25" src="#Milo"></a-cylinder>

        <!-- Milk tin -->
        <a-cylinder position="14.4 3.0 -2.5" height="0.3" radius="0.14" src="#Milk" repeat="3"></a-cylinder>

        <a-sun intensity="20"></a-sun>
        <a-entity position="-5 5 -55" rotation="0 180 0">
            <a-camera
                user-height="0.6">

            </a-camera>
        </a-entity>
    </a-scene>
</body>

</html>