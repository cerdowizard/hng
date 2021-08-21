<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HNG Resume CV Design</title>
	<link rel="stylesheet">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	list-style: none;
	box-sizing: border-box;
	font-family: 'Ubuntu', sans-serif;
}

body{
	background-color: black;
}
.resume{
	width: 800px;
	background: #fff;
	margin: 25px auto;
	display: flex;
}

.left{
	background: #292b2f;
	width: 250px;
	padding: 0 20px;
}

.right{
	width: calc(100% - 250px);
}

.left .img_holder{
	text-align: center;
	padding: 20px 0;
}

.left .img_holder img{
	width: 200px;
	border-radius: 30px;
}

.pb{
	padding-bottom: 20px;
}

.title{
	font-size: 24px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 5px;
	padding-bottom: 10px;
	color: #ffffff;
	position: relative;
	text-align: right;
	margin-bottom: 15px;
}

.title:before{
	content: "";
	position: absolute;
	top: 35px;
	right: 0;
	width: 50px;
	height: 3px;
	background: #fdfdfd;
}

.left .icon{
	font-size: 20px;
	color: #000000;
}

.left .text{
	color: #ffffff;
	text-transform: uppercase;
	font-size: 13px;
}

.contact .li_wrap{
	display: flex;
	align-items: center;
	width: 100%;
	margin-bottom: 15px;
}

.contact .li_wrap .icon{
	width: 50px;
	height: 50px;
	background: #fff;
	border-radius: 15px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-right: 15px;
}

.contact .li_wrap .text{
	width: calc(100% - 50px);
	word-break: break-word;
	color: #fff;
}

