<div class="ezy__nav2 gray">
	<nav class="navbar navbar-expand-lg  py-3">
		<div class="container">
			<a class="navbar-brand" href="#">
				CRUD APP
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
				aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span>
					<span></span>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-4 mt-lg-0">
					<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Why us?</a></li>
					<li class="nav-item"><a class="nav-link" href="#">How It Works</a></li>
				</ul>
				<ul class="navbar-nav flex-row mb-2 mb-lg-0 ms-lg-3">
					<li class="nav-item me-2">
						<button class="btn btn-outline-primary px-3">Sign Up</button>
					</li>
					<li class="nav-item">
						<button class="btn btn-primary px-3">Log In</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<style>
.ezy__nav2 {
	/* Bootstrap variables */
	--bs-body-color: #000;
	--bs-body-bg: rgb(255, 255, 255);

	/* Easy Frontend variables */
	--ezy-theme-color: rgb(13, 110, 253);
	--ezy-theme-color-rgb: 13, 110, 253;

	background-color: var(--bs-body-bg);
}

/* Gray Block Style */
.gray .ezy__nav2,
.ezy__nav2.gray {
	/* Bootstrap variables */
	--bs-body-bg: rgb(246, 246, 246);
}

/* Dark Gray Block Style */
.dark-gray .ezy__nav2,
.ezy__nav2.dark-gray {
	/* Bootstrap variables */
	--bs-body-color: #ffffff;
	--bs-body-bg: rgb(30, 39, 53);
}

/* Dark Block Style */
.dark .ezy__nav2,
.ezy__nav2.dark {
	/* Bootstrap variables */
	--bs-body-color: #ffffff;
	--bs-body-bg: rgb(11, 23, 39);


}

.ezy__nav2 .navbar-brand {
	font-weight: 800;
	font-size: 30px;
	color: var(--bs-body-color);
}

.ezy__nav2 .navbar-toggler {
	border: none;
	box-shadow: none !important;
}

.ezy__nav2 .navbar-toggler>span {
	display: flex;
	align-items: center;
	height: 32px;
}

.ezy__nav2 .navbar-toggler>span>span {
	position: relative;
}

.ezy__nav2 .navbar-toggler>span>span,
.ezy__nav2 .navbar-toggler>span>span::before,
.ezy__nav2 .navbar-toggler>span>span::after {
	height: 2px;
	background-color: var(--bs-body-color);
	width: 25px;
	display: inline-block;
	border-radius: 5px;
	transition: all .35s ease-in-out;
}

.ezy__nav2 .navbar-toggler>span>span::before,
.ezy__nav2 .navbar-toggler>span>span::after {
	content: '';
	position: absolute;
	left: 0;
}

.ezy__nav2 .navbar-toggler[aria-expanded="false"]>span>span::before {
	top: 7px;
}

.ezy__nav2 .navbar-toggler[aria-expanded="false"]>span>span::after {
	bottom: 7px;
}

.ezy__nav2 .navbar-toggler[aria-expanded="true"]>span>span {
	background-color: transparent;
}

.ezy__nav2 .navbar-toggler[aria-expanded="true"]>span>span::before {
	top: 0;
	transform: rotate(-45deg);
}

.ezy__nav2 .navbar-toggler[aria-expanded="true"]>span>span::after {
	bottom: 0;
	transform: rotate(45deg);
}

.ezy__nav2 .navbar-nav .nav-link {
	color: var(--bs-body-color);
	opacity: .6;
}

.ezy__nav2 .navbar-nav .nav-link:hover,
.ezy__nav2 .navbar-nav .nav-link:focus,
.ezy__nav2 .navbar-nav .nav-link.active {
	color: var(--bs-body-color);
	opacity: 1;
}

@media (min-width: 992px) {
	.ezy__nav2 .navbar-nav .nav-link {
		padding-right: 16px;
		padding-left: 16px;
	}
}

/* btns */
.ezy__nav2 .btn-primary {
	background-color: var(--ezy-theme-color);
	border-color: var(--ezy-theme-color);
}

.ezy__nav2 .btn-primary:hover {
	background-color: rgba(var(--ezy-theme-color-rgb), .9);
	border-color: rgba(var(--ezy-theme-color-rgb), .9);
}

.ezy__nav2 .btn-outline-primary {
	color: var(--ezy-theme-color);
	border-color: var(--ezy-theme-color);
}

.ezy__nav2 .btn-outline-primary:hover {
	color: #fff;
	background-color: rgba(var(--ezy-theme-color-rgb), .9);
	border-color: rgba(var(--ezy-theme-color-rgb), .9);
}
</style>