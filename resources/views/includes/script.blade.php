<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
          let options = {
            // set the labels option to true to show the labels on the X and Y axis
            xaxis: {
              show: true,
              categories: [@foreach(array_keys($orderData) as $date)'{{ \Carbon\Carbon::parse($date)->format('d M') }}',@endforeach],
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
                  return 'Rp.' + value;
                }
              }
            },
            series: [
              {
                name: "",
                data: @json(array_values($orderData)),
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
              width: 5,
            },
            legend: {
              show: false,
            },
            grid: {
              show: true,
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
              name: "Product",
              color: "#2869D4",
              data: @json($totalProducts),
            },
          ],
          chart: {
            sparkline: {
              enabled: false,
            },
            type: "bar",
            width: "100%",
            height: "100%",
            toolbar: {
              show: false,
            },
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
            enabled: true,
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
                return value
              }
            },
            categories: @json($categories),
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
