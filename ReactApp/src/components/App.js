import React from 'react';
import { Link }  from 'react-router';
import ContactList from './ContactList';


export default React.createClass({
  render() {
    var body = (<ContactList />);
    
    if(this.props.children) {
      body = this.props.children;
    }

    return (
      <div>
        <header>
          <Link to="/">
            <img width='24px' height='24px' src='http://touchstonejs.io/images/reactjs.png' />
            _Home
          </Link>
          <Link to="/about">             
            <img width='24px' height='24px' src='https://cdn3.iconfinder.com/data/icons/website-contact-icon-set/512/contacts_website_url_logo-512.png' />
            _About
          </Link>
          <Link to="/info">
            <img width='24px' height='24px' src='http://findicons.com/files/icons/2711/free_icons_for_windows8_metro/128/contacts.png' />
            _Info 
          </Link>
        </header>
        <main>
          {body}
        </main>
      </div>
    )
  }
});
