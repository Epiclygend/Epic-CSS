<!DOCTYPE html>
<html class="body-not-full-width">
<head>
	<title>EpiclyCSS Documentation</title>
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Epic-CSS-1.0.css">
	<style>
section:not(:target):not(#guide) {
	display: none;
}
.px150 {
	min-width: 150px; min-height: 150px;
}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- https://fonts.google.com/?selection.family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700 -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<nav class="primary_dark">
		<div class="container _fills">
			<div>
				<a href="#" class="m-r2"><i class="material-icons primary_dark">menu</i></a><span>Epic CSS Documentation</span>
			</div>
		</div>
	</nav>
	<main>
		<section id="guide" data-secname="Guide to Use this Documentation" class="card p0 btn-group _bottom">
			<p class="m1-on-s">You can normally Styling your Element with CSS we've served by Giving Class to that's Element</p>
			<p class="m1-on-s"><b>But</b> you can Styling your CSS using Variable we've Served Flexibly</p>
			<div class="center-btn-group secondary m-t5 m-t1-on-s">
				<a href="#color" class="btn">COLOR</a>
				<a href="#grid" class="btn">GRID SYSTEM</a>
				<a href="#margin" class="btn">MARGIN AND PADDING</a>
				<a href="#shadow" class="btn">SHADOW SYSTEMS</a>
			</div>
			<div class="center-btn-group secondary">
				<a href="#modal" class="btn">MODALS</a>
				<a href="#table" class="btn">TABLES</a>
				<a href="#typography" class="btn">TYPOGRAPHY</a>
				<a href="#button" class="btn">BUTTON</a>
			</div>
			<div class="side-btn-group secondary">
				<a href="#tooltip" class="btn">TOOLTIP</a>
				<a href="#code" class="btn">CODE BLOCK</a>
				<a href="#z" class="btn">Z-INDEXING</a>
			</div>
		</section>
		<section id="color" data-secname="Color Theming" class="secname-r">
			<table class="no-border-rad shadow d1">
				<tfoot><tr><td colspan="2">Hover to see the Hover Color</td></tr></tfoot>
				<tbody>
					<tr class="primary hoverable"><td rowspan="3">Primary</td><td style="background-color: var(--primary-content); color: var(--primary-bg);">Content Color</td></tr>
					<tr><td class="c primary_light">Light</td></tr>
					<tr><td class="c primary_dark">Dark</td></tr>
					<tr class="secondary hoverable"><td rowspan="3">Secondary</td><td style="background-color: var(--secondary-content); color: var(--secondary-bg);">Content Color</td></tr>
					<tr><td class="c secondary_light">Light</td></tr>
					<tr><td class="c secondary_dark">Dark</td></tr>
					<tr class="tertiary hoverable"><td rowspan="3">Tertiary</td><td style="background-color: var(--tertiary-content); color: var(--tertiary-bg);">Content Color</td></tr>
					<tr><td class="c tertiary_light">Light</td></tr>
					<tr><td class="c tertiary_dark">Dark</td></tr>
					<tr class="quartenary hoverable"><td rowspan="3">Quartenary</td><td style="background-color: var(--quartenary-content); color: var(--quartenary-bg);">Content Color</td></tr>
					<tr><td class="c quartenary_light">Light</td></tr>
					<tr><td class="c quartenary_dark">Dark</td></tr>
				</tbody>
			</table>
		</section>
		<section id="grid" data-secname="Grid Systems">
			<code>
