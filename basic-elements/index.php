<?php
/*
 * Week 3
 */ 
?>

<?php 
define('SLUG', 'basic-elements');
include_once('../header.php'); ?>

<div class="row markdown-body" style="margin-bottom: 20em;">

	<div class="column small-12">

		<br/>

		<h1>Basic HTML Elements</h1>
		<h3 class="subheader">Week 3</h3>

		<hr/>
		<br/>

		<h3 class="text-highlight">Document Type</h3>

		<div class="row">
			<div class="column medium-6">
				<h4>Doctype</h4>
				<p>The <code>&lt;!DOCTYPE html&gt;</code> tag <em>always</em> goes at the top of your document</p>
			</div>
			<div class="column medium-6">
				<pre><code>
&lt;!DOCTYPE html&gt;
				</code></pre>
			</div>
		</div>

		<div class="row">
			<div class="column medium-6">
				<h4>HTML tags</h4>
				<p>The <code>&lt;html&gt;&lt;/html&gt;</code> tags come next.
				Everything on your site should go inside these tags.</p>
			</div>
			<div class="column medium-6">
				<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;!-- the &lt;head&gt; and &lt;body&gt; tags go inside here! --&gt;
&lt;/html&gt;
				</code></pre>
			</div>
		</div>

		<br/>
		<hr/>
		<br/>

		<div class="row">
			<div class="column medium-6">
				<h3 class="text-highlight">The Head</h3>
				<p>The head tags are like the brain of your website.<br/>
				No one sees them but they do stuff like hold the title of your website </p>
			</div>
			<div class="column medium-6">
				<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;!-- the &lt;title&gt; tags go in here! --&gt;
&lt;/head&gt;
&lt;/html&gt;
				</code></pre>
			</div>
		</div>

		<div class="row">
			<div class="column medium-6">
				<h4>Title</h4>
				<p>The title tags hold the title of your website. They go in between the &lt;head&gt; tags.</p>
			</div>
			<div class="column medium-6">
				<pre><code>
&lt;head&gt;
&lt;title&gt;My Awesome Website&lt;/title&gt;
&lt;/head&gt;
				</code></pre>
			</div>
		</div>
		

		<br/>
		<hr/>
		<br/>

		<div class="row">
			<div class="column medium-6">
				<h3 class="text-highlight">The Body</h3>
				<p>The <code>body</code> tags <strong>COME AFTER</strong> the <code>head</code> tags.<br/>
				Everything that you want people to see should go between the body tags.</p>
			</div>
			<div class="column medium-6">
				<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;My Awesome Website&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;!-- People will see stuff in here! --&gt;
