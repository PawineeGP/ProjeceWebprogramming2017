<canvas id="projects-graph" width="1000" height="400"></canvas>
<script type="text/javascript">
    $(function(){
        $.getJSON("surveys/chart", function (result) {
            alert('');
            var labels = [],data=[];
            for (var i = 0; i < result.length; i++) {
                labels.push(result[i].batch);
                data.push(result[i].created_at);
            }

            var buyerData = {
                labels : labels,
                datasets : [
                    {
                        fillColor : "rgba(240, 127, 110, 0.3)",
                        strokeColor : "#f56954",
                        pointColor : "#A62121",
                        pointStrokeColor : "#741F1F",
                        data : data
                    }
                ]
            };
            var buyers = document.getElementById('projects-graph').getContext('2d');
            new Chart(buyers).Line(buyerData, {
                bezierCurve : true
            });

        });

    });
</script>
