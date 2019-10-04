<?php wp_footer(); ?>
<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo $template_dir; ?>/assets/js/popper.min.js"></script>

<!-- Mouse wheel js -->
<script type="text/javascript" src="<?php echo $template_dir; ?>/assets/pages/jquery.mousewheel.min.js"></script>

<!-- Popper for Bootstrap -->
<script src="<?php echo $template_dir; ?>/assets/js/bootstrap.min.js"></script>

<!--Echart Chart-->
<script type="text/javascript" src="<?php echo $template_dir; ?>/plugins/echart/echarts.js"></script>
<script type="text/javascript" src="<?php echo $template_dir; ?>/plugins/echart/world.js"></script>

<!-- Echart init -->
<script src="<?php echo $template_dir; ?>/assets/pages/jquery.echart.init.js"></script>

<!-- Flot chart -->
<script src="<?php echo $template_dir; ?>/plugins/flot-chart/jquery.flot.min.js"></script>
<script src="<?php echo $template_dir; ?>/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $template_dir; ?>/assets/pages/jquery.flot.init.js"></script>


<!-- Jquery ui -->
<script src="<?php echo $template_dir; ?>/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<?php
if (($logged_user_name = pc_user_logged('username')) !== false) {

    $logged_user_name = pc_user_logged('username');
    $logged_user_email = pc_user_logged('email');
    $logged_name = pc_user_logged('name');
    $logged_user_id = pc_user_logged('id');
    echo $logged_user_name;
    echo $logged_name;
    echo $logged_user_email;
    ?>

    <script>
        var restoreId = ""
        <?php if (pc_user_logged('surname')) {
                ?>
            var restoreId = "<?php echo pc_user_logged('surname') ?>"
        <?php } ?>

        function initFreshChat() {
            window.fcWidget.init({
                token: "a3ff1209-258e-41c3-bcf0-cedcd389d73d",
                host: "https://wchat.freshchat.com",
                externalId: '<?php echo $logged_user_id; ?>',
                restoreId: restoreId ? restoreId : null
            });

            window.fcWidget.user.get(function(resp) {
                var status = resp && resp.status,
                    data = resp && resp.data;
                if (status !== 200) {
                    window.fcWidget.user.setProperties({
                        firstName: "<?php echo $logged_name; ?>", // user's first name
                        lastName: "", // user's last name
                        email: "<?php echo $logged_user_email; ?>", // user's email address
                        phone: "", // phone number without country code
                        phoneCountryCode: "", // phone's country code
                        plan: "Estate", // user's meta property 1
                        status: "Active" // user's meta property 2

                    });
                    window.fcWidget.on('user:created', function(resp) {
                        var status = resp && resp.status,
                            data = resp && resp.data;
                        if (status === 200) {
                            if (data.restoreId) {
                                console.log(data.restoreId);
                                $.ajax({
                                    url: "<?php echo admin_url(); ?>admin-ajax.php",
                                    type: 'POST',
                                    data: "action=update_restore_id&id=" + <?php echo $logged_user_id; ?> + "&restore_id=" + data.restoreId,
                                    success: function(data) {
                                        alert('chat restore registered.');
                                    }
                                });
                                var objData = {
                                    UserName: "<? echo $logged_user_name; ?>",
                                    ChatId: data.restoreId
                                }
                                alert(alertData);

                            } else {
                                console.log("no recieved");
                            }
                        }
                    });
                }
            });
        }

        function initialize(i, t) {
            var e;
            i.getElementById(t) ? initFreshChat() : ((e = i.createElement("script")).id = t, e.async = !0, e.src = "https://wchat.freshchat.com/js/widget.js", e.onload = initFreshChat, i.head.appendChild(e))
        }

        function initiateCall() {
            initialize(document, "freshchat-js-sdk")
        }
        window.addEventListener ? window.addEventListener("load", initiateCall, !1) : window.attachEvent("load", initiateCall, !1);
    </script>
<?php

} else {
    // user isn't logged
    echo "not logged";
}
?>

</body>

</html>