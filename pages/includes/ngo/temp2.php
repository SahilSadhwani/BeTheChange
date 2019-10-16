
<?php
$video = "videos/sample.mp4";
?>

<html>
<head>
        <link type="text/css" href="../jPlayer/dist/skin/pink.flag/css/jplayer.pink.flag.css" rel="stylesheet" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src = "../jPlayer/dist/jplayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src = "../jPlayer/dist/jplayer/jquery.jplayer.js"></script>
     <script type="text/javascript">
    $(document).ready(function(){
      var path = "<?php echo $video; ?>";
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "Big Buck Bunny Trailer",
            m4v: path,
            // ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
            poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "m4v, ogv",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: false,
        toggleDuration: true,
        cssSelector: {
            videoPlay: '.jp-video-play',
            play: '.jp-play',
            pause: '.jp-pause',
            stop: '.jp-stop',
            seekBar: '.jp-seek-bar',
            playBar: '.jp-play-bar',
            mute: '.jp-mute',
            currentTime: '.jp-current-time'
        }
      });

    // while(true){
    //     var time = 4.683212;
    //     if(time === $("#jquery_jplayer_1").data("jPlayer").status.currentTime){
    //         console.log("matched");
    //     }
    // }


      
    });
    
    // $("button").click(function(e){
    //     console.log("hello");
    //     console.log($("#jquery_jplayer_1").data("jPlayer").status.currentTime);
    //     document.getElementById("duration").value= $("#jquery_jplayer_1").data("jPlayer").status.currentTime;
    // });
    // document.getElementById("button").addEventListener("click", function(e){
    //     console.log("hello");
    // });
    
        </script>




</head>

<body>
        
        <div id="jp_container_1" class="jp-video " role="application" aria-label="media player">
                <div class="jp-type-single">
                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                  <div class="jp-gui">
                    <div class="jp-video-play">
                      <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
                    </div>
                    <div class="jp-interface">
                      <div class="jp-progress">
                        <div class="jp-seek-bar">
                          <div class="jp-play-bar"></div>
                        </div>
                      </div>
                      <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                      <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                      <div class="jp-details">
                        <div class="jp-title" aria-label="title">&nbsp;</div>
                      </div>
                      <div class="jp-controls-holder">
                        <div class="jp-volume-controls">
                          <button class="jp-mute" role="button" tabindex="0">mute</button>
                          <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                          <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                          </div>
                        </div>
                        <div class="jp-controls">
                          <button class="jp-play" role="button" tabindex="0">play</button>
                          <button class="jp-stop" role="button" tabindex="0">stop</button>
                        </div>
                        <div class="jp-toggles">
                          <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                          <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                  </div>

                  <button id="button1">Get duration</button>  
                  <p id="duration"></p>
                </div>
              </div>

</body>

</html>

<script>

        // document.getElementById("button").addEventListener("click", function(){
        // //   document.getElementById("demo").innerHTML = "Hello World";
        // console.log("hello");
        // });
        


        $("#button1").click(function(e){
        console.log("hello");
        console.log($("#jquery_jplayer_1").data("jPlayer").status.currentTime);
        document.getElementById("duration").value= $("#jquery_jplayer_1").data("jPlayer").status.currentTime;
        });

        $("#jquery_jplayer_1").bind($.jPlayer.event.timeupdate, function(event) { 
            console.log($("#jquery_jplayer_1").data("jPlayer").status.currentTime);
        });

</script>



