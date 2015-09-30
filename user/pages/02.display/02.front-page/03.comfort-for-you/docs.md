---
title: Comfort for you module
taxonomy:
    category: docs
---

The Comfort for you module on the demo home page is an example of using the Zenshortcode plugin to render a grid of content as well as font icons.

![Comfort for you](/images/frontpage/comfort-for-you.jpg)


#### Steps to recreate this module
This module is a custom html module published to the grid8 module position.

1. Navigate to the module manager in your Joomla administrator via extensions > Module Manager
2. Click new
3. Select the custom html type module
4. Copy the markup displayed below into the text area of the custom module.
5. Assign the module to a module position (grid8).
6. Ensure the module is published
7. Give the module a title
8. Set the module title to be hidden
9. Save your new module.

#### Markup Used

	<p>Curabitur vestibulum fringilla mi, id dictum dolor lobortis non. In lacus mauris, porttitor quis egestas ac, luctus non erat. <br />Duis vulputate tincidunt lorem a tempor. Suspendisse potenti.</p>
	{zen-row}
		{zen-4}
		{zen-ambulance}{/zen-ambulance}
		<h3>Emergency Services</h3>
		<p><strong>Runner up excellence awards</strong><br />
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Vivamus elit velit, tempor quis ligula sed, euismod pretium neque. Maecenas aliquam quam at consequat faucibus. Mauris quis elit elit.</p>
		{/zen-4}
		{zen-4}
			<p>{zen-heart-o}{/zen-heart-o}</p>
			<h3>Accessibility</h3>
			<p><strong>Three times accessibility champions</strong><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Vivamus elit velit, tempor quis ligula sed, euismod pretium neque. Maecenas aliquam quam at consequat faucibus. Mauris quis elit elit.</p>
		{/zen-4} 
		{zen-4}
			<p>{zen-medkit}{/zen-medkit}</p>
			<h3>Competent Staff</h3>
			<p><strong>Friendly staff 2015</strong><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Vivamus elit velit, tempor quis ligula sed, euismod pretium neque. Maecenas aliquam quam at consequat faucibus. Mauris quis elit elit.</p>
		{/zen-4}
	{/zen-row}


#### Setting the background color
The demo site features a bright red background behind this module position. This color is specified in the template settings under the row style section under the theme panel.

The demo uses the secondary-row style which uses the colour set in the @secondary value at the top of the page. 

![Comfort for you settings](/images/settings/row-style.jpg)


 


