import React from 'react'

export default function Card(props) {
    return (
        <div className="card mb-3" >
            <div className="row g-0">
                <div className="col-md-4">
                    <img src={!props.image? "https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Picture.png": props.image } className="card-img-top" alt="..." id="image" />
                </div>
                <div className="col-md-8">
                    <div className="card-body">
                        <h5 className="card-title pb-3">Name: {props.name}</h5>
                        <h6 className="card-text pb-1">Email: {props.email}</h6>
                        <h6 className="card-text pb-1">Result Card: <a href={props.result}>{props.result}</a></h6>
                        <h6 className="card-text">Skills: {props.skills}</h6>
                    </div>
                </div>
            </div> 
        </div>
    )
}
