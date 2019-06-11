<div class="clearfix"></div>
<div class="contact-section">
    <div class="row">
        <div class="col span-1-of-10"></div>
        <div class="col span-2-of-10" id="contact">
            <h4>NIX</h4>
            <ul class="information">
                <li>
                    <!-- <i class="fas fa-map-marker-alt small-icon"></i> -->
                    <a href="https://goo.gl/maps/e7DV6qF4vVyqBKGv9">Linh Trung Ward, Thu Duc District</a>
                </li>
                <li>
                    <a href="https://goo.gl/maps/e7DV6qF4vVyqBKGv9">Ho Chi Minh City, Viet Nam</a>
                </li>

                <li>
                    <a style="text-decoration: none;" href="tel:+84886880273">Tell: +84 886 880 273 </a>
                </li>

                <li>
                    <a href="mailto:info@nix.com">info@nix.com</a>
                </li>

            </ul>
        </div>
        <div class="col span-2-of-10">
            <h4>EXPLORE</h4>
            <ul class="information">
                <li>
                    <a href="showcate.php">Shop</a>
                </li>
                <li>
                    <a href="danh_muc_sp.php?id=7">MacBook</a>
                </li>
                <li>
                    <a href="danh_muc_sp.php?id=8">iPhone</a>
                </li>
                <li>
                    <a href="danh_muc_sp.php?id=9">iPad</a>
                </li>
            </ul>
        </div>
        <div class="col span-2-of-10">
            <h4>HELP</h4>
            <ul class="information">
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="policy.php">Shipping & Return</a>
                </li>
                <li>
                    <a href="policy.php">Store Policy</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
            </ul>
        </div>
        <div class="col span-2-of-10">
            <h4>SOCIALS</h4>
            <ul class="information">
                <li>
                    <a href="https://www.facebook.com/meou2731999">Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com">Twitter</a>
                </li>
                <li>
                    <a href="https://instagram.com">Instagram</a>
                </li>
                <li>
                    <a href="https://printerest.com">Pinterest</a>
                </li>
            </ul>
        </div>
        <div class="col span-1-of-10"></div>
        <div class="clearfix"></div>
        <hr>
        <div class="footer">
            Copyright &#169 2019 NIX Inc. All rights reserved.
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>public/frontend/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>public/frontend/js/scripts.js"></script>

</body>

</html>
<script>
$(function() {
    $updatecart = $(
        ".updatecart");
    $updatecart.click(function(e) {
        e.preventDefault();
        $qty = $(this).parents("tr").find(".qty").val();
        $key = $(this).attr("data-key");
        $.ajax({
            url: 'capnhatgiohang.php',
            type: 'GET',
            data: {
                'qty': $qty,
                'key': $key
            },
            success: function(data) {
                if (data == 1) {
                    alert("Cap nhat thanh cong");
                    location.href = 'giohang.php';
                }

            }
        });
    })

})
</script>
