import React from 'react';
import ReactDOM from 'react-dom';
import { Router, Route } from 'react-router';
import App from './components/App';
import About from './components/About';
import Information from './components/Information';


window.React = React;

ReactDOM.render(
  <Router>
    <Route path="/" component={App}>
      <Route path="/about" component={About}/>
      <Route path="/info" component={Information}/>
    </Route>
  </Router>
  , document.getElementById('content')
);
