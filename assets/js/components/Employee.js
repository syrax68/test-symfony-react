
import React, {Component} from 'react';
import axios from 'axios';
    
class Employee extends Component {
    constructor() {
        super();
        this.state = { employee: [], loading: true};
    }
    
    componentDidMount() {
        this.getEmployee();
    }
    
    getEmployee() {
       axios.get(`http://localhost:8000/api/employee`).then(employee => {
           this.setState({ employee: employee.data, loading: false})
       })
    }
    
    render() {
        const loading = this.state.loading;
        return(
            <div>
                <section className="row-section">
                    <div className="container">
                        <div className="row">
                            <h2 className="text-center"><span>List of Employee</span>Created with <i
                                className="fa fa-heart"></i> by yemiwebby</h2>
                        </div>
                        {loading ? (
                            <div className={'row text-center'}>
                                <span className="fa fa-spin fa-spinner fa-4x"></span>
                            </div>
                        ) : (
                            <div className={'row'}>
                                { this.state.employee.map(item =>
                                    <div className="col-md-10 offset-md-1 row-block" key={item.id}>
                                        <ul id="sortable">
                                            <li>
                                                <div className="media">
                                                    <div className="media-body">
                                                        <h2>{item.firstname}</h2>
                                                        <h4>{item.lastname}</h4>
                                                        <p>{item.age}</p>
                                                        <p>{item.description}</p>
                                                    </div>
                                                    <div className="media-right align-self-center">
                                                        <a href="#" className="btn btn-default">Contact Now</a>
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
}
export default Employee;