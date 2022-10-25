import React, { useState } from 'react'
import { Tabs, Tab } from "react-bootstrap"
import "./TabScreen.css"
import TempratueChart from '../../ChartScreen/TempratueChart'
import PrecipitationChart from '../../ChartScreen/PrecipitationChart';
import WindChart from '../../ChartScreen/WindChart';

const TabScreen = () => {
    const [key, setKey] = useState('temperature');
    return (
        <div className='mt-3'>
            <Tabs
                id="controlled-tab-example"
                activeKey={key}
                onSelect={(k) => setKey(k)}
                className="mb-3 Tabs-ul-div"
                transition={false}
            >
                <Tab eventKey="temperature" tabClassName="Tab-li-item" title="Temperature">
                    <TempratueChart typeOfTab={"temperature"}></TempratueChart>
                </Tab>
                <Tab eventKey="precipitation" tabClassName="Tab-li-item" title="Precipitation">
                    <PrecipitationChart typeOfTab={"precipitation"}></PrecipitationChart>
                </Tab>
                <Tab eventKey="wind" tabClassName="Tab-li-item" title="Wind">
                    <WindChart typeOfTab={"wind"}></WindChart>
                </Tab>
            </Tabs>


        </div>
    )
}


export default TabScreen;