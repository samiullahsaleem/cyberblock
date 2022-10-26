import React from 'react'
import { useSelector} from "react-redux";
import ReactECharts from 'echarts-for-react';


const TempratueChart = () => {
  const WDATA = useSelector(state => state.weatherReducer.weatherdata);
  const dayCheck = useSelector(state => state.SetChartDayReducer.day);
  console.log("day check:"+dayCheck)
  console.log("from temprature graph" + WDATA)
  let option = {};

  WDATA? option = {
    xAxis: {
      type: 'category',
      data: ['4 pm', '7 pm', '10 pm', '1 am', '4 am', '7 am', '10 am', "1 pm"],
      axisPointer: {
        label:{
          color:"yellow",
        }
      }
    },
    yAxis: {
      show: false,
      type: 'value',
      splitLine: {
        show: false
      }
    },
    series: [
      {
        name: 'Search Engine',
        type: 'line',
        stack: 'Total',
        smooth: 0.6,
        symbolSize: 0,
        symbol: 0,

        label: {
          show: true,
          position: 'top'
        },
        areaStyle: {

          color: "#fff5cc"
        },
        lineStyle: {
          color: 'rgb(255, 204, 0)',
        },
        data: [Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[16].temp_c), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[19].temp_c), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[22].temp_c), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[1].temp_c), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[4].temp_c), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[7].temp_c), Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[10].temp_c),Math.ceil(WDATA.forecast.forecastday[dayCheck?dayCheck:0].hour[13].temp_c)]
      }
    ]
  }: option = {
    xAxis: {
      type: 'category',
      data: ['4 pm', '7 pm', '10 pm', '1 am', '4 am', '7 am', '10 am', "1 pm"],
      axisPointer: {
        label:{
          color:"yellow",
        }
      }
    },
    yAxis: {
      show: false,
      type: 'value',
      splitLine: {
        show: false
      }
    },
    series: [
      {
        name: 'Search Engine',
        type: 'line',
        stack: 'Total',
        smooth: 0.6,

        label: {
          show: true,
          position: 'top'
        },
        areaStyle: {

          color: "rgba(255, 210, 0, 0.2)"
        },
        lineStyle: {
          color: 'rgb(255, 204, 0)',
        },
        data: [24,33,36,32,29,40,25,38]
      }
    ]
  }

  return (
    <div> {WDATA ?
      <ReactECharts
        option={option}
      // style={{ height: '300px', width: '100%' }}
      // onEvents={onEvents}
      /> : " "}
    </div>
  )
}

export default TempratueChart;