.skills ul,
.hobbies ul{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

.skills .li_wrap,
.hobbies .li_wrap{
	width: 100px;
	height: 100px;
	margin-bottom: 15px;
	border-radius: 15px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.skills .li_wrap{
	background: #fff;
}

.skills .li_wrap .text,
.hobbies .li_wrap .text{
	margin-top: 5px;
}

.hobbies .li_wrap{
	border: 2px solid #fff;
}

.hobbies .li_wrap .icon,
.hobbies .li_wrap .text{
	color: #fff;
}

.hobbies .li_wrap:hover{
	background: #fff;
}

.hobbies .li_wrap:hover .icon,
.hobbies .li_wrap:hover .text{
	color: black;
}

.header{
	background: #292b2f;
	padding: 15px 30px;
	color: #fff;
	height: 260px;
}

.header .name{
	font-size: 32px;
	text-transform: uppercase;
	font-weight: 700;
	color: #ffffff;
}

.header .role{
	font-weight: 300;
	font-size: 20px;
}

.header .about{
	margin-top: 20px;
	line-height: 26px;
}

.right_inner{
	padding: 30px;
	color: #292b2f;
}

.right_inner .education{
	margin-top: 30px;
}

.right_inner .li_wrap{
	display: flex;
	margin-bottom: 15px;
}

.right_inner .li_wrap .date {
    width: 125px;
    color: #000000;
}

.right_inner .li_wrap .info{
	width: calc(100%  - 125px);
	padding-left: 25px;
	position: relative;
}

.right_inner .li_wrap .info_title{
	text-transform: uppercase;
	font-weight: 700;
	letter-spacing: 2px;
	color: #000000;
}

.right_inner .li_wrap .info_com{
	font-weight: 300;
	font-size: 14px;
	margin-top: 3px;
}

.right_inner .li_wrap .info_cont{
	margin-top: 15px;
}

.right_inner .li_wrap .info:before{
	content: "";
	position: absolute;
	top: 3px;
	left: 0;
	width: 10px;
	height: 10px;
	background: #000000;
	border-radius: 50%;
}

.right_inner .li_wrap .info:after{
	content: "";
	position: absolute;
	top: 10px;
	left: 4px;
	width: 2px;
	height: 90%;
	background: black;
}
.form__container{
	margin-left:140px;
}
.form__container .contact{
	
	font-size: 20px;
	margin-bottom: 20px;
}
.form__container .lable__name{
	margin-bottom: 10px;
}
.form__container .lable__email{
	margin-top: 10px;
	margin-bottom: 10px;
}
input{
	width: 230px;
	padding: 10px;
	margin-bottom: 7px;
	outline: 0;
}
.left .image__container a{
	color: white;
}
.image__container img{
	width: 200px;
	height: 100px;
}
</style>
<body>
	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class="image__container">
					<img src="/frontend/download.png" alt="HNG">
					<p>Links</p>
					<a href="https://zuri.team">https://zuri.team</a>
					<br>
					<a href="https://intership.zuri.team">https://intership.zuri.team</a>
					<br>
					<a href="https://training.zuri.team">https://training.zuri.team</a>
				</div>
				<div class="img_holder">
					<img src="/frontend/20200517_140444.jpg" alt="picture">
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text">972 9838485</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text">holuwayinkzzy@gmail.com</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-weebly" aria-hidden="true"></i></div>
									<div class="text">www.aniabukstein.com</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text">17 street, jerusalem, Israel</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="skills_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-html5"></i></div>
									<div class="text">HTML</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-css3-alt"></i></div>
									<div class="text">CSS</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-js"></i></div>
									<div class="text">Javascript</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-react"></i></div>
									<div class="text">React.JS</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="hobbies_wrap pb">
					<div class="title">
						hobbies
					</div>
					<div class="hobbies">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-book"></i></div>
									<div class="text">Reading</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-music"></i></div>
									<div class="text">Music</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-gamepad"></i></div>
									<div class="text">Gaming</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-tree"></i></div>
									<div class="text">Gardening</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name">
							POPOOLA ADEYINKA ABIMBOLA
						</div>
						<div class="role">
							Backend Developer
						</div>
					</div>
					<div class="about">
						An energetic and imaginative young web developer who is able to work alongside other talented IT professionals in creating websites to the very highest standards. Abimbola has a high awareness of industry issues and trends. He is flexible, resourceful and willing to acquire more knowledge to solve any unique challenge. 
					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											2018 - Present
										</div>
										<div class="info">
											<p class="info_title">
												UI Team Lead
											</p>
											<p class="info_com">
												Facebook
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2015 - 2018
										</div>
										<div class="info">
											<p class="info_title">
												UI Developer
											</p>
											<p class="info_com">
												Amazon
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2014 - 2015
										</div>
										<div class="info">
											<p class="info_title">
												Junior UI Developer
											</p>
											<p class="info_com">
												Coding Power
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											2010 - 2014
										</div>
										<div class="info">
											<p class="info_title">
												Computer Science
											</p>
											<p class="info_com">
												Israel University
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2008 - 2010
										</div>
										<div class="info">
											<p class="info_title">
												Computer Science
											</p>
											<p class="info_com">
												Israel Junior College
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											1998 - 2008
										</div>
										<div class="info">
											<p class="info_title">
												Schooling
											</p>
											<p class="info_com">
												Israel School
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="form__container">
						<form action="contact/create" method="post">
                            @csrf
						  <div class="contact">
							<h3>Leave a message</h3>
						  </div>
						  <div class="">
							  <div class="lable__name">
								<label for="name">Name :</label>
							  </div>
							<input type="text"  placeholder="Enter your name" name="name" />
						  </div>
						  <div class="">
							<div class="lable__email">
								<label for="name">Email :</label>
							  </div>
							<input type="text" required placeholder="Enter your email" name="email"/>
						  </div>
						  <div class="">
							<textarea
							  name="message"
							  id=""
							  cols="30"
							  rows="10"
							  placeholder="Leave a message"
							  required
							></textarea>
						  </div>
						  <div class="">
							  <a href="/frontend/cong.html"><input type="button" value="Submit" name=""/></a>
						  </div>
						</form>
					  </div>
				</div>
			</div>
		</div>
	</div>
	<script src="/frontend/js.js"></script>
</body>
</html>