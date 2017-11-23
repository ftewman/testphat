<script type="text/javascript">
    $(document).ready(function () {
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

        var newDate = new Date();
        newDate.setDate(newDate.getDate());
        $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

        var seconds = 0;
        var minutes = 0;
        var hours = 0;

        function getClock(){
            seconds = new Date().getSeconds();
            minutes = new Date().getMinutes();
            hours = new Date().getHours();
        }

        function playMusic() {
            var source = "files/music/baicatuoitre-beat.mp3"
            var audio = document.createElement("audio");
            audio.autoplay = true;
            audio.load()
            audio.addEventListener("load", function() {
                audio.play();
            }, true);
            audio.src = source;
        }

        setInterval(function () {

            getClock();

            if((hours == 16 && minutes == 14 && seconds == 0) || (hours == 8 && minutes == 30 && seconds == 0)) {
                playMusic();
            }

            $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
            $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
            $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
        }, 1000);
    });
</script>