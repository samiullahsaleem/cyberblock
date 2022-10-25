import axios from "axios";

const options = {
  method: 'GET',
  url: 'https://weatherapi-com.p.rapidapi.com/forecast.json',
  params: {q: 'Karachi', days: '6'},
  headers: {
    'X-RapidAPI-Host': 'weatherapi-com.p.rapidapi.com',
    'X-RapidAPI-Key': '8d9728eadamshfb0f68ef85d7f64p1366d7jsn6a1a753bd1a7'
  }
};
//   useEffect(() => {
//     const getdata=async()=>{
//      await axios.request(options).then((response) => {
//       console.log(response.data.current)
//       let wData=response.data.current;
//       setWeatherdata(wData);
//       console.log(wData)
//     }).catch(function (error) {
//       console.error(error);
//     });
//   }
//   getdata()
//   });
  


export const fetchData=(data)=>{
    return{
        type:"GET_WEATHER_DATA",
        payload:data
    }
}
// export const fetchDataCreater=()=>{
//   return dispatch=>{
//       axios.get("https://api.openweathermap.org/data/2.5/onecall?lat=24.8607&lon=67.0011&appid=acad7fbd404c922dad0db33ce09f3e9a").then((response) => {
//            console.log("actions",response.data)
//            let wData=response.data;
//            dispatch(fetchData(wData));
//          }).catch(function (error) {
//            console.error(error);
//          });
//        }
  
// }
// https://api.openweathermap.org/data/2.5/weather?q=karachi&appid=acad7fbd404c922dad0db33ce09f3e9a
// https://api.openweathermap.org/data/2.5/onecall?q=karachi&appid=acad7fbd404c922dad0db33ce09f3e9a
// "https://api.openweathermap.org/data/2.5/forecast/daily?lat=24.8607&lon=67.0011&cnt=7&appid=acad7fbd404c922dad0db33ce09f3e9a"

export const fetchDataCreater=()=>{
    return dispatch=>{
        axios.request(options).then((response) => {
             console.log("actions",response.data)
             let wData=response.data;
             dispatch(fetchData(wData));
           }).catch(function (error) {
             console.error(error);
           });
         }
    
}