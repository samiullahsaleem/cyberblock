import React, { useEffect } from 'react'
import { useSelector, useDispatch } from "react-redux";
import { fetchDataCreater } from "../../Redux/actions"
import { Container, Row, Col } from 'react-bootstrap';
import Loader from '../../Components/Loader/loader';
import "./WeatherScreenActual.css";
import TabScreen from '../TabsScreen/Type-Tabs/TabScreen';
import GraphTabs from '../TabsScreen/Graph-Tabs/GraphTabs';

const WTestScreen = () => {
    const WDATA = useSelector(state => state.weatherReducer.weatherdata);
    const dayCheck = useSelector(state => state.SetChartDayReducer.day);


    console.log(WDATA)
    const dispatch = useDispatch();
    useEffect(() => {
        dispatch(fetchDataCreater());
    }, [dispatch])
    return (
        <div className='WT-screen-wraper'>
            {WDATA ?
                <Container>
                    <Row>
                        <Col md={7} sm={12} xs={12} className="first-column">
                            <div className="flex-data media-mob">

                                <div className='img-alignment'>
                                    <img src={dayCheck ? (dayCheck === 1 || dayCheck === 2) ? WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].condition.icon : WDATA.current.condition.icon : WDATA.current.condition.icon}
                                        // src={WDATA.current.condition.icon} 
                                        width="100px" />
                                </div>

                                <div className='temp-number'>
                                    {dayCheck ? (dayCheck === 1 || dayCheck === 2) ? Math.ceil(WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].temp_c) : Math.ceil(WDATA.current.temp_c) : Math.ceil(WDATA.current.temp_c)}
                                    {/* {parseInt(WDATA.current.temp_c)} */}
                                </div>

                                <div className='flex-data cf-style'>
                                    C°|°F

                                </div>
                                <div className='HPW-flex'>
                                    <span>Precipitation: {dayCheck ? (dayCheck === 1 || dayCheck === 2) ? Math.ceil(WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].precip_in) : Math.ceil(WDATA.current.precip_in) : Math.ceil(WDATA.current.precip_in)}
                                        {/* {WDATA.current.precip_in} */}
                                        %</span>
                                    <span>Humidity:
                                        {dayCheck ? (dayCheck === 1 || dayCheck === 2) ? Math.ceil(WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].humidity) : Math.ceil(WDATA.current.humidity) : Math.ceil(WDATA.current.humidity)}
                                        {/* {WDATA.current.humidity} */}
                                        % </span>
                                    <span>Wind: {dayCheck ? (dayCheck === 1 || dayCheck === 2) ? Math.ceil(WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].wind_kph) : Math.ceil(WDATA.current.wind_kph) : Math.ceil(WDATA.current.wind_kph)}
                                        {/* {WDATA.current.wind_kph}  */}
                                        km/h</span>
                                </div>

                            </div>
                        </Col>
                        <Col md={2} sm={12} xs={12} >
                            <div className="city-detail-style">
                                <div className='bold-tag'>{WDATA.location.name}</div>
                                <div className="text-setting">
                                    {dayCheck ? (dayCheck === 1 || dayCheck === 2) ? WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].time : WDATA.location.localtime : WDATA.location.localtime}
                                    {/* {WDATA.location.localtime} */}
                                </div>
                                <div className="text-setting">
                                    {dayCheck ? (dayCheck === 1 || dayCheck === 2) ? WDATA.forecast.forecastday[dayCheck ? dayCheck : 0].hour[0].condition.text : WDATA.current.condition.text : WDATA.current.condition.text}
                                    {/* {WDATA.current.condition.text} */}
                                </div>
                            </div>
                        </Col>
                    </Row>
                    <TabScreen />
                    <GraphTabs />
                </Container> : <Loader className="center-loader" />}
        </div>
    )
}
export default WTestScreen;