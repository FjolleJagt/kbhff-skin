<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="https://detector-v4.dearapi.com/js-include/?site=kbhff-site&dev=0"></script>
</head>

<body>
	<div class="scene template i:template">

	<h1>Development template</h1>

	<div class="section">
		<h2>Content examples</h2>
		<p>This page contains multiple variations of content with the purpose of making CSS development more consistent.</p>


		<div class="content-1">
			<h3>Content 1</h3>
			<p>
				<strong>Lorem ipsum</strong> dolor sit amet consectetur <em>adipisicing elit</em>. 
				<span>Consequatur repudiandae</span>, beatae laboriosam voluptatum rerum quaerat, 
				officiis vitae obcaecati modi cumque ad atque quas aperiam excepturi doloremque placeat deleniti quidem voluptas.
			</p>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Blanditiis autem quidem est, reprehenderit in magnam architecto earum dolores amet voluptatum saepe a doloribus doloremque. 
				Laboriosam reiciendis consequuntur accusamus impedit hic.
			</p>
			<ul>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ul>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Officia, esse similique vitae itaque delectus, quia accusamus ut dolore qui, minus reprehenderit cumque! 
				Incidunt, dolorem perferendis temporibus doloribus inventore ipsa consequuntur!
			</p>
			<ol>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ol>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Blanditiis autem quidem est, reprehenderit in magnam architecto earum dolores amet voluptatum saepe a doloribus doloremque. 
				Laboriosam reiciendis consequuntur accusamus impedit hic.
			</p>
			<dl>
				<dt>Term</dt>
				<dd>Describtion</dd>

				<dt>Lorem ipsum</dt>
				<dd>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa molestias, 
					quae perspiciatis consequuntur laudantium odit obcaecati quisquam sint quia eius, 
					dolorum error. Iusto quisquam ut hic saepe ab! At, omnis.
				</dd>
			</dl>

			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <a href="#">Link.</a></p>

			<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
			<ul>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ul>
		</div>


		<div class="content-2">
			<h3>Content 2</h3>
			
			<ul>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ul>

			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
			<ul>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ul>
		</div>


		<div class="content-3">
			<h3>Content 3</h3>
			
			<ol>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ol>

			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
			<ol>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ol>

		</div>


		<div class="content-4">
			<h3>Content 4</h3>

			<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
			<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
		</div>

		<div class="content-5">
			<h3>Content 5</h3>

			<h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h4>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Voluptatum officiis laborum impedit neque nobis soluta quia, sit in corporis, 
				enim velit labore dignissimos odio nostrum, sunt provident a ex illum?
			</p>
		</div>

		<div class="content-6">
			<h3>Content 6</h3>
			<img src="/img/banner-1.jpg" alt="image example"></img>
			
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Aspernatur necessitatibus, excepturi culpa saepe voluptas facilis et laboriosam beatae, 
				accusantium qui alias exercitationem! Assumenda libero cumque quo, commodi numquam hic ipsa.
			</p>
			<img src="/img/banner-1.jpg" alt="image example"></img>
			
			<ul>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
				<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
			</ul>
			<img src="/img/banner-1.jpg" alt="image example"></img>

		</div>
	</div>


	<div class="section">
		<h2>Grid examples</h2>
		
		<div class="c-wrapper">
			<div class="c-one-third">
				<h2>The grid system.</h2>
				<p>
					The new kbhff grid system is meant for grids of three columns yet easily flexible into all kinds of grids. 
					This simple grid system is based on CSS and only requires HTML classes to use.
					Creating a grid is really simple, so let's learn how to use it!
				</p>
				<p>
					To start making a grid you need to define a "wrapper" where we want our content to be neatly divided.
					In the kbhff grid system our container/wrapper is called the <em>c-wrapper</em>.
				</p>
				<p>The "c" stands for "column", and all css classes which uses the grid system will have this prefix.</p>
				<p>To define how content will be divided within our wrapper, to do this we have five types of "columns":</p>
				<p><em>c-three-quarters, c-two-thirds, c-one-half, c-one-third and c-one-quarter</em>.</p>
			</div>
			<div class="c-one-third">
				<p>
					The wrapper represents 100% as it's contains the whole grid.
					Each column's name depicts the size it takes of the wrapper.
				</p>
				<p>
					So <em>c-one-half</em> is exactly 50% of a <em>c-wrapper</em>, <em>c-one-third</em> is 33.333%,
					<em>c-three-quarters</em> is 75% and so on.
				</p>
				<p>
					While it's possible to have your columns add up to other percentages than 100%, 
					we <strong>heavily</strong> recommend that your columns sum is exactly 100% or you'll most likely get unwanted behavior.
				</p>
				<p>Creating a wrapper is done by making a <em>div</em> and giving it the class <em>c-wrapper</em>.</p>
				<p>Creating a column is almost the same, make a <em>div</em> and give it a class with the type of column you want.</p>
				<p>Once you've made a wrapper and given it some columns, you'll have created a grid.</p>
			</div>
			<div class="c-one-third">
				<p>Let's make a simple three column grid, identical to the grid you've been reading from this whole time!</p>
				<p>Remember that a new grid always starts with the column wrapper, so make a div and give it the <em>c-wrapper</em> class.<p>
				<p>	
					Now we want give our wrapper the ability to divide it's content into three columns. 
					So <strong>within</strong> your <em>c-wrapper</em> div make three three new <em>div</em>'s and give each new div the class <em>c-one-third</em>.
				</p>
				<p>Now put a paragraph with some text in each <em>c-one-third</em> and you'll see the div's are now neatly stacked horizontally in three columns.</p>
				<p>
					This concludes the basic tutorial on how to use the new kbhff grid system, 
					but there's alot more functionality such as column nesting, the box class and
					how to make other types of grids further down if you wanna become fully aquainted.
			</div>
		</div>

			<div class="c-wrapper">
				
				<div class="c-one-half c-box">
					<h3>The box class.</h3>
					<p>If you want to differentiate a column in the grid, you can add the "box" class to your column.</p>
					<p>Properties are automatically corrected so the background keep even seperation with normal columns and the text moved in.</p>
					<p>To make a box column, give any sort of column the <em>c-box</em> class in addition to the column type class. </P>
					<p>Example div classes: "<strong>c-one-half c-box</strong>" or "<strong>c-box c-one-quarter</strong>".</p>
				</div>

				<div class="c-one-half c-primary-box">
					<h3>The primary box class.</h3>
					<p>
						If you want to highlight and draw attention to a specific column in the grid, you can add the "primary box" class to your content column.
						Doing so will make the text white and background "kbhff green". 
					</p>
					<p>Properties are automatically corrected so the background keep even seperation with normal columns and the text moved in.</p>
					<p>
						Say you have a <em>c-one-third</em> div that you want to highlight, simply add <em>c-primary-box</em> in the div's class,
						so it becomes either "<strong>c-one-third c-primary-box</strong>" or "<strong>c-primary-box c-one-third</strong>".
					</p>
				</div>

			</div>

		<div class="c-wrapper">
			<div class="c-two-thirds">
				<h3>Other grid layouts</h3>
				<p>
					It's super easy to diverge from the standard 3x <em>c-one-third</em> column layout, just make sure your columns add up to 100%.
					Let's make a two columns grid, we start with a <em>c-two-thirds</em> which takes up 66.66%, so we have 33.33% left to use.
				</p>
			</div>
			<div class="c-one-third">
				<p>
					Since we've already used 66.66%, we'll use a <em>c-one-third</em> column to fill out the remaining space.
					Now we have a two column grid. Alternatively you could use two <em>c-one-half</em>'s and have evenly sized columns.
				</p>
			</div>
		</div>

		<div class="c-wrapper">
			<h3>Nested columns</h3>
			<div class="c-one-half">
				<div class="c-one-quarter">
					<p>Nesting requires you to make sure that when you sum up your child columns, they take up the same space as the parent column.</p>
				</div>
				<div class="c-one-quarter">
					<p>This column and the one to the left are actually two <em>c-one-quarter</em> columns nested withing a <em>c-one-half</em> column.</p>
				</div>
			</div>
			<div class="c-one-half">
				<p>
					This <em>c-one-half</em> isn't nested a nested column. So now we have have two c-one-half columns that add up to 100%
					but looking like a three column grid, thanks to nesting two 25% <em>c-one-quarter</em> columns that fits in the first 50% <em>c-one-half</em> column.
				</p>
			</div>
		</div>

		<div class="c-wrapper">
			<div class="c-one-quarter c-box"><p>This is an <em>c-one-quarter</em> with a box class on it.</p></div>
			<div class="c-one-half c-primary-box">
				<p>
					This is an example grid, which makes use of two <em>c-one-quarter</em>'s to the sides and a <em>c-one-half</em> with a primary box in the middle.
				</p>
			</div>
			<div class="c-one-quarter c-box"><p>This is an <em>c-one-quarter</em> with a box class on it.</p></div>
		</div>

		
	</div>

	<div class="section">
		<h2>Form elements</h2>

		<form action="#" method="POST" class="form">
			<fieldset>
				<h3>Primary data</h3>

				<div class="field string">
					<label for="input_text1">Text</label>
					<input type="text" name="string1" id="input_text1" />
					<div class="help">
						<div class="hint">hint message which is pretty long and explaining a lot of things</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field string required">
					<label for="input_text2">Text required</label>
					<input type="text" name="string2" id="input_text2" />
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message which is pretty long and explaining a lot of things</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<h3>Secondary data</h3>

				<div class="field email required">
					<label for="input_email">Email required</label>
					<input type="email" name="email" id="input_email" maxlength="255" />
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field password required">
					<label for="input_password">Password required</label>
					<input type="password" name="password" id="input_password" maxlength="255" />
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field select">
					<label for="input_select">Select</label>
					<select name="select" id="input_select">
						<option value="0">test</option>
						<option value="1">apple</option>
						<option value="2" selected="selected">pear</option>
						<option value="3">banana</option>
					</select>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field select required">
					<label for="input_select2">Select required</label>
					<select name="select2" id="input_select2">
						<option value="" selected="selected">-- Choose --</option>
						<option value="0">test</option>
						<option value="1">apple</option>
						<option value="2">pear</option>
						<option value="3">banana</option>
					</select>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field text">
					<label for="input_text">Text</label>
					<textarea name="text" id="input_text"></textarea>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field text required">
					<label for="input_text">Text required</label>
					<textarea name="text" id="input_text"></textarea>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field checkbox">
					<input type="hidden" name="checkbox1" value="0" />
					<input type="checkbox" name="checkbox1" id="input_checkbox1" value="1" />
					<label for="input_checkbox1">Checkbox</label>
					<div class="help">
						<div class="hint">hint message which is pretty long and explaining a lot of things</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field checkbox required">
					<input type="hidden" name="checkbox2" value="0" />
					<input type="checkbox" name="checkbox2" id="input_checkbox2" value="1" />
					<label for="input_checkbox2">Checkbox required</label>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message which is pretty long and explaining a lot of things</div>
					</div>
				</div>

				<div class="field radiobuttons">
					<label>Radiobuttons</label>
					<div class="item">
						<input type="radio" name="radiobuttons" id="input_radiobuttons_value1" value="value1" />
						<label for="input_radiobuttons_value1">text1</label>
					</div>
					<div class="item">
						<input type="radio" name="radiobuttons" id="input_radiobuttons_value2" value="value2" />
						<label for="input_radiobuttons_value2">text2</label>
					</div>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<div class="field radiobuttons required">
					<label>Radiobuttons required</label>
					<div class="item">
						<input type="radio" name="radiobuttons2" id="input_radiobuttons_value3" value="value1" />
						<label for="input_radiobuttons_value3">text1</label>
					</div>
					<div class="item">
						<input type="radio" name="radiobuttons2" id="input_radiobuttons_value4" value="value2" />
						<label for="input_radiobuttons_value4">text2</label>
					</div>
					<div class="help">
						<div class="hint">hint message</div>
						<div class="error">error message</div>
					</div>
				</div>

				<ul class="actions">
					<li class="save">
						<input type="submit" value="Submit" class="button primary" />
					</li>
					<li class="cancel">
						<input type="button" value="Cancel" class="button" />
					</li>
					<li class="link">
						<a href="#" class="button">Cancel link</a>
					</li>
					<li class="disabled">
						<input type="button" value="Disabled button" class="button disabled" />
					</li>
					<li class="disabled">
						<a href="#" class="button disabled">Disabled link</a>
					</li>
				</ul>

			</fieldset>
		</form>
	</div>

	</div>
</body>