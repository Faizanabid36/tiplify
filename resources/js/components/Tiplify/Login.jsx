import React from 'react';
import Nav from "./components/Nav";
import Footer from "./components/Footer";
import axios from "axios";


export default class Login extends React.Component {
    constructor() {
        super()
        this.state = {
            email: '',
            password: ''
        }
        this.submitForm = this.submitForm.bind(this)
        this.inputChange = this.inputChange.bind(this)
    }

    submitForm(e) {
        let {email, password} = this.state
        axios.post('login', {email, password})
            .then((res) => {
                console.log(res.data)
            })
            .catch((err) => {
                console.log(err)
            })
    }

    async inputChange(e) {
        await this.setState({[e.target.name]: e.target.value})
        console.log(this.state)
    }


    render() {
        return (
            <div>
                <Nav/>
                <section className="ftco-section bg-light">
                    <div className="container">
                        <div className="row justify-content-center ">
                            <div className="col-md-12">
                                <div className="wrapper">
                                    <div className="row no-gutters ">
                                        <div className="col-lg-6 col-md-7 order-md-last d-flex align-items-stretch">
                                            <div className="contact-wrap w-100 p-md-5 p-4 ">
                                                <img src={window.TIPLIFY_APP.asset_path + "assets/images/image_16.png"}
                                                     style={{width: 'inherit'}}/>

                                            </div>
                                        </div>

                                        <div className="col-lg-6 col-md-5 d-flex align-items-stretch text-center ">
                                            <div className="info-wrap bg-primary w-100 p-md-5 p-4 ">
                                                <h2 style={{
                                                    textAlign: 'center',
                                                    color: 'white',
                                                    fontWeight: '900', fontSize: '50px'
                                                }}>
                                                    Willkommen zurück!</h2>
                                                <br/><br/>

                                                <div className="row">
                                                    <div className="col-md-12">
                                                        <div className="form-group" style={{marginBottom: '40px'}}>
                                                            <input type="text" className="form-control"
                                                                   name="email" id="email"
                                                                   onChange={this.inputChange}
                                                                   defaultValue={this.state.email}
                                                                   placeholder="Email"
                                                                   style={{
                                                                       borderRadius: '25px',
                                                                       backgroundColor: 'white',
                                                                       backgroundPosition: 'left top',
                                                                       backgroundRepeat: 'repeat',
                                                                       width: '100%',
                                                                       height: '55px',
                                                                       border: '2px solid white'
                                                                   }}/>
                                                        </div>
                                                    </div>

                                                    <div className="col-md-12">
                                                        <div className="form-group" style={{marginBottom: '40px'}}>
                                                            <input type="password" className="form-control"
                                                                   name="password" id="password"
                                                                   onChange={this.inputChange}
                                                                   placeholder="Password"
                                                                   style={{
                                                                       borderRadius: '25px',
                                                                       backgroundColor: 'white',
                                                                       backgroundPosition: 'left top',
                                                                       backgroundRepeat: 'repeat',
                                                                       width: '100%',
                                                                       height: '55px',
                                                                       border: '2px solid white'
                                                                   }}/>
                                                        </div>
                                                    </div>
                                                    <div className="col-md-12">
                                                        <div className="form-group" style={{marginTop: '10px'}}>
                                                            <button
                                                                onClick={this.submitForm}
                                                                style={{
                                                                    borderRadius: '25px',
                                                                    backgroundColor: '#eb295c',
                                                                    backgroundPosition: 'left top',
                                                                    backgroundRepeat: 'repeat',
                                                                    width: '200px',
                                                                    height: '50px',
                                                                    border: '2px solid #eb295c',
                                                                    color: 'white'
                                                                }}>
                                                                weiter
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div className="col-md-12">
                                                        <div className="form-group" style={{marginTop: '10px'}}>
                                                            <a style={{color: '#eb295c'}}>Passwort
                                                                vergessen?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <Footer/>
            </div>
        )
    }
}