&lt;div class="container">[..CONTENTS..]&lt;/div>
			</code>
			<div class="container _vert _Pstart">
				<h1 class="left-bordered">Item Division</h1>
				<p>Use device size and then add the number</p>
				<p class="note">Maximum number is 12</p>
				<div class="card l12">
					<p>Without using <b>auto</b> Class</p>
					<div class="container">
						<div class="card l1">L1</div>
						<div class="card l3">L3</div>
						<div class="card l12">L12</div>
						<div class="card l5">L5</div>
					</div>
					<p>It will be located under the elements before at 1 container</p>
				</div>
				<div class="card l12">
					<p>Using <b>auto</b> Class</p>
					<div class="container">
						<div class="card l1 auto">L1</div>
						<div class="card l12 auto">L12</div>
						<div class="card l5 auto">L5</div>
					</div>
					<p>It will be have 1 row only (horizontal container), they will be auto fit to the container</p>
				</div>
			</div>
			<div class="container _vert _Pstart">
				<h1 class="left-bordered">Vertical Container Content</h1>
				<p>Simple, you only need to add <b>_vert</b> class</p>
				<code>
&lt;div class="container _vert">[..CONTENTS..]&lt;/div>
				</code>
				<p>This will be used if you want to make container inside container and you want to make it vertical</p>
			</div>
			<div class="container _vert _Pstart">
				<h1 class="left-bordered">Content Spacing</h1>
				<h5>The Example below shows the align according to the Main Axis</h5>
				<div class="container">
					<div class="container _vert card tertiary l2">
						<h4>Default</h4>
						<div class="container _vert secondary_light shadow" style="height: calc(80vh - 2.8rem);"><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div></div>
					</div>
					<div class="container _vert card tertiary l2">
						<h4>_Start</h4>
						<div class="container _vert _start secondary_light shadow" style="height: calc(80vh - 2.8rem);"><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div></div>
					</div>
					<div class="container _vert card tertiary l2">
						<h4>_End</h4>
						<div class="container _vert _end secondary_light shadow" style="height: calc(80vh - 2.8rem);"><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div></div>
					</div>
					<div class="container _vert card tertiary l2">
						<h4>_Fills</h4>
						<div class="container _vert _fills secondary_light shadow" style="height: calc(80vh - 2.8rem);"><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div><div class="card _blank primary shadow d2"></div></div>
					</div>
				</div>
				<code>
&lt;div class="container">[..CONTENTS..]&lt;/div>
&lt;div class="container _start">[..CONTENTS..]&lt;/div>
&lt;div class="container _end">[..CONTENTS..]&lt;/div>
&lt;div class="container _fills">[..CONTENTS..]&lt;/div>
				</code>
				<h5>The Example belows show the align according to the Perpendicular Main Axis</h5>
				<code>
&lt;div class="container">[..CONTENTS..]&lt;/div>
&lt;div class="container _Pstart">[..CONTENTS..]&lt;/div>
&lt;div class="container _Pend">[..CONTENTS..]&lt;/div>
&lt;div class="container _Pcenter">[..CONTENTS..]&lt;/div>
				</code>
				<span class="note">But you can make one of them or more to Aligned to Different align than others</span>
				<code>
&lt;div class="container">
	&lt;div class="_pstart">[..CONTENTS..]Child[..CONTENTS..]&lt;/div>
&lt;/div>
&lt;div class="container">
	&lt;div class="_Pend">[..CONTENTS..]Child[..CONTENTS..]&lt;/div>
&lt;/div>
&lt;div class="container">
	&lt;div class="_Pcenter">[..CONTENTS..]Child[..CONTENTS..]&lt;/div>
&lt;/div>
&lt;div class="container">
	&lt;div class="_Pfills">[..CONTENTS..]Child[..CONTENTS..]&lt;/div>
