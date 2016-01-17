import React from 'react';
import Contact from './Contact';

var people = [
{
	name: 'Andrew',
	email: 'D-sert@ya.ru',
	phone: '3-8097-546-72-12',
	img: 'http://3.bp.blogspot.com/-V7WJAr39Ygk/Uqo35cXgwuI/AAAAAAAADa0/hbrup4tP36w/s1600/CardMunch-logo-on-mevvy.com_.png'
},
{
	name: 'Alice',
	email: 'D-sert@ya.ru',
	phone: '3-8097-546-72-13',
	img: 'http://3.bp.blogspot.com/-V7WJAr39Ygk/Uqo35cXgwuI/AAAAAAAADa0/hbrup4tP36w/s1600/CardMunch-logo-on-mevvy.com_.png'

},
{
	name: 'Loren',
	email: 'D-sert@ya.ru',
	phone: '3-8097-546-72-21',
	img: 'http://3.bp.blogspot.com/-V7WJAr39Ygk/Uqo35cXgwuI/AAAAAAAADa0/hbrup4tP36w/s1600/CardMunch-logo-on-mevvy.com_.png'

},
{
	name: 'Elena',
	email: 'D-sert@ya.ru',
	phone: '3-8097-546-72-31',
	img: 'http://3.bp.blogspot.com/-V7WJAr39Ygk/Uqo35cXgwuI/AAAAAAAADa0/hbrup4tP36w/s1600/CardMunch-logo-on-mevvy.com_.png'
}
];

export default React.createClass({
  render() {
    return (
      <section>
      	<h2>Contact List</h2>
      	<div id='div'>
	      	{people.map(function(person, i) {
	      		return (<Contact person={person} key={i} />)
	      	})}
      	</div>
      </section>
    );
  }
});