<?php
/* Getting contacts post type array */
$tab = getPostArray('contact', get_queried_object()->term_id);
$contact = get_field('contact_details', $tab[0]);
foreach ($contact as $val) {
    $name = $val['contact_name'];
    $designation = $val['designation'];
    $pic = $val['contact_picture']['sizes']['thumbnail'];
    $insta = $val['instagram'];
    $twitter = $val['twitter'];
    $face = $val['facebook'];
    $linkdn = $val['linkdin'];
    $email = $val['email'];
    ?>
    <div class="card promoting-card black-tint">
        <!-- Card content -->
        <div class=" d-flex flex-row">
            <!-- Avatar -->
            <img src="<?php echo $pic; ?>" class="rounded-circle" height="50px" width="50px" alt="avatar" />

            <!-- Content -->
            <div>
                <!-- Name -->
                <h4 class="card-title font-weight-bold" style="margin-bottom: 0px;">
                    <?php echo $name; ?>
                </h4>
                <!-- Designation -->
                <p class="card-text">
                    <?php echo $designation; ?>
                </p>
            </div>
        </div>
        <!-- Card content -->
        <div class="">
            <div class="collapse-content" style="display: flex;
                                justify-content: center;">
                <p style="margin-bottom: 0px">
                    <?php if ($insta) { ?>
                        <a href="<?php echo $insta; ?>" class="social-link-member social-icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    <?php } ?>
                    <?php if ($twitter) { ?>
                        <a href="<?php echo $twitter; ?>" class="social-link-member social-icon">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    <?php } ?>
                    <?php if ($face) { ?>
                        <a href="<?php echo $face; ?>" class="social-link-member social-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    <?php } ?>
                    <?php if ($linkdin) { ?>
                        <a href="<?php echo $linkdin; ?>" class="social-link-member social-icon">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    <?php } ?>
                    <?php if ($email) { ?>
                        <a href="<?php echo $email; ?>" class="social-link-member social-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 10px;
    transform: translate(-0.5px, -2px);"></i>
                        </a>
                    <?php } ?>
                </p>
            </div>
        </div>
    </div>
<?php } ?>