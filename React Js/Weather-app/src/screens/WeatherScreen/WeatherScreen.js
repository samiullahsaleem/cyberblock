import React, { useEffect } from 'react'
import { useSelector, useDispatch } from "react-redux";
import { fetchDataCreater } from "../../Redux/actions"
import { Container, Row, Col } from 'react-bootstrap';
import Loader from '../../Components/Loader/loader';
// import "./WeatherScreenActual.css"
import TabScreen from "../TabsScreen/Type-Tabs/TabScreen";

const WTestScreen = () => {
    const WDATA = useSelector(state => state.weatherdata);
    console.log(WDATA)
    // const dispatch = useDispatch();
    // useEffect(() => {
    //     dispatch(fetchDataCreater());
    // }, [dispatch])
    return (
        <div className='WT-screen-wraper'>
            {WDATA ?
                <Container>
                    <Row>
                        <Col md={8} sm={8} xs={8} className="first-column">
                            <div className="flex-data">
                                <Col  md={2} xs={2} sm={2}>
                                    <div className='img-alignment'>
                                        <img src={WDATA.current.condition.icon} width="100px" />
                                    </div>
                                </Col>
                                <Col  md={2} sm={2} xs={2}>
                                    <Row>
                                        <Col>
                                            <div className='temp-number'>
                                                {parseInt(WDATA.current.temp_c)}
                                            </div>
                                        </Col>
                                        <Col>
                                            <div className='flex-data'>
                                                <p>c°</p>|<p>f°</p>
                                            </div>
                                        </Col>
                                    </Row>
                                </Col>
                                <Col>
                                    <div>
                                        <Row>Precipitation: {WDATA.current.precip_in}%</Row>
                                        <Row>Humidity: {WDATA.current.humidity}% </Row>
                                        <Row>Wind: {WDATA.current.wind_kph} km/h </Row>
                                    </div>
                                </Col>
                            </div>
                        </Col>
                        <Col >
                            <div className="city-detail-style">
                                <Row className='bold-tag'>{WDATA.location.name}</Row>
                                <Row className="text-setting">{WDATA.location.localtime}</Row>
                                <Row className="text-setting">{WDATA.current.condition.text}</Row>
                            </div>
                        </Col>
                    </Row>
                    {/* <TabScreen/> */}
                </Container> : <Loader className="center-loader"/>}
        </div>
    )
}
export default WTestScreen;