import { Tabs, Tab } from 'react-bootstrap'
import React,{useState,useEffect} from 'react'
import { useSelector,useDispatch } from "react-redux";
import "./GraphTabs.css"

import { SetDayCreater } from '../../../Redux/actions/setChartAction';



const GraphTabs = () => {
    const [key, setKey] = useState('Mon');
    const WDATA = useSelector(state => state.weatherReducer.weatherdata);
    const dayCheck = useSelector(state => state.SetChartDayReducer.day);
    const dispatch = useDispatch();
    console.log(key);
    useEffect(() => {
        switch (key) {
            case "Mon":
                dispatch(SetDayCreater(0))            
                break;
            case "Tues":
                    dispatch(SetDayCreater(1))            
                    break;
            case "Wed":
                 dispatch(SetDayCreater(2))            
                 break;
            default:
                dispatch(SetDayCreater(0))
                break;
        }
                
    }, [key])

    return (
        <div>
            <Tabs
                defaultActiveKey="Mon"
               onSelect={(k)=>setKey(k)}
                id="noanim-tab-example"
                className="mb-3 gcharts-tabs-ul"
            >
                <Tab eventKey="Mon" title={WDATA ? <span className='chart-tab-centi-flex'><img src={WDATA.forecast.forecastday[0].hour[6].condition.icon} /><div><span>{Math.ceil(WDATA.forecast.forecastday[0].day.maxtemp_c)}°</span> <span>{Math.ceil(WDATA.forecast.forecastday[0].day.mintemp_c)}°</span></div> </span> : ""} >
                </Tab>
                <Tab eventKey="Tues"  title={WDATA ? <span className='chart-tab-centi-flex'><img src={WDATA.forecast.forecastday[1].hour[13].condition.icon} /><div><span>{Math.ceil(WDATA.forecast.forecastday[1].day.maxtemp_c)}°</span> <span>{Math.ceil(WDATA.forecast.forecastday[1].day.mintemp_c)}°</span></div> </span> : ""}>
                
                </Tab>
                <Tab eventKey="Wed" title={WDATA ? <span className='chart-tab-centi-flex'><img src={WDATA.forecast.forecastday[2].hour[20].condition.icon} /><div><span>{Math.ceil(WDATA.forecast.forecastday[2].day.maxtemp_c)}°</span> <span>{Math.ceil(WDATA.forecast.forecastday[2].day.mintemp_c)}°</span></div> </span> : ""}>
                {/* <WindChart typeOfTab={"wind"}></WindChart> */}
                </Tab>
            </Tabs>
        </div>
    )
}
export default GraphTabs;



// onSelect={()=>dispatch(SetDayCreater(2))}