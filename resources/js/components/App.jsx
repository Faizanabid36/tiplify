import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Switch, Route} from 'react-router-dom';
import Component1 from "./Tiplify/Component1";
import Component2 from "./Tiplify/Component2";
import Main from "./Tiplify/Main";


export default class App extends React.Component {
    render() {
        return (
            <main>
                <Switch>
                    <Route path='/myapp' component={Main} exact/>
                    <Route path='/component1' component={Component1}/>
                    <Route path='/component2' component={Component2}/>
                </Switch>
            </main>
        )
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(
        <BrowserRouter>
            <App/>
        </BrowserRouter>,
        document.getElementById('app'));
}
