<!-- Overlay that blocks the rest of the page -->
<div id="overlay"></div>

<!-- Notification popup -->
<div id="notification" >
    <p >This site is for informational purposes only. By using this site, you confirm you are 18+. Any information provided should not be seen as an offer to sell or buy any product. Our products are sold in compliance with Tanzanian laws.</p>
    <button id="agreeButton" >I Agree</button>
</div>




<script>
    $(document).ready(function() {
        // Show the overlay and the notification after a delay (e.g., 3 seconds)
        setTimeout(function() {
            $('#overlay').fadeIn('slow'); // Show the overlay
            $('#notification').fadeIn('slow'); // Show the notification
        }, 5000); // 3 seconds delay

        // When the user clicks "I Agree"
        $('#agreeButton').on('click', function() {
            $('#notification').fadeOut('slow'); // Hide the notification
            $('#overlay').fadeOut('slow'); // Hide the overlay
        });
    });
</script>


