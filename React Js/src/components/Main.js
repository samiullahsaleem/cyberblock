import React, { useState } from 'react'
import Card from './Card';

export default function Main() {
    const [formData, setFormData] = useState({ name: "", email: "", result: "", image: "", skill: "" });
    const [registrationsList, setRegistrationsList] = useState([]);
    let screenwidth = window.screen.width;
    const [count, setCount] = useState(0);

    const handleSubmit = (event) => {
        event.preventDefault();
        setRegistrationsList([...registrationsList, formData]);
        setCount(count+1);
        setFormData({name: "", email: "", result: "", image: "", skill: ""});
    }

    const handleInputChange = (event) => {
       let name= event.target.name;
       let value = event.target.value;
        setFormData({ ...formData, [name]:value });
    }

    console.log("list of obj: " , registrationsList);
    
    return (
        <div id="main" className='pb-5'>
            <div id="flex" style={{ width: { screenwidth } }}>
                <div id="form">
                    <form className="row g-3" onSubmit={handleSubmit}>
                        <div className="col-md-12">
                            <label htmlFor="name" className="form-label">Name</label>
                            <input value={formData.name} type="text" className="form-control" name="name" placeholder="Full name" onChange={handleInputChange} />
                        </div>

                        <div className="col-12">
                            <label htmlFor="email" className="form-label">Email</label>
                            <input value={formData.email} type="email" className="form-control" name="email" placeholder="Your email address" onChange={handleInputChange} />
                        </div>
                        <div className="col-12">
                            <label htmlFor="result" className="form-label">Result</label>
                            <input value={formData.result} type="link" className="form-control" name="result" placeholder="Drive link of your result card" onChange={handleInputChange} />
                        </div>
                        <div className="col-md-12">
                            <label htmlFor="image" className="form-label">Image Link</label>
                            <input value={formData.image} type="link" className="form-control" name="image" placeholder="Drive link of your image" onChange={handleInputChange} />
                        </div>
                        <div className="col-md-12">
                            <label htmlFor="skill" className="form-label">Skills</label>
                            <input value={formData.skill} type="text" className="form-control" name="skill" placeholder="Technical skills  eg. web development.." onChange={handleInputChange} />
                        </div>

                        <div className="col-12">
                            <button type="submit" className="btn btn-primary" >Enroll</button>
                        </div>
                    </form>
                </div>
                <div id="card">
                   { registrationsList.map( (studentData) =>
                    <Card key={count} name={studentData.name} email={studentData.email} result={studentData.result} image={studentData.image} skills={studentData.skill} />
                    ) }
                </div>
            </div>
        </div>
    )
}