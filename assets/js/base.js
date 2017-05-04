// var tekst = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quasi, eveniet provident similique obcaecati vero fugit, veritatis, nemo amet voluptas ullam. Ab vitae adipisci, voluptates reiciendis dolorem eos, voluptas molestiae."
// 	element = React.createElement('h2', null, 'React!'),
// 	p = React.createElement('p', null, tekst),
// 	img = React.createElement('img', {src:'http://static.adzerk.net/Advertisers/32e5820af89442ccb0a7a01c44ab7b75.jpg'}),
// 	cont = React.createElement('div', {}, img,  p);
	var App = React.createClass({
		render: function(){
			return (
				<div>
					<p>App</p>
				</div>
			);
		}
	});	
	
	var jsx = 
		<div className="fd">
			<h1>gddfgdfhfh</h1>
		</div>;

	ReactDOM.render(<App />, document.getElementById('div_1'));
	
