<style>
	body {
  font-family: 'Roboto', sans-serif;
  color: #545E6C;
  /*background: #f5f5f5;*/
  font-size: 14px;
  width: 755px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 700;
}
a {
  color: #2d7788;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
}
a:hover {
  text-decoration: underline;
  color: #1a454f;
}
a:focus {
  text-decoration: none;
}
p {
  line-height: 1.5;
}
.wrapper {
  background: #42A8C0;  
  margin: 0 auto;
  position: relative;
  -webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}
.sidebar-wrapper {
  background: #42A8C0;
  height: 100%;
  min-height: 800px;
  color: #fff;
}
.sidebar-wrapper a {
  color: #fff;
}
.sidebar-wrapper .profile-container {
  padding: 30px;
  background: rgba(0, 0, 0, 0.2);
  text-align: center;
  color: #fff;
}
.sidebar-wrapper .name {
  font-size: 32px;
  font-weight: 900;
  margin-top: 0;
  margin-bottom: 10px;
}
.sidebar-wrapper .tagline {
  color: rgba(255, 255, 255, 0.6);
  font-size: 16px;
  font-weight: 400;
  margin-top: 0;
  margin-bottom: 0;
}
.sidebar-wrapper .profile {
  margin-bottom: 15px;
}
.sidebar-wrapper .contact-list .fa {
  margin-right: 5px;
  font-size: 18px;
  vertical-align: middle;
}
.sidebar-wrapper .contact-list li {
  margin-bottom: 15px;
}
.sidebar-wrapper .contact-list li:last-child {
  margin-bottom: 0;
}
.sidebar-wrapper .contact-list .email .fa {
  font-size: 14px;
}
.sidebar-wrapper .container-block {
  padding: 30px;
}
.sidebar-wrapper .container-block-title {
  text-transform: uppercase;
  font-size: 16px;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 15px;
}
.sidebar-wrapper .degree {
  font-size: 14px;
  margin-top: 0;
  margin-bottom: 5px;
}
.sidebar-wrapper .education-container .item {
  margin-bottom: 15px;
}
.sidebar-wrapper .education-container .item:last-child {
  margin-bottom: 0;
}
.sidebar-wrapper .education-container .meta {
  color: rgba(255, 255, 255, 0.6);
  font-weight: 500;
  margin-bottom: 0px;
  margin-top: 0;
}
.sidebar-wrapper .education-container .time {
  color: rgba(255, 255, 255, 0.6);
  font-weight: 500;
  margin-bottom: 0px;
}
.sidebar-wrapper .languages-container .lang-desc {
  color: rgba(255, 255, 255, 0.6);
}
.sidebar-wrapper .languages-list {
  margin-bottom: 0;
}
.sidebar-wrapper .languages-list li {
  margin-bottom: 10px;
}
.sidebar-wrapper .languages-list li:last-child {
  margin-bottom: 0;
}
.sidebar-wrapper .interests-list {
  margin-bottom: 0;
}
.sidebar-wrapper .interests-list li {
  margin-bottom: 10px;
}
.sidebar-wrapper .interests-list li:last-child {
  margin-bottom: 0;
}
.main-wrapper {
  background: #fff;
  padding: 60px;
}
.main-wrapper .section-title {
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 500;
  color: #2d7788;
  position: relative;
  margin-top: 0;
  margin-bottom: 20px;
}
.main-wrapper .section-title .fa {
  width: 30px;
  height: 30px;
  margin-right: 8px;
  display: inline-block;
  color: #fff;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  background: #2d7788;
  text-align: center;
  padding-top: 8px;
  font-size: 16px;
  position: relative;
  top: -2px;
}
.main-wrapper .section {
  margin-bottom: 60px;
}
.main-wrapper .experiences-section .item {
  margin-bottom: 30px;
}
.main-wrapper .upper-row {
  position: relative;
  overflow: hidden;
  margin-bottom: 2px;
}
.main-wrapper .job-title {
  color: #3F4650;
  font-size: 16px;
  margin-top: 0;
  margin-bottom: 0;
  font-weight: 500;
}
.main-wrapper .time {
  position: absolute;
  right: 0;
  top: 0;
  color: #97AAC3;
}
.main-wrapper .company {
  margin-bottom: 10px;
  color: #97AAC3;
}
.main-wrapper .project-title {
  font-size: 16px;
  font-weight: 400;
  margin-top: 0;
  margin-bottom: 5px;
}
.main-wrapper .projects-section .intro {
  margin-bottom: 30px;
}
.main-wrapper .projects-section .item {
  margin-bottom: 15px;
}
.skillset .item {
  margin-bottom: 15px;
  overflow: hidden;
}
.skillset .level-title {
  font-size: 14px;
  margin-top: 0;
  margin-bottom: 12px;
}
.skillset .level-bar {
  height: 12px;
  background: #f5f5f5;
}
.skillset .level-bar-inner {
  height: 12px;
  background: #7bc2d3;
}
.footer {
  padding: 30px;
  padding-top: 60px;
}
.footer .copyright {
  line-height: 1.6;
  color: #545E6C;
  font-size: 13px;
}
.footer .fa-heart {
  color: #fb866a;
}
/* Extra small devices (phones, less than 768px) */
@media (max-width: 767px) {
  .sidebar-wrapper {
    position: static;
    width: inherit;
  }
  .main-wrapper {
    padding: 30px;
  }
  .main-wrapper .time {
    position: static;
    display: block;
    margin-top: 5px;
  }
  .main-wrapper .upper-row {
    margin-bottom: 0;
  }
}
/* Small devices (tablets, 768px and up) */
/* Medium devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .skillset .level-title {
    display: inline-block;
    float: left;
    width: 30%;
    margin-bottom: 0;
  }
  .skillset .level-bar {
    display: inline-block;
    width: 70%;
    float: left;
    position: relative;
    top: 1px;
  }
}
</style>