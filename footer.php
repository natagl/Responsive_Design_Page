<!-- Footer -->
<footer class="row">
    <div class="footer col-md-12">
        <a href="https://www.rdnetworkbd.com/index.php"><i class="copyright"></i>© 2020 RD NETWORK BD</a>
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
    </div>
</footer>
<!--End footer ->

<!- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function () {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag 
        $(".navbar-nav .nav-item a").each(function () {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
            }
        });
    });
</script>

<!-- JavaScript -->
<script src="script.js"></script>

</html>