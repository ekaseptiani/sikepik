<script>
//http://www.w3schools.com/html/html5_geolocation.asp
window.onload = function(){

    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else { 
		alert("Browser Tidak Support Untuk Mengetahui Jarak !!!");
    }
}

function showPosition(position) {

oFormObject = document.forms['form1'];
oFormObject.elements["long"].value = position.coords.longitude;
oFormObject.elements["lat"].value = position.coords.latitude;

oFormObject = document.forms['form2'];
oFormObject.elements["long"].value = position.coords.longitude;
oFormObject.elements["lat"].value = position.coords.latitude;

oFormObject = document.forms['form3'];
oFormObject.elements["long"].value = position.coords.longitude;
oFormObject.elements["lat"].value = position.coords.latitude;
}

</script>