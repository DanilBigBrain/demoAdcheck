$(document).ready(function() {
    $(".close-icon").click(function() {
        $(this).parent().next().slideUp();
        $(this).parent().slideUp();
    });
});

function switchen(){
    var videoAd=document.getElementById("videoAd")
    var source=document.getElementById("source")
   
    source.setAttribute('src', 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4');
    videoAd.load()
  
    videoAd.play()
  }