
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="style.css" type="text/css" rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Permanent Marker|Patrick Hand|Eczar"
		/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js" defer></script>
		<script src="js scripts/jqmain.js"></script>
		<script src="js scripts/ajax.js"></script>
		<script src="js scripts/front.js"></script>
		<script src="js scripts/kanbanAPI.js"></script>
		<title>Time Manager || Kanban Board</title>
		<link rel="shortcut icon" href="data/images/favicon.ico" />
	</head>

	<body>
		<!--------- Header ---------->
		<header>
			<!-- << Nav Logo >> -->
			<div class="logo"></div>

			<!-- << Nav Links Vertical >>-->
			<nav>
				<ul>
					<li id="first"><a href="#section1">Home</a></li>
					<li><a href="#sec2">WorkSpace</a></li>
					<li><a href="#about-us">About Us</a></li>
				</ul>
			</nav>

			<!-- << Nav Login >>-->
			<div class="login" id="loging">
				<button onclick="disBlock('reg')">SignUp</button>
				<button onclick="disBlock('login')">Login</button>
			</div>
			<div id="logout">
				<button onclick="location.href='php scripts/logout.php'">Logout</button>
			</div>

			<!-- << Menu Btn (for Responsivness) >>-->
			<div class="menu" onclick="display1()"></div>

			<!-- << Nav Links Horizontal (Mobile) >>-->
			<div class="list" id="l">
				<ul>
					<li id="Lfirst"><a href="#section1">Home</a></li>
					<li><a href="#sec2">WorkSpace</a></li>
					<li><a href="#about-us">About Us</a></li>
					<li>
						<a href="javascript:void(0)" onclick="disBlock('reg')">SignUp</a>
					</li>
					<li>
						<a href="javascript:void(0)" onclick="disBlock('login')">login</a>
					</li>
				</ul>
			</div>
		</header>

		<!--			*			-->
		<!--			*			-->

		<!---------- Section 1 Main Image ---------->
		<section class="sec1" id="section1">
			<div class="quote">
				<p>
					<q>
						productivity is never an accident. It is always the result of a
						commitment to excellence, intelligent planning and foccued effort.
					</q>
					paul j.Meyer
				</p>
			</div>
			<div id="message">
				<h2>Message</h2>
				<div id="status">
					Registration Successfull!
					<div id="tick"></div>
				</div>
				<div id="status-error">
					Error: Registration Unsuccessful
					<div id="cross"></div>
				</div>
			</div>
			<div id="login">
				<form  method="post">
					<a href="javascript:void(0)" id="del" onclick="disNone('login')">X</a>
					<h2>Login</h2>
					<label for="email"><b>Email</b></label>
					<input
						type="email"
						placeholder="Enter Email"
						name="email"
						spellcheck="false"
						id="log-email"
						required
					/>

					<label for="password"><b>Password</b></label>
					<input
						type="password"
						placeholder="Enter Password"
						name="password"
						id="log-pass"
						required
					/>
					<div id="log-error">Incorrect Email or Password</div>
					<button type="button" id="sub-btn">Login</button>		
				</form>
			</div>
			<div id="reg">
				<!--START FROM HERE-->
				<form action="php scripts/register.php" method="post">
					<a href="javascript:void(0)" id="reg-del" onclick="disNone('reg')"
						>X</a
					>
					<h2>SignUp</h2>
					<label for="name"><b>Name</b></label>
					<input
						type="text"
						placeholder="Enter Your name"
						name="name"
						spellcheck="false"
						id="name"
						required
					/>

					<label for="DOB"><b>Date of Birth</b></label>
					<input
						type="date"
						placeholder="Enter your Date Of Birth"
						name="DOB"
						id="DOB"
						required
					/>

					<label for="ph"><b>Phone Number</b></label>
					<input
						type="tel"
						placeholder="Enter Phone Number"
						name="ph"
						id="ph"
						spellcheck="false"
						required
					/>

					<label for="email"><b>Email</b></label>
					<input
						type="email"
						placeholder="Enter Email"
						name="email"
						id="email"
						spellcheck="false"
						required
					/>

					<label for="password"><b>Password</b></label>
					<input
						type="password"
						placeholder="Enter Password"
						name="password"
						id="reg-pass"
						onkeyup="password_con()"
						required
					/>

					<label for="re-password"><b>Confirm Password</b></label>
					<input
						type="password"
						placeholder="Confirm Password"
						name="re-password"
						id="reg-pass-con"
						required
						onkeyup="password_con()"
					/>
					<div id="reg-error">Email already registered</div>
					<!-- <button type="submit" id="reg-sub-btn" onclick="message()" onclick="log_suc()" onload="display()"disabled>SignUp</button> -->
					<button type="button" id="reg-sub-btn" disabled>SignUp</button>
				</form>
			</div>
		</section>

		<!--			*			-->
		<!--			*			-->

		<!---------- Section 2 Work Space ---------->
		<section id="sec2" id="sec2">
			<div id="log">
				<div id="list-items">
					<ul>
						<li>Join us now and create exciting projects</li>
						<li>Organize your projects, plans and morein a fun, Flexible <span id="space">and free way.</span></li>
						<li>Divide you project into simple small tasks and then add <span id="space">it in the kanban board.</span></li>
						<li>You can add unlimited number of cards in the board</li>
						<li>Add due date and time to your task in the card</li>
						<li>Rename the the columns according to your project</li>
						<li>Drag and Drop the cards between the columns as you go <span id="space">on</span></li>
						<li>Keep track of your progress at a single glance by <span id="space">visualizing your project in the form of Graphs</span></li>
						<li>Personalize your board by applying different themes</li>
						<li>Upload your image to make it your workspace</li>
						<li>All this and for free?</li>
						<li>Register or signup now to get all features for free!!!</li>
					</ul>
				</div>
				<div id="videos">
					<!-- <video  id="web1" autoplay loop onload="gifs('web1')">
						<source   type="video/mp4" src="data/videos/web1.mp4"/>
					</video> -->
					<video id="web1" src="data/videos/web1.mp4" autoplay loop muted>Unable to Load :(</video>
					<video id="web2" src="data/videos/web2.mp4" autoplay loop muted>Unable to Load :(</video>
					<video id="web3" src="data/videos/web3.mp4" autoplay loop muted>Unable to Load :(</video>
					<video id="web4" src="data/videos/web4.mp4" autoplay loop muted>Unable to Load :(</video>
				</div>
			</div>
			<form id="avatar-form" enctype = "multipart/form-data">
				<div id="avatar">
				<div id="online"></div>
				<div id="upload">
					<button
					type = "button"
						id="upload-image"
						onclick="document.getElementById('avatar-ch-btn').click()"
					>
						Upload Image
					</button>
					<input
						id="avatar-ch-btn"
						type="file"
						name = "file"
						accept="image/png, image/jpeg, image/webp, image/jpg"
						style="display: none"
					/>
				</div>
			</div>
			<input type="submit" id="avatar-sub-btn" value = "Upload">
		</form>
			
			<div id="btn">
				<button id="convert" onclick="change()">Graphs</button>
				<button id="theme" onclick="themes()">Dark Theme</button>
			</div>

			<div id="Graphs">
				<h2>Graphs</h2>
				<div id="bar">
					<div id="total">
						<div id="bar1">Tasks</div>
						<div id="value1"></div>
					</div>

					<div id="on-going">
						<div id="bar2">In-Progress</div>
						<div id="value2"></div>
					</div>

					<div id="Completed">
						<div id="bar3">Completed</div>
						<div id="value3"></div>
					</div>
				</div>

				<div id="pie">
					<div id="chart"></div>
				</div>
			</div>
			<!-- << Main Panel >>-->
			<section class="canvas" id="canvas">
				<div class="col1 container" id="c1">
					<h2 contenteditable="true" id="c1-heading" spellcheck="false">
						Tasks
					</h2>
					<ul class="tasks" id="tasks">
						<li id="for-drag"></li>
						<li draggable="true" class="draggable">
							Create DB
							<a href="javascript:void(0)" class="del">X</a>
							<br /><input type="time" value="01:15" />
							<input type="date" value="2022-04-21" />
						</li>
					</ul>
					<input
						type="text"
						id="task"
						class="input"
						placeholder="Task | Expiry Time | Priority"
					/>
					<input
						type="button"
						value="Add+"
						id="btn-id"
						class="btn"
						onclick="add('task', 'tasks', 'error')"
					/>
					<span id="error"></span>
				</div>

				<!--<< Column 2 >>-->
				<div class="col2 container"  id="c2" spellcheck="false">
					<h2 contenteditable="true" id="c2-heading">Working</h2>
					<ul class="tasks" id="tasks2">
						<li id="for-drag"></li>
						<li draggable="true" class="draggable">
							Drag any Task!
							<a href="javascript:void(0)" class="del">X</a>
							<br /><input type="time" value="02:15" />
							<input type="date" value="2022-04-30" />
						</li>
					</ul>
					<input
						type="text"
						id="task2"
						class="input"
						placeholder="Task | Expiry Time | Priority"
					/>
					<input
						type="button"
						value="Add+"
						id="btn-id"
						class="btn"
						onclick="add('task2', 'tasks2', 'error2')"
					/>
					<span id="error2"></span>
				</div>

				<!-- << column 3 >> -->
				<div class="col3 container" id="c3" spellcheck="false">
					<h2 contenteditable="true" id="c3-heading">Completed</h2>
					<ul class="tasks" id="tasks3">
						<li id="for-drag"></li>
					</ul>
					<input
						type="text"
						id="task3"
						class="input"
						placeholder="Task | Expiry Time | Priority"
					/>
					<input
						type="button"
						value="Add+"
						id="btn-id"
						class="btn"
						onclick="add('task3', 'tasks3', 'error3')"
					/>
					<span id="error3"></span>
				</div>
			</section>
		</section>

		<!--			*			-->
		<!--			*			-->

		<!---------- Section 3 About us ---------->
		<section class="sec3" id="about-us">
			<div class="content">
				<h2>Who Are We?</h2>
				<p>
					We are a team of innovators, constantly striving to maximize value and
					convenience for our customers.Our Vision is to create technology that
					makes life easier for everyone.<br />
					<q>Time is what we want most, but what we use worst</q> William
					Penn<br />
					Time is an invaluable asset. Time once lost cannot be reclaimed and
					reused. That is why we must utilize the time available in such a way,
					so as to get the maximum benefit out of it.<br />
					That is eactly why we are wokrking constantly to give you the best
					experience you ever had.Be more Productive by saving Time with Time
					Manager.Organize your project, plans & more in a fun, Flexible and
					free way.<br />Join us now and manage your projects with us and reach
					new productivity peaks.<br /><br />
					Grow 1% every day. Save Time by being more productive.
				</p>
			</div>
		</section>

		<!--			*			-->
		<!--			*			-->

		<!---------- Footer ---------->
		<footer>
			<!-- << Why Us >>-->
			<div class="message">
				<span id="headings">Why Us? </span>
				<p>
					Go from Idea to Action in Seconds with Time Manager's Intuitively
					Simple Cards. Time Manager is the Fun, Flexible and Free Way to
					Organize Plans, Projects & More.<br />
					Manage projects, and reach new productivity peaks. From high rises to
					the home office, the way your team works is unique accomplish it all
					with Time Manager.<br /><br />
					Grow 1% every day. Save Time by being more productive.
				</p>
			</div>

			<!-- <<ft Links >>-->
			<div class="links">
				<span id="headings">Links</span>
				<ul>
					<li><a href="#section1">Home</a></li>
					<li><a href="#sec2">WorkSpace</a></li>
					<li><a href="#about-us">About Us</a></li>
					<li><a href="proposal/proposal.html">Proposal</a></li>
				</ul>
			</div>

			<!-- << Contact us >> -->
			<div class="info">
				<span id="headings">Contacts</span>
				<p>
					pythonbytes75@gmail.com<br /><br />
					+12 345 67891234<br />
					+34 567 89012345<br />
					+45 678 90123456<br /><br />
				</p>
				<div class="login">
					<a href="#section1"
						><button onclick="disBlock('reg')">SignUp</button></a
					>
					<a href="#section1"
						><button onclick="disBlock('login')">Login</button></a
					>
				</div>
			</div>
			<div class="patented">
				<hr />
				<br />
				<p>
					<small>
						Copyright&copy; 2022, Time Manager. All Right Reserverd
					</small>
				</p>
			</div>
		</footer>
	</body>
</html>



l^W6y%a28I+YTq3<