/* Function for displaynig nav links in mobile */
var turn = true;
function display1() {
	var list = document.getElementById("l");
	if (turn) {
		list.style.display = "block";
		turn = false;
	} else {
		list.style.display = "none";
		turn = true;
	}
}

function disBlock(identity) {
	let login = document.getElementById(identity);
	login.style.opacity = 1;
	login.style.display = "block";
}

function disNone(identity) {
	let login = document.getElementById(identity);
	login.style.opacity = 0;
	setTimeout(() => {
		login.style.display = "none";
	}, 500);
}

/*---------- Canvas ----------*/

function add(Task, tList, ErrorMsg) {
	let NewTask = document.getElementById(Task).value;
	let taskList = document.getElementById(tList); // List container

	document.getElementById(ErrorMsg).innerHTML = ""; // Remove the error meassgae

	if (NewTask == "") {
		document.getElementById(ErrorMsg).innerHTML = "Enter a Task first!";
	} else {
		let NewListItem = document.createElement("li"); // New item to be inserted in the list container
		NewListItem.textContent = NewTask;
		//NewListItem.className = "draggable"; // for dragging purpose
		NewListItem.draggable = true; // also for dragging purpose
		NewListItem.classList.add("draggable");
		NewListItem.id = "drag";

		let rmvBtn = document.createElement("a");
		rmvBtn.textContent = "X";
		rmvBtn.href = "javascript:void(0)";
		rmvBtn.className = "del";

		let time = document.createElement("input");
		time.setAttribute("type", "time");

		let date = document.createElement("input");
		date.setAttribute("type", "date");

		let br = document.createElement("br");

		NewListItem.appendChild(rmvBtn);
		NewListItem.appendChild(br);
		NewListItem.appendChild(time);
		NewListItem.appendChild(date);
		taskList.appendChild(NewListItem);

		setHeight(1);
	}
	document.getElementById(Task).value = "";

	//-----------------------------------------//
}

function setHeight(operation) {
	let canvas = document.getElementById("canvas");
	let sec2 = document.getElementById("sec2");
	let height = canvas.offsetHeight;
	let secHeight = sec2.offsetHeight;

	if (operation === 1) {
		let newHight = height + 45;
		canvas.style.height = newHight + "px";

		let newSecHeight = secHeight + 45;
		sec2.style.height = newSecHeight + "px";
	} else {
		let newHight = height - 45;
		canvas.style.height = newHight + "px";

		let newSecHeight = secHeight - 45;
		sec2.style.height = newSecHeight + "px";
	}
}

/* --------- Creating a Task -----------*/
let taskList = document.getElementById("tasks"); // for column 1
taskList.addEventListener("click", function removeItem(e) {
	if (e.target.classList.contains("del")) {
		let li = e.target.parentNode;
		taskList.removeChild(li);
		setHeight(0);
	}
});
let taskList2 = document.getElementById("tasks2"); // for column 2
taskList2.addEventListener("click", function removeItem(e) {
	if (e.target.classList.contains("del")) {
		let li = e.target.parentNode;
		taskList2.removeChild(li);
		setHeight(0);
	}
});
let taskList3 = document.getElementById("tasks3"); // for column 3
taskList3.addEventListener("click", function removeItem(e) {
	if (e.target.classList.contains("del")) {
		let li = e.target.parentNode;
		taskList3.removeChild(li);
		setHeight(0);
	}
});
/*------------------------------------------------ */
/*             Draging          */

const container = document.querySelectorAll(".tasks"); //container contains all the ul
const draggables = document.getElementsByClassName("tasks");
//each child of ul of class tasks will have the eventlistenter
for (const draggable of draggables) {
	draggable.addEventListener("dragstart", (e) => {
		e.target.classList.add("dragging");
	});

	draggable.addEventListener("dragend", (e) => {
		e.target.classList.remove("dragging");
	});
}

//for each ul
container.forEach((container) => {
	container.addEventListener("dragover", () => {
		const drag = document.getElementsByClassName("dragging")[0];
		container.appendChild(drag);
	});
});

/*           GRAPH             */

