
<!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/BSE-HDFCBANK/" rel="noopener" target="_blank"><span class="blue-text">HDFCBANK Quotes</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
            {
                "symbol": "<?php echo (get_field('stock_symbol', get_queried_object())); ?>",
                "width": "100%",
                "height": "100%",
                "locale": "in",
                "dateRange": "12m",
                "colorTheme": "dark",
                "trendLineColor": "#37a6ef",
                "underLineColor": "rgba(55, 166, 239, 0.15)",
                "isTransparent": false,
                "autosize": true,
                "largeChartUrl": ""
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
