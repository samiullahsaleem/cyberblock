const initialState={

}
const SetChartDayReducer=(state=initialState,action)=>{
    switch (action.type) {
        case "SetDay":
            return {
                ...state,
                day: action.payload
            }
        default:
            return state
    }
}

export default SetChartDayReducer;