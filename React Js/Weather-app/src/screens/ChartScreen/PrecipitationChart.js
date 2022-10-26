import ReactECharts from 'echarts-for-react';
import React from 'react'
import { useSelector} from "react-redux";




const PrecipitationChart = () => {
  const WDATA = useSelector(state => state.weatherReducer.weatherdata);
  const dayCheck = useSelector(state => state.SetChartDayReducer.day);
 const option = {
    xAxis: {
      type: 'category',
      data: ['4 pm', '7 pm', '10 pm', '1 am', '4 am', '7 am', '10 am', "1 pm"],
      boundaryGap: false
    },
    yAxis: {
      show: false,
      type: 'value',
      // boundaryGap: [0, '30%']
    },
    series: [
      {
        type: 'line',
        smooth: 0.6,
        symbol: 0,
        lineStyle: {
          color: 'blue',
          width: 5
        },
        label: {
          show: true,
          position: 'top'
        },
        areaStyle: {
          color:"none"
          },
        data: [Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[16].gust_kph), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[19].gust_kph), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[22].gust_kph), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[1].gust_kph), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[4].gust_kph), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[7].gust_kph), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[10].gust_kph),Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[13].gust_kph)]
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

export default PrecipitationChart;