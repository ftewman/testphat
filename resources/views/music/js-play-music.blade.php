<script type="text/javascript">
    var source = "files/music/baicatuoitre-beat.mp3"
    var audio = document.createElement("audio");
    audio.autoplay = true;
    audio.load()
    audio.addEventListener("load", function() {
        audio.play();
    }, true);
    audio.src = source;

    function checkTime(){

        var currentTime = new Date(Date.now());
        var currentHour = currentTime.getHours();
        var currentMinute = currentTime.getMinutes();

        $.ajax({
            url : "result.php",
            type : "post",
            dataType:"text",
            data : {
                'currentHour':currentHour, 'currentMinute':currentMinute
            },
            success : function (result){
                $('#result').html(result);
            }
        });
    }

</script>