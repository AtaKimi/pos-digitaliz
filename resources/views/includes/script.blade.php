<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
          let options = {
            // set the labels option to true to show the labels on the X and Y axis
            xaxis: {
              show: true,
              categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
              labels: {
                show: true,
                style: {
                  fontFamily: "Inter, sans-serif",
                  cssClass: 'text-xs font-normal fill-gray-500'
                }
              },
              axisBorder: {
                show: false,
              },
              axisTicks: {
                show: false,
              },
            },
            yaxis: {
              show: true,
              labels: {
                show: true,
                style: {
                  fontFamily: "Inter, sans-serif",
                  cssClass: 'text-xs font-normal fill-gray-500'
                },
                formatter: function (value) {
                  return '$' + value;
                }
              }
            },
            series: [
              {
                name: "Developer Edition",
                data: [150, 141, 145, 152, 135, 125],
                color: "#1A56DB",
              },
            ],
            chart: {
              sparkline: {
                enabled: false
              },
              height: "100%",
              width: "100%",
              type: "area",
              fontFamily: "Inter, sans-serif",
              dropShadow: {
                enabled: false,
              },
              toolbar: {
                show: false,
              },
            },
            tooltip: {
              enabled: true,
              x: {
                show: false,
              },
            },
            fill: {
              type: "gradient",
              gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
              },
            },
            dataLabels: {
              enabled: false,
            },
            stroke: {
              width: 6,
            },
            legend: {
              show: false
            },
            grid: {
              show: false,
            },
          }
      
          if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("labels-chart"), options);
            chart.render();
          }
        });
      </script>

    <script>
      // ApexCharts options and config
      window.addEventListener("load", function() {
        var options = {
          series: [
            {
              name: "Income",
              color: "#2869D4",
              data: ["1420", "1620", "1820", "1420", "1650", "2120"],
            },
          ],
          chart: {
            sparkline: {
              enabled: false,
            },
            type: "bar",
            width: "100%",
            height: 250,
            toolbar: {
              show: false,
            }
          },
          fill: {
            opacity: 1,
          },
          plotOptions: {
            bar: {
              horizontal: true,
              columnWidth: "100%",
              borderRadiusApplication: "end",
              borderRadius: 6,
              dataLabels: {
                position: "top",
              },
            },
          },
          legend: {
            show: true,
            position: "bottom",
          },
          dataLabels: {
            enabled: false,
          },
          tooltip: {
            shared: true,
            intersect: false,
            formatter: function (value) {
              return "$" + value
            }
          },
          xaxis: {
            labels: {
              show: true,
              style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500'
              },
              formatter: function(value) {
                return "$" + value
              }
            },
            categories: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            axisTicks: {
              show: false,
            },
            axisBorder: {
              show: false,
            },
          },
          yaxis: {
            labels: {
              show: true,
              style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500'
              }
            }
          },
          grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
              left: 2,
              right: 2,
              top: -20
            },
          },
          fill: {
            opacity: 1,
          }
        }

        if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
          const chart = new ApexCharts(document.getElementById("bar-chart"), options);
          chart.render();
        }
      });
    </script>