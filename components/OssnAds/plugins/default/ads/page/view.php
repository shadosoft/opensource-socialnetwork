<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.Open Source Social Network.org/licence
 * @link      http://www.Open Source Social Network.org/licence
 */
$ads = new OssnAds;
$ads = $ads->getAds();
?>
<div class="ossn-ads">
    <h4><?php echo ossn_print('sponsored'); ?></h4>
    <?php
    if ($ads) {
        foreach ($ads as $ads) {
            ?>
            <div class="ossn-ads-item">
                <a class="a-heading" href="<?php echo $ads->site_url; ?>"><?php echo $ads->title; ?></a>

                <div class="ossn-ads-link"> <?php echo $ads->site_url; ?> </div>
                <img src="<?php echo ossn_ads_image_url($ads->guid); ?>"/>

                <div class="descript">
                    <?php echo $ads->description; ?>
                </div>

            </div>

        <?php
        }
    }
    ?>
</div>       
       