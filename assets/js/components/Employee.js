
import React, {Component, useState, useEffect} from 'react';
import axios from 'axios';
    
const Employee = () => {
    const [employee, setEmployee] = useState(null);
    const [loading, setLoading] = useState(true);
    
    useEffect(() => {
        getEmployee();
    }, [])
    console.log(employee)
    
    const getEmployee = async ()=> {
        await axios.get(`http://localhost:8000/api/employee`).then(employee => {
            setEmployee(employee.data);
            setLoading(false);
        })
    }
    
    return (
        <div>
            <section className="row-section">
                <div className="container">
                    <div className="row">
                        <h2 className="text-center"><span>List of Employee</span></h2>
                    </div>
                    {loading ? (
                        <div className={'row text-center'}>
                            <span className="fa fa-spin fa-spinner fa-4x"></span>
                        </div>
                    ) : (
                        <div className={'row'}>
                            { employee.map(item =>
                                <div className="col-md-10 offset-md-1 row-block" key={item.id}>
                                    <ul id="sortable">
                                        <li>
                                            <div className="media">
                                                <div className="media-body">
                                                    <h4>Nom:</h4><p> {item.firstname} {item.lastname}</p>
                                                    <h4>Age :</h4><p> {item.age}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            )}
                        </div>
                    )}
                </div>
            </section>
        </div>
    )
}
export default Employee;