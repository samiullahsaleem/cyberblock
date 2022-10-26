export const SetChartDay=(data)=>{
    return{
        type:"SetDay",
        payload:data
    }
}

export const SetDayCreater=(data)=>{
    return dispatch=>{
        console.log("day is dispatched: "+data);
        dispatch(SetChartDay(data));
         }   
}