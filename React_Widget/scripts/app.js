var App = React.createClass({
  render: function() {
  return ( 
    <div>
      <div>
        <div className="panel panel-primary">
          <div className="panel-heading">
            <h1 className="panel-title">Weather widget</h1>
          </div>  
          <div className="panel-body">
            <AppForm />
          </div>
        </div> 
      </div>
    </div>
  );
 }
});

//Form Component
var AppForm = React.createClass({
  
  componentWillMount: function() {
    var state = this._getSavedState();
      if (!state) {
        return;
      }
      this.setState(state);
  },
  
  getInitialState: function() {
    return {
      city: "",
      activeCity: "",
      weather: "hello weather",
      tabs: ["London", "Paris"]
    }
  },
  
  _saveCurrentState: function() {
      setTimeout(function() {
        localStorage.setItem('state', JSON.stringify(this.state));
      }.bind(this), 0)
  },

  _onCityChange: function(e) {
    this.setState({
      city: e.target.value
    });
  },

  _getSavedState: function() {
    var state = localStorage.getItem('state');
      if (!state) {
        return false;
      }
    try {
      return JSON.parse(state);
        } catch (err) {
          return false;
        }
    },

  _retrieveWeather: function(city) {
    this.setState({
      activeCity: city
    });
    this._saveCurrentState();
      $.get('http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=44db6a862fba0b067b1930da0d769e98', function(result) {
        this.setState({
          weather: {
              main: result.main,
              wind: result.wind
          }
        });
    this._saveCurrentState();
    }.bind(this));
  },

  _remove: function(index) {
    var cities = this.state.tabs.slice();
    var _removedCity = cities.splice(index, 1);
      this.setState({
        tabs: cities
      });
    this._saveCurrentState();
    if (_removedCity[0] === this.state.activeCity) {
      this.state.activeCity = this.state.tabs[0];
    }
  },

  _submitHandler: function(e) {
    e.preventDefault();
    for (var i = 0; i < this.state.tabs.length; i++) {
      if(this.state.city.toLowerCase() === this.state.tabs[i].toLowerCase()) {
        return false;
      }
    };
    var newState = this.state.tabs.slice();
      newState.push(this.state.city);
      this.setState({
        activeCity: this.state.city
      });
      this.setState({
        city: "",
        tabs: newState
      });
      this._saveCurrentState();
  },

  render: function() {
    var tabs = this.state.tabs;
    return ( 
      <div>
      <div className='row'>
        <div className="col-md-4">
        <form onSubmit={this._submitHandler}>
          <div className="input-group">
            <input type="text" className="form-control" value={this.state.city} placeholder="City Name" onChange={this._onCityChange}/>
            <span className="input-group-btn">
              <button className="btn btn-default">ADD CITY</button> 
            </span> 
          </div> 
        </form> 
      </div> 
      </div>
      <br />
      <div className='row'>
        <div className='col-md-12'>
            <ul className="nav nav-tabs"> 
                {tabs.map(function(city, i) {
                  return <Tab isActive={city === this.state.activeCity} on_retrieveWeather={this._retrieveWeather} on_removeTab={this._remove} key={i} index={i} city={city} />
                }.bind(this))} 
            </ul>
        </div>
      </div>
      <div>
        {this.state.weather.main ? <div><WeatherInfo data={this.state.weather}/></div> : null}
      </div>
    </div>
    )
  }
});

//Tab Component
var Tab = React.createClass({
    
    _retrieveWeatherData: function() {
        this.props.on_retrieveWeather(this.props.city);
    },
    
    _removeCity: function(e) {
        e.stopPropagation();
        this.props.on_removeTab(this.props.index);
    },
    
    render: function() {
        return (
         <li role="presentation" className={this.props.isActive ? "active" : ""} onClick={this._retrieveWeatherData}>
            <a href="#">{this.props.city}<i className="glyphicon glyphicon-remove" onClick={this._removeCity}>
              </i>
            </a>
         </li>
        );
    }
});

//Widget Component
var WeatherInfo = React.createClass({
    propTypes: {
        wind: React.PropTypes.object.isRequired,
        main: React.PropTypes.object.isRequired
    },
    render: function() {
      return ( 
        <div className='wrapper'>
          <div className='image'>
            <img alt='weatherImg' src='http://www.opengrid.com/content/wp-content/uploads/2013/01/CIM-for-Weather-Logo.png' />
          </div>
          <br /> <br />
          <div className='main'>
            <p><span className='spanner'>Humidity:</span> <span className='label label-default'>{this.props.data.main.humidity}</span></p>
            <p><span className='spanner'>Pressure:</span> <span className='label label-default'>{this.props.data.main.pressure}</span></p>
            <p><span className='spanner'>Overall temperature:</span> <span className='label label-default'>{this.props.data.main.temp}</span></p>
            <p><span className='spanner'>Max_Temp:</span> <span className='label label-default'>{this.props.data.main.temp_max}</span></p>
            <p><span className='spanner'>Min_Temp:</span> <span className='label label-default'>{this.props.data.main.temp_min}</span></p>
          </div> 
          <div className='wind'>
            <p><span className='spanner'>Wind in Degrees:</span> <span className='label label-default'>{this.props.data.wind.deg}</span></p>
            <p><span className='spanner'>Wind Speed:</span> <span className='label label-default'>{this.props.data.wind.speed}</span></p>            
          </div>
        </div>
      );
    }
});


/***************************
Rendering React App
***************************/
ReactDOM.render( <App />,
  document.getElementById("app")
);