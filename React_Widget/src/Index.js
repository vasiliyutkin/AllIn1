import React from 'react';
import { render } from 'react-dom';
import { Router, Route } from 'react-router';
import App from './components/App';
import AppForm from './components/AppForm';
import Widget from './components/Widget';
import Tab from './components/Tab';
import Empty from './components/Empty';
import WeatherInfo from './components/WeatherInfo';




window.React = React;

render(
  (<Router>
    <Route path="/" component={App}>
    </Route>
  </Router>), document.getElementById('content')
);
