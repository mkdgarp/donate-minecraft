<html lang="th">
<head>
  <meta name="description" content="Minecraft en 3D creado con css3 html5 JS">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="Scene">
    <div class="Godo-wrap">
      <div class="Godo">

        <div class="Godo-header">
          <div class="Head">
            <div class="Head-top u-bg"></div>
            <div class="Head-front u-bg"></div>
            <div class="Head-left u-bg"></div>
            <div class="Head-right u-bg"></div>
            <div class="Head-back u-bg"></div>
            <div class="Head-bottom u-bg"></div>
          </div>
        </div>

        <div class="Torso">
          <div class="Torso-top u-bg"></div>
          <div class="Torso-front u-bg"></div>
          <div class="Torso-left u-bg"></div>
          <div class="Torso-right u-bg"></div>
          <div class="Torso-back u-bg"></div>
          <div class="Torso-bottom u-bg"></div>
        </div>

        <div class="LeftArm">
          <div class="LeftArm-top u-bg"></div>
          <div class="LeftArm-front u-bg"></div>
          <div class="LeftArm-left u-bg"></div>
          <div class="LeftArm-right u-bg"></div>
          <div class="LeftArm-back u-bg"></div>
          <div class="LeftArm-bottom u-bg"></div>
        </div>

        <div class="RightArm">
          <div class="RightArm-top u-bg"></div>
          <div class="RightArm-front u-bg"></div>
          <div class="RightArm-left u-bg"></div>
          <div class="RightArm-right u-bg"></div>
          <div class="RightArm-back u-bg"></div>
          <div class="RightArm-bottom u-bg"></div>
        </div>

        <div class="Legs">
          <div class="LeftLeg">
            <div class="LeftLeg-top u-bg"></div>
            <div class="LeftLeg-front u-bg"></div>
            <div class="LeftLeg-left u-bg"></div>
            <div class="LeftLeg-right u-bg"></div>
            <div class="LeftLeg-back u-bg"></div>
            <div class="LeftLeg-bottom u-bg"></div>
          </div>

          <div class="RightLeg">
            <div class="RightLeg-top u-bg"></div>
            <div class="RightLeg-front u-bg"></div>
            <div class="RightLeg-left u-bg"></div>
            <div class="RightLeg-right u-bg"></div>
            <div class="RightLeg-back u-bg"></div>
            <div class="RightLeg-bottom u-bg"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="base"></div>
    <!-- /godofredo -->
  </div>

<!-- <a href="http://godofredo.ninja/godofredo" class="By">By GodoFredoNinja</a>
<a href="https://github.com/godofredoninja/Minecraft3D" class="Github"><i class="fa fa-github"></i></a>
<a href="https://www.facebook.com/godofredo.ninja" class="Facebook"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/GodoFredoNinja" class="Twitter"><i class="fa fa-twitter"></i></a> -->
  <!-- using libraries -->
  <!-- 
   //cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js
   //cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js
   //cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js
  -->
</body>

<script>
(function() {
  'use strict';

  var $Godo = $('.Godo');
  var $Scene = $('.Scene');
  var axis = {x:0, y:0, rx:0, ry:0, rz:0, s:1};

  var GodoScene = new Hammer.Manager($Scene[0]);
    GodoScene.add( new Hammer.Pan({ direction: Hammer.DIRECTION_ALL, threshold: 0 }) );
    GodoScene.add( new Hammer.Pinch({ threshold: 0 }) );

    GodoScene.on("pan", function(e){
      axis.rx = axis.x + e.deltaX;
      axis.ry = axis.y - e.deltaY;
      TweenMax.to($Godo, 0.5, {'scale': axis.s , 'rotationY': axis.rx, 'rotationX': axis.ry, overwrite:1, ease:Strong.easeOut});
    })
    .on("panend", function(e){
      axis.x += e.deltaX;
      axis.y -= e.deltaY;
    })

})();
</script>
</html>