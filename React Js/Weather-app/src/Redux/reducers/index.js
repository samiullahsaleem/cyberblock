import { combineReducers } from "redux";
import SetChartDayReducer from "./SetDayCharReducer";
import weatherReducer from "./weatherReducer";

const allreducer=combineReducers({
    SetChartDayReducer,
    weatherReducer
})
export default allreducer;