let graph = document.getElementById("Graphs");
graph.style.display = "none";
function change() {
	let ul1 = document.getElementById("tasks");
	let ul2 = document.getElementById("tasks2");
	let ul3 = document.getElementById("tasks3");

	let c1 = ul1.getElementsByClassName("draggable").length;
	let c2 = ul2.getElementsByClassName("draggable").length;
	let c3 = ul3.getElementsByClassName("draggable").length;

	let total = c1 + c2 + c3;
	let per1 = (c1 / total) * 100;
	let per2 = (c2 / total) * 100;
	let per3 = (c3 / total) * 100;

	let val1 = document.getElementById("value1");
	let val2 = document.getElementById("value2");
	let val3 = document.getElementById("value3");

	val1.style.height = per1 + "%";
	val2.style.height = per2 + "%";
	val3.style.height = per3 + "%";

	val1.innerHTML = Math.trunc(per1) + "%";
	val2.innerHTML = Math.trunc(per2) + "%";
	val3.innerHTML = Math.trunc(per3) + "%";

	let graph = document.getElementById("Graphs");
	let canvas = document.getElementById("canvas");
	let btn = document.getElementById("convert");

	if (graph.style.display != "none") {
		graph.style.display = "none";
		canvas.style.display = "flex";
		btn.textContent = "Graphs";
	} else if (canvas.style.display != "none") {
		canvas.style.display = "none";
		graph.style.display = "block";
		btn.textContent = "Kanban Board";
	}

	let temp = per1 + per2;
	let str1 = per1.toString();
	let str2 = temp.toString();

	document.documentElement.style.setProperty("--cv1Init", "0%");
	document.documentElement.style.setProperty("--cv1Final", str1 + "%");
	document.documentElement.style.setProperty("--cv2Init", str1 + "%");
	document.documentElement.style.setProperty("--cv2Final", str2 + "%");
	document.documentElement.style.setProperty("--cv3Init", str2 + "%");
	document.documentElement.style.setProperty("--cv3Final", "100%");
	document.getElementById("bar1").innerHTML =
		document.getElementById("c1-heading").innerHTML;

	document.getElementById("bar2").innerHTML =
		document.getElementById("c2-heading").innerHTML;

	document.getElementById("bar3").innerHTML =
		document.getElementById("c3-heading").innerHTML;
}

/*			THEMES			 */

let counter = 0;
function themes() {
	let btn = document.getElementById("theme");
	let canvas = document.getElementById("canvas");
	console.log(counter);
	if (counter === 4) counter = 0;

	if (counter === 0) {
		canvas.classList.add("theme0");
		btn.textContent = "Neon Theme";
	} else if (counter === 1) {
		canvas.classList.remove("theme0");
		canvas.classList.add("theme1");
		btn.textContent = "Coffee Theme";
	} else if (counter === 2) {
		canvas.classList.remove("theme1");
		canvas.classList.add("theme2");
		btn.textContent = "Peach Theme";
	} else {
		canvas.classList.remove("theme2");
		btn.textContent = "Dark Theme";
	}
	counter++;
}

//v6
function password_con() {
	let pass = document.getElementById("reg-pass"); // password
	let pass_con = document.getElementById("reg-pass-con"); //confirm password
	let btn = document.getElementById("reg-sub-btn");

	if (pass.value === pass_con.value) btn.disabled = false;
	else btn.disabled = true;

	//message();
}

function message() {
	let msg = document.getElementById("message");
	msg.style.display = "block";
	console.log("yo");
	setTimeout(() => {}, 100000);
}

//window.onload = (e) => {};

window.addEventListener("load", function () {
	let logDiv = this.document.getElementById("log");
	let loginBtn = this.document.getElementById("loging");
	let logoutBtn = this.document.getElementById("logout");

	let log = localStorage.getItem("key");
	if (log == "1") {
		this.localStorage.setItem("key", "0");
		logDiv.style.display = "none";
		loginBtn.style.display = "none";
		logoutBtn.style.display = "block";
	} else {
		logDiv.style.display = "block";
		loginBtn.style.display = "block";
		logoutBtn.style.display = "none";
	}
});
