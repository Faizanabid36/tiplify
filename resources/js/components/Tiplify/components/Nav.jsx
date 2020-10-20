import React from 'react'

export default class Nav extends React.Component {
    constructor() {
        super();
    }

    render() {
        return (
            <nav className="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
                 id="ftco-navbar">
                <div className="container">
                    <img className="logo" src={window.TIPLIFY_APP.asset_path + "assets/images/image_15.png"}/>
                    <button className="mob"
                            style={{
                                borderRadius: '25px',
                                backgroundColor: '#2b3349',
                                backgroundPosition: 'left top',
                                backgroundRepeat: 'repeat',
                                width: '200px',
                                height: '50px',
                                border: '2px solid #4ae3c0',
                                color: 'white',
                            }}>
                        Logout
                    </button>
                </div>
            </nav>
        );
    }
}