&lt;/div>
				</code>
			</div>
		</section>
		<section id="margin" data-secname="Margin and Padding">
			<div class="container _vert">
				<h2 class="left-bordered">Margin</h2>
				<div class="container">
					<div class="card quartenary"><h6>m1</h6><div class="card m1 tertiary">content</div></div>
					<div class="card quartenary"><h6>m2</h6><div class="card m2 tertiary">content</div></div>
					<div class="card quartenary"><h6>m3</h6><div class="card m3 tertiary">content</div></div>
					<div class="card quartenary"><h6>m4</h6><div class="card m4 tertiary">content</div></div>
					<div class="card quartenary"><h6>m5</h6><div class="card m5 tertiary">content</div></div>
				</div>
				<div class="container">
					<div class="card quartenary"><h6>m6</h6><div class="card m6 tertiary">content</div></div>
					<div class="card quartenary"><h6>m7</h6><div class="card m7 tertiary">content</div></div>
					<div class="card quartenary"><h6>m8</h6><div class="card m8 tertiary">content</div></div>
					<div class="card quartenary"><h6>m9</h6><div class="card m9 tertiary">content</div></div>
					<div class="card quartenary"><h6>m10</h6><div class="card m10 tertiary">content</div></div>
				</div>
				<div class="container"></div>
				<div class="container">
					<div class="card quartenary"><h6>m-t3</h6><div class="card m-t3 tertiary">content</div></div>
					<div class="card quartenary"><h6>m-r3</h6><div class="card m-r3 tertiary">content</div></div>
					<div class="card quartenary"><h6>m-b3</h6><div class="card m-b3 tertiary">content</div></div>
					<div class="card quartenary"><h6>m-l3</h6><div class="card m-l3 tertiary">content</div></div>
					<div class="card quartenary"><h6>m-t3 m-r3</h6><div class="card m-t3 m-r3 tertiary">content</div></div>
				</div>

				<h2 class="left-bordered">Padding</h2>
				<div class="container">
					<div class="card p1 quartenary"><h6>p1</h6></div>
					<div class="card p2 quartenary"><h6>p2</h6></div>
					<div class="card p3 quartenary"><h6>p3</h6></div>
					<div class="card p4 quartenary"><h6>p4</h6></div>
					<div class="card p5 quartenary"><h6>p5</h6></div>
				</div>
				<div class="container">
					<div class="card p-t3 quartenary"><h6>p-t3</h6></div>
					<div class="card p-r3 quartenary"><h6>p-r3</h6></div>
					<div class="card p-b3 quartenary"><h6>p-b3</h6></div>
					<div class="card p-l3 quartenary"><h6>p-l3</h6></div>
					<div class="card p-t3 p-r3 quartenary"><h6>p-t3 p-r3</h6></div>
				</div>
			</div>
		</section>
		<section id="shadow" data-secname="Shadow Systems">
			<div class="container">
				<div class="card shadow"><b>Default Shadow</b></div>
				<div class="card shadow d1"><b>Depth 1</b></div>
				<div class="card shadow d2"><b>Depth 2</b></div>
				<div class="card shadow d3"><b>Depth 2</b></div>
				<div class="card shadow d4"><b>Depth 3</b></div>
			</div>
			<p>You can copy this shadow to your CSS by using variables</p>
			<p><b>Shadow + Depth Num</b></p>
			<div class="container _vert">
				<h3 class="left-bordered">Class Code</h3>
				<code>
&lt;div class="shadow">[..CONTENTS..]&lt;/div>
&lt;div class="shadow d1">[..CONTENTS..]&lt;/div>
				</code>
				<h3 class="left-bordered">Styling with CSS Code</h3>
				<code>
[element selector] {
	box-shadow: var(--shadow-d);
}
[element selector] {
	box-shadow: var(--shadow-d1);
}
[..CONTENTS..]
				</code>
			</div>
		</section>
		<section id="typography" data-secname="Typography">
			<div class="container _vert">
				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>
				<h1 class="left-bordered">Heading with Left Border</h1>
				<code>
&lt;h1 class="left-bordered">[..CONTENTS..]&lt;/h1>
				</code>
				<span class="note">Not only Heading, you can add Left Border to any elements</span>
				<h3 class="left-bordered">Paragraph</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<code>
