import ReactECharts from 'echarts-for-react';
import React from 'react';

const WindChart = () => {
  const  option = {
        xAxis: {
          type: 'category',
          data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
          type: 'value'
        },
        series: [
          {
            name: 'Search Engine',
            type: 'line',
            stack: 'Total',
            label: {
              show: true,
              position: 'top'
            },
            areaStyle: {},
            emphasis: {
              focus: 'series'
            },
            data: [820, 932, 901, 934, 1290, 1330, 1320]
          }
        ]
      };
    return (
        <div>
            <ReactECharts
                option={option}
                // style={{ height: '300px', width: '100%' }}
                // onEvents={onEvents}
            />
        </div>
    )
}

export default WindChart;