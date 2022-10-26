const initialState={
}

const weatherReducer=(state=initialState,action)=>{
    switch (action.type) {
        case "GET_WEATHER_DATA":
            // console.log(action.payload);
            return {
                ...state,
                weatherdata: action.payload
            }
        default:
            return state;
    }
}
export default weatherReducer;