import React from 'react';


export default React.createClass({
  render() {
    return (
      <section>
        <div>
          <h3>{this.props.person.name}</h3>
          <img src={this.props.person.img} />
          <p>{this.props.person.email}</p>
          <p>{this.props.person.phone}</p>        
        </div>      	
      </section>
    );
  }
});