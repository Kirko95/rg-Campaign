<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<div id="stockchart" class="wd-50p ht-100" style="height: 150px;"></div>
<script>
    "use strict"
    const stockchart = new Chartisan({
        el: '#stockchart',
        url: "@chart('stock')",
        hooks: new ChartisanHooks()
            .colors(['#4299E1', '#67C560'])
            .datasets('pie')
            .tooltip()
            .axis(false)
    });
</script>