&lt;/body&gt;
&lt;/html&gt;
				</code></pre>
			</div>
		</div>


		<br/>
		<hr/>
		<br/>

		<div class="row">
			<div class="column medium-6">
				<h3 class="text-highlight">Headings</h3>
				<p>These are the heading tags we can choose from.<br/>
				<code>h1</code> is the biggest and <code>h6</code> is the smallest. </p>
			</div>
			<div class="column medium-6">
				<div class="blankslate panel">
					<h1>Heading 1</h1>
					<h2>Heading 2</h2>
					<h3>Heading 3</h3>
					<h4>Heading 4</h4>
					<h5>Heading 5</h5>
					<h6>Heading 6</h6>
				</div>
				<div class="highlight">
					<pre><code>&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;</code></pre>
				</div>
			</div>
		</div>

		<br/>
		<hr/>
		<br/>

		<div class="row">
			<div class="column medium-6">
				<h3 class="text-highlight">Paragraphs</h3>
				<p>We use <code>&lt;p&gt;&lt;/p&gt;</code> tags to give us <strong>paragraphs</strong>.</p>
			</div>
			<div class="column medium-6">
				<div class="blankslate panel">
					<p>This is a paragraph tag. Isn't it interesting?</p>
				</div>
				<div class="highlight">
					<pre><code>&lt;p&gt;This is a paragraph tag. Isn't it interesting?&lt;/p&gt;</code></pre>
				</div>
			</div>
		</div>

		<br/>
		<hr/>
		<br/>

		<div class="row">
			<div class="column medium-6">
				<h3 class="text-highlight">Links</h3>
				<p>We use <code>&lt;a&gt;&lt;/a&gt;</code> tags when we want to make a link.</p>
			</div>
			<div class="column medium-6">
				<div class="blankslate panel">
					<a href="http://www.google.com">This is a link to google.com</a>
				</div>
				<div class="highlight">
					<pre><code>&lt;a href="http://www.google.com"&gt;This is a link to google.&lt;/a&gt;</code></pre>
				</div>
			</div>
		</div>

		<br/>
		<hr/>
		<br/>

		<div class="row">
			<div class="column medium-6">
				<h3 class="text-highlight">Images</h3>
				<p>We use <code>&lt;img /&gt;</code> tags when we want to make an image.</p>
			</div>
			<div class="column medium-6">
				<div class="blankslate panel">
					<img src="http://bit.ly/1KmQI9w" />
				</div>
				<div class="highlight">
					<pre><code>&lt;img src="http://bit.ly/1KmQI9w" /&gt;</code></pre>
				</div>
			</div>
		</div>

		<br/>

		<div class="row">
			<div class="column medium-6">
				<h4>Make it a link</h4>
				<p>We can put an <code>&lt;img /&gt;</code> tag inside of an <code>&lt;a&gt;&lt;/a&gt;</code> tag to make it link to another website.</p>
			</div>
			<div class="column medium-6">
				<div class="blankslate panel clearfix">
					<div class="tooltipped tooltipped-n left" aria-label="I'm a link!. Click me.">
					<a href="http://www.google.com"><img src="http://bit.ly/1KmQI9w" /></a>&nbsp;
					</div>
				</div>
				<div class="highlight">
					<pre><code>&lt;a href="http://www.google.com"&gt;
	&lt;img src="http://bit.ly/1KmQI9w" /&gt;
&lt;/a&gt;</code></pre>
				</div>
			</div>
		</div>

		<br/>
		<hr/>
		<br/>

		<h2 class="text-highlight">Assignment</h2>

		<br/>

		<h3 class="lead">Open SublimeText and create index.html on your desktop</h3>

		<ol>
			<li>Go to <strong>File > New</strong> to create a new document.</li>
			<li>Go to <strong>File > Save</strong> to save the document as index.html to your desktop.</li>
			<li>Open Chrome and go to <strong>File > Open</strong> to open your index.html file.</li>
		</ol>

		<br/>

		<h3 class="lead">Create an html page with the following:</h3>

		<ol>
			<li>Your site should have a title.</li>
			<li>Create 3 <strong>headings</strong> using any of the heading tags, H1 to H6.</li>
			<li>Create 3 <strong>paragraphs</strong>.</li>
			<li>Create 2 <strong>images</strong>.</li>
			<li>Create 2 <strong>links</strong>, one using text and one using an image.</li>
		</ol>

		<br/>

		<h3 class="text-highlight">Bonus Points</h3>

		<p class="lead">Change the font size and color of your text with the 'style' attribute.</p>
		
		<div class="blankslate panel clearfix">
			<h1 style="font-size: 50px; color: red;">I'm a big red heading 1!</h1>
			<h3 style="font-size: 24px; color: blue;">I'm a blue heading 3</h3>
			<p style="font-size: 18px; color: orange;">I'm an orange paragraph.</p>
		</div>
		<div class="highlight">
			<pre><code>&lt;h1 style="font-size: 50px; color: red;"&gt;I'm a big red heading 1!&lt;/h1&gt;
&lt;h3 style="font-size: 24px; color: blue;"&gt;I'm a blue heading 3&lt;/h3&gt;
&lt;p style="font-size: 18px; color: orange;"&gt;I'm an orange paragraph.&lt;/p&gt;</code></pre>
		</div>
	
	</div>

</div>

<?php include_once('../footer.php'); ?>


