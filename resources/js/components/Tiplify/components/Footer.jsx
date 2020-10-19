import React from 'react';

export default class Footer extends React.Component {
    render() {
        return (
            <footer className="footer">
                <div className="container-fluid px-lg-5">
                    <div className="row">
                        <div className="col-md-9 py-5">
                            <div className="row">
                                <div className="col-md-4 mb-md-0 mb-4">
                                    <h2 className="footer-heading">Powered by tiplify - das bargelslose
                                        Trinkgeld </h2>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                            <h2 className="footer-heading">AGB | Datenschutz | Impressum</h2>

                        </div>
                    </div>
                </div>
            </footer>
        )
    }
}
