
<!-- TradingView Widget BEGIN -->
<?php

$theme_color = get_field('theme_botton', get_queried_object());
$color = json_decode($theme_color, false);?>
    <div class="tradingview-widget-container">
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
            {
                "symbol": "<?php echo (get_field('stock_symbol', get_queried_object())); ?>",
                "width": "100%",
                "height": "100%",
                "locale": "in",
                "dateRange": "12m",
                "colorTheme": "dark",
                "trendLineColor": "<?php echo $color->secondary_color; ?>",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": false,
                "autosize": true,
                "largeChartUrl": ""
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
