<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

<div id="timechart" class="wd-50p ht-100" style="height: 150px;"></div>
<script>
    "use strict";
    const timechart = new Chartisan({
        el: '#timechart',
        url: "@chart('time_sheet')",
        hooks: new ChartisanHooks()
            .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
            .datasets('pie')
            .axis(false)
    });
</script>