&lt;p>[..CONTENTS..]&lt;/p>
				</code>
				<h3 class="left-bordered">Note</h3>
				<span class="note">The Quick Brown Fox Jumps Over The Lazy Dog</span>
				<code>
&lt;span class="note">[..CONTENTS..]&lt;/span>
				</code>
				<span>Add <i>Note</i> Class to add this Style</span>
			</div>
		</section>
		<section id="table" data-secname="Table Layout">
			<div class="card _Pfills">
				<table>
					<caption>Example</caption>
					<thead>
						<tr>
							<th>Foo</th><th>Bar</th><th>Baz</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lorem</td><td>Ipsum</td><td>Dolor</td>
						</tr>
						<tr>
							<td>Lorem</td><td>Ipsum</td><td>Dolor</td>
						</tr>
						<tr>
							<td>Lorem</td><td>Ipsum</td><td>Dolor</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Sum</td><td>Count</td><td>Avg</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<code>
&lt;table>
	&lt;caption>[..Table Caption..]&lt;/caption>
	&lt;thead>
		&lt;tr>
			&lt;th>[..Heading..]&lt;/th>&lt;th>[..Heading..]&lt;/th>&lt;th>[..Heading..]&lt;/th>
		&lt;/tr>
	&lt;/thead>
	&lt;tbody>
		&lt;tr>
			&lt;td>[..Row Content..]&lt;/td>&lt;td>[..Row Content..]&lt;/td>&lt;td>[..Row Content..]&lt;/div>
		&lt;/tr>
		&lt;tr>
			&lt;td>[..Row Content..]&lt;/td>&lt;td>[..Row Content..]&lt;/td>&lt;td>[..Row Content..]&lt;/div>
		&lt;/tr>
	&lt;/tbody>
	&lt;tfoot>
		&lt;tr>
			&lt;td>[..Footer Content..]&lt;/td>&lt;td>[..Footer Content..]&lt;/td>&lt;td>[..lt;/td></div>
		&lt;/tr>
	&lt;/tfoot>
&lt;/table>
			</code>
			<h1 class="left-bordered m-t5">Table Edit</h1>
			<div class="container">
				<table>
					<thead>
						<tr>
							<th>Foo</th><th>Bar</th><th>Baz</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lorem</td><td>Ipsum</td><td>Dolor</td>
						</tr>
						<tr>
							<td>Lorem</td><td>Ipsum</td><td>Dolor</td>
						</tr>
						<tr>
							<td>Lorem</td><td>Ipsum</td><td>Dolor</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Sum</td><td>Count</td><td>Avg</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</section>
		<section id="tooltip" data-secname="Tooltip">
			<a class="btn shadow d1" data-tooltip="Lorem Ipsum"><h5>This is  Tooltipped</h5></a>
			<p>Simple, just give the Element <i>'data-tooltip'</i> attribute. <b>the Value is the Tooltip text</b></p>
			<code>
&lt;div data-tooltip='[value]'>Lorem Ipsum&lt;div>
			</code>
			<p><b>Not just div</b>, you can add Tooltip to many Elements, like the Element Above</p>
		</section>
		<section id="z" data-secname="Z-Indexing">
			<h3>NAV = 2</h3>
			<h3>MODALS = 98</h3>
			<h3>TOOLTIP = 99</h3>
		</section>
		<section id="button" data-secname="Button">
			<div class="container _vert m-b5">
				<h1 class="left-bordered _Pstart">.btn</h1>
				<a class="btn">My Button</a>
				<code>
&lt;div class="btn">MY BUTTON&lt;/div>
				</code>
			</div>
			<div class="container _vert">
				<h1 class="left-bordered _Pstart">Button group</h1>
				<b>Example</b>
				<div class="container _vert-s">
					<div class="card btn-group _top p0 m4">
						<div class="side-btn-group tertiary">
							<a class="btn">LOREM</a>
							<a class="btn">IPSUM</a>
							<a class="btn">DOLOR</a>
							<a class="btn">SIT</a>
						</div>
						<div class="center-btn-group tertiary">
							<a class="btn">LOREM</a>
							<a class="btn">IPSUM</a>
							<a class="btn">DOLOR</a>
							<a class="btn">SIT</a>
						</div>
						<h4>top group</h4>
						<code>
&lt;div class="side-btn-group">
	&lt;a class="btn">LOREM&lt;/a>
	&lt;a class="btn">IPSUM&lt;/a>
	&lt;a class="btn">DOLOR&lt;/a>
	&lt;a class="btn">SIT&lt;/a>
&lt;/div>
&lt;div class="center-btn-group">
	&lt;a class="btn">LOREM&lt;/a>
	&lt;a class="btn">IPSUM&lt;/a>
	&lt;a class="btn">DOLOR&lt;/a>
	&lt;a class="btn">SIT&lt;/a>
&lt;/div>
						</code>
					</div>
					<div class="card btn-group _bottom p0 m4">
						<h4>bottom group</h4>
						<code>
&lt;div class="side-btn-group">
	&lt;a class="btn">LOREM&lt;/a>
	&lt;a class="btn">IPSUM&lt;/a>
	&lt;a class="btn">DOLOR&lt;/a>
	&lt;a class="btn">SIT&lt;/a>
&lt;/div>
						</code>
						<div class="side-btn-group tertiary">
							<a class="btn">LOREM</a>
							<a class="btn">IPSUM</a>
							<a class="btn">DOLOR</a>
							<a class="btn">SIT</a>
						</div>
					</div>
				</div>
				<code>
	&lt;!-- Example 1 -->
&lt;div class="card btn-group _top p0">
	&lt;div class="side-btn-group">
		&lt;a class="btn">LOREM</a>
		&lt;a class="btn">IPSUM</a>
		&lt;a class="btn">DOLOR</a>
		&lt;a class="btn">SIT</a>
	&lt;/div>
	&lt;div class="center-btn-group">
		&lt;a class="btn">LOREM</a>
		&lt;a class="btn">IPSUM</a>
		&lt;a class="btn">DOLOR</a>
		&lt;a class="btn">SIT</a>
	&lt;/div>
&lt;/div>

	&lt;!-- Example 2 -->
&lt;div class="card btn-group _bottom p0">
	&lt;div class="side-btn-group">
		&lt;a class="btn">LOREM</a>
		&lt;a class="btn">IPSUM</a>
		&lt;a class="btn">DOLOR</a>
		&lt;a class="btn">SIT</a>
	&lt;/div>
&lt;/div>
				</code>
			</div>
			<p>It will be very useful on modal or to be custom!</p>
		</section>
		<section id="modal" data-secname="Modals">
			<button class="btn secondary" onclick="mod.open();">click to open</button>
		</section>
		<section id="code" data-secname="Block Code">
			<p>This elements are useful for code block element</p>
			<code>
&lt;code>
	&lt;div>[..CONTENTS..]&lt;/div>
	&lt;div>[..CONTENTS..]&lt;/div>
	&lt;div>[..CONTENTS..]&lt;/div>
&lt;/code>
			</code>
			<p>the <b>div</b> elements as row, but you doesn't need to give <b>div</b> element every you want to make row, you only need to give enter or <b>\n</b> it will be automatically add <b>div</b> element every you give enter</p>
		</section>
		<ul class="tblEdit-dialog">
			<li>Edit</li>
			<li>Remove</li>
		</ul>
	</main>
	<div class="modals">
		<div class="modal">
			<div class="container">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="btn-group _bottom">
				<div class="side-btn-group p0">
					<button class="btn" onclick="mod.close();">CLOSE</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="Epic-JS-1.0.js"></script>
<script>
	// var tbl = new tblEdit(document.querySelector('table'));
	(function () {
		toolTips();
		code();
	})();
	var mod = new modal();
</script>
</html>