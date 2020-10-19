import React from 'react';


export default class Main extends React.Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">I am Main Component</div>
                            <div className="card-body">I am Main Component Body</div>
                            <button>
                                <a href="/component1">Component 1</a>
                            </button>
                            <button>
                                <a href="/component2">Component 2</